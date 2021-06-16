const baseURL = 'https://lighthouse-user-api.herokuapp.com'
const indexURL = baseURL + '/api/v1/users/'
const datapanel = document.querySelector('#data-panel')
const people = []
const searchForm = document.querySelector('#search-form')
const searchInput = document.querySelector('#search-input')
const PEOPLE_PER_PAGE = 16
const paginator = document.querySelector('#paginator')
const filter = document.querySelector('.filter')
let filteredpeople = []
const light = document.querySelector('.fa-lightbulb')
const navbar = document.querySelector('.navbar')
let page = 1
const genderselector = document.querySelector('#genderselector')

//渲染朋友資料
function showpeopleInfo(data){
  let rawhtml=''
  data.forEach((data) => {
    rawhtml += ` <div class="card col-6 col-sm-3" style="width: 18rem;">
  <img class="personinfo card-img-top" data-toggle="modal" data-target="#personinfo" data-id="${data.id}" src="${data.avatar}" alt="Card image cap">
  
  <div class="card-body">
    <h5 class="card-title">${data.name} ${data.surname}</h5>    
  </div>
   <div id="action-button" class="card-footer buttons mb-1">
              
                <i data-id="${data.id}" class="fas fa-plus-circle btn-add-favorite"></i>
                <i data-id="${data.id}" class="fas fa-info-circle" data-toggle="modal" data-target="#personinfo"></i>
                <i data-id="${data.id}" class="far fa-comment-dots chat" data-toggle="modal" data-target="#personchat"></i>
              </div>
</div>`
  })  
  datapanel.innerHTML = rawhtml
}
//以16人為單位進行分頁
function getPeopleByPage(page) {
  const data = filteredpeople.length ? filteredpeople : people
  const startIndex = (page - 1) * PEOPLE_PER_PAGE
    return data.slice(startIndex, startIndex + PEOPLE_PER_PAGE)
}

//計算共有幾頁並且渲染分頁器
function renderPaginator(amount){
  const numberofPages = Math.ceil(amount / PEOPLE_PER_PAGE)
  let rawHTML = ''
  for(let page = 1; page <= numberofPages; page++){
      rawHTML += `<li class="page-item"><a class="page-link" href="#" data-page = ${page}>${page}</a></li>`      
  }
  paginator.innerHTML = rawHTML
}
//渲染modal資料
function showpersonInfo(id){
  const avatar = document.querySelector('.avatar') 
  const modalname = document.querySelector('.modal-title')  
  const email = document.querySelector('.email')
  const gender = document.querySelector('.gender')
  const age = document.querySelector('.age')
  const region = document.querySelector('.region')
  const birthday = document.querySelector('.birthday')
  axios.get(indexURL + id)
  .then(response=>{
    const data = response.data
    modalname.innerText = `${data.name} ${data.surname}`
    avatar.innerHTML = `<img src="${data.avatar}" style="border-radius:5px;width:10vw" alt="">`
    gender.innerText = `gender: ${data.gender}`
    email.innerText = `e-mail: ${data.email}`
    age.innerText = `age: ${data.age}`
    region.innerText = `region: ${data.region}`
    birthday.innerText = `birthday: ${data.birthday}`
    console.log(data)

})
}
//渲染聊天資料
function showpersonchat(id){
 const avatar = document.querySelector('.chatavatar')
 const modalname = document.querySelector('#modal-chat-title') 
  axios.get(indexURL + id)
  .then(response => {   
    const data = response.data
    avatar.innerHTML = `<img src="${data.avatar}" alt="" class="chat-avatar"></i>`
    modalname.innerText = `${data.name}'s Chat`
  })
  .catch(err => {
    console.error(err); 
  })
}

//將對象加到favorite
function addToFavorite(id){
  const list = JSON.parse(localStorage.getItem('favoriteFriends')) || []
  const friend = people.find((friend) => friend.id === id)
   if (!list.some((friend) => friend.id === id)) {
    list.push(friend)
    localStorage.setItem('favoriteFriends', JSON.stringify(list))
    return alert('朋友加入成功!')
  } 
  else if (list.some((friend) => friend.id === id)) {
    return alert('此朋友已在收藏清單中')
  }  
}
//在線或離線
function lightordark(){
 const num = Math.round(Math.random()) 
  if(num === 1){
   light.classList.add('light')
   light.classList.remove('dark')
 }if(num === 0){
   light.classList.add('dark')
   light.classList.remove('light')
} 
}

$(function () {
const $backToTop = $('.js-back-to-top')
const $win = $(window)
// 當用戶滾動到離頂部100像素時，展示回到頂部按鈕
$win.scroll(function () {
if ($win.scrollTop() > 400) {
$backToTop.show()
} else {
$backToTop.hide()
}
})
// 當用戶點擊按鈕時，通過動畫效果返回頭部
$backToTop.click(function () {
$('html, body').animate({scrollTop: 0}, 300)
})

})


axios.get(indexURL)
  .then(response=>{
  people.push(...response.data.results)   
   renderPaginator(people.length)
   showpeopleInfo(getPeopleByPage(page))
})
//朋友資料與加到喜愛與聊天資料
datapanel.addEventListener('click',function showpeopleid(event){
  if (event.target.matches('.personinfo') ||event.target.matches('.fa-info-circle')) {    
    showpersonInfo(Number(event.target.dataset.id))
  } else if (event.target.matches('.btn-add-favorite')){
    addToFavorite(Number(event.target.dataset.id))
  } else if (event.target.matches('.chat')){    
    showpersonchat(Number(event.target.dataset.id))
    lightordark()
    
}
})

 
//搜尋監聽器
searchForm.addEventListener('submit',function onSearchFormSubmitted(event){
  event.preventDefault()
  const keyword = searchInput.value.trim().toLowerCase()
  filteredpeople = people.filter(person => person.name.toLowerCase().includes(keyword) || person.surname.toLowerCase().includes(keyword)|| person.region.toLowerCase().includes(keyword))

  if (filteredpeople.length === 0) {
    alert(`您輸入的關鍵字:${keyword}沒有符合的朋友`)
  }
  renderPaginator(filteredpeople.length)  
  showpeopleInfo(getPeopleByPage(page))
})

paginator.addEventListener('click',function onPaginatorclicked(event){
  if (event.target.tagName !== 'A') return
  page = Number(event.target.dataset.page)   
  showpeopleInfo(getPeopleByPage(page))
})

document.addEventListener('scroll',function onpagescroll(){
  const navbarheight = 200
  const distanceFromTop = Math.abs(document.body.getBoundingClientRect().top)
  if (distanceFromTop >= navbarheight) {
    navbar.classList.add('opacity')
      }else{navbar.classList.remove('opacity')}  
}) 

genderselector.addEventListener('click',function genderselect(event){  
  if (event.target.matches('.select-female') || event.target.matches('.female') || event.target.matches('.fa-female')) {
    filteredpeople = people.filter(person => person.gender==='female')        
  renderPaginator(filteredpeople.length)  
  showpeopleInfo(getPeopleByPage(page))
  }
  else if (event.target.matches('.select-male') || event.target.matches('.male') || event.target.matches('.fa-male')) {
    filteredpeople = people.filter(person => person.gender==='male')
        
  renderPaginator(filteredpeople.length)  
  showpeopleInfo(getPeopleByPage(page))
  }
  else if (event.target.matches('.select-all') || event.target.matches('.all') || event.target.matches('.fa-user')) {        
    filteredpeople = people
  renderPaginator(filteredpeople.length)  
  showpeopleInfo(getPeopleByPage(page))
  }
    
})