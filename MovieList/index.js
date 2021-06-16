const BASE_URL = ' https://movie-list.alphacamp.io'
const INDEX_URL = BASE_URL + '/api/v1/movies/'
const POSTER_URL = BASE_URL + '/posters/'

const movies = []
const datapanel = document.querySelector('#data-panel')
const searchForm = document.querySelector('#search-form')
const searchInput = document.querySelector('#search-input')
const MOVIES_PER_PAGE = 12
const paginator = document.querySelector('#paginator')
let Currentpage = 1

function renderMovieList(data){
  let rawhtml = ''

  data.forEach(item => {
    rawhtml +=`  <div class="col-sm-3">
          <div class="mb-2">
            <div class="card">
              <img
                src="${POSTER_URL + item.image}"
                class="card-img-top"
                alt="Movie Poster"
              />
              <div class="card-body">
                <h5 class="card-title">${item.title}</h5>
              </div>
              <div class="card-footer">
                <button class="btn btn-primary btn-show-movie" data-toggle="modal" data-target="#movie-modal" data-id="${item.id}">More</button>
                <button class="btn btn-info btn-add-favorite" data-id="${item.id}"><i class="fas fa-heart"></i></button>
              </div>
            </div>
          </div>
        </div>`
  })

  datapanel.innerHTML = rawhtml
}

function showMovieModal (id) {
  const modalTitle = document.querySelector('#movie-modal-title')
  const modalImage = document.querySelector('#movie-modal-image')
  const modalDate = document.querySelector('#movie-modal-date')
  const modalDescription = document.querySelector('#movie-modal-description')

  axios.get(INDEX_URL+id)
  .then(response => {
    const data = response.data.results
    modalTitle.innerText = data.title
    modalDate.innerText = 'release date' + data.release_date
    modalDescription.innerText = data.description
    modalImage.innerHTML = `<img src="${POSTER_URL + data.image}" alt="movie-image" class="img-fluid">`
  })
  .catch(err => {
    console.error(err); 
  })
}

function addToFavorite(id){
  const list = JSON.parse(localStorage.getItem('favoriteMovies')) || []
  const movie = movies.find((movie) => movie.id === id)
  if(list.some((movie) => movie.id === id)){
    return alert('此電影已在收藏清單中')
  }
  list.push(movie)
  localStorage.setItem('favoriteMovies', JSON.stringify(list))
}

function getMovieByPage(page){
  const startIndex = (page-1) * MOVIES_PER_PAGE
  return movies.slice(startIndex, startIndex + MOVIES_PER_PAGE)
}

function renderPaginator(amount){
  const numberofPages = Math.ceil(amount / MOVIES_PER_PAGE)
  let rawHTML = ''
  for(let page = 1; page<=numberofPages; page++){
      rawHTML +=`<li class="page-item"><a class="page-link" href="#" data-page = ${page}>${page}</a></li>`      
  }
  paginator.innerHTML = rawHTML
}

axios.get(INDEX_URL)
.then(response => {
  movies.push(...response.data.results)
  renderPaginator(movies.length)
  renderMovieList(getMovieByPage(1))  
  
})
.catch(err => {
  console.error(err); 
})

datapanel.addEventListener('click', function onPanelClick(event){
  if(event.target.matches('.btn-show-movie')){
    showMovieModal(Number(event.target.dataset.id))
    console.log(event.target.dataset.id)
  }else if(event.target.matches('.btn-add-favorite')){
    addToFavorite(Number(event.target.dataset.id))
  }
})

searchForm.addEventListener('submit',function onSearchFormSubmitted(event){
  event.preventDefault()
  const keyword = searchInput.value.trim().toLowerCase()
  let filteredmovies = []
  filteredmovies = movies.filter(movie => movie.title.toLowerCase().includes(keyword))

  if(filteredmovies.length === 0){
    alert(`您輸入的關鍵字:${keyword}沒有符合的電影`)
  }
  renderMovieList(filteredmovies)
})

paginator.addEventListener('click',function onPaginatorclicked(event){
  if(event.target.tagName !== 'A') return
  Currentpage = Number(event.target.dataset.page)
  renderMovieList(getMovieByPage(Currentpage))
})