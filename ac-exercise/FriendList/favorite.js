const baseURL = 'https://lighthouse-user-api.herokuapp.com'
const indexURL = baseURL + '/api/v1/users/'
const datapanel = document.querySelector('#data-panel')
const people = JSON.parse(localStorage.getItem('favoriteFriends')) || []
const searchForm = document.querySelector('#search-form')
const searchInput = document.querySelector('#search-input')
const light = document.querySelector('.fa-lightbulb')
const navbar = document.querySelector('.navbar')
//渲染朋友資料
function showpeopleInfo(data){
  let rawhtml = ''
  data.forEach(data=>{
    rawhtml += ` <div class="card col-6 col-sm-3" style="width: 18rem;">
  <img class="personinfo card-img-top" data-toggle="modal" data-target="#personinfo" data-id="${data.id}" src="${data.avatar}" alt="Card image cap">
  
  <div class="card-body">
    <h5 class="card-title">${data.name} ${data.surname}</h5>    
  </div>
   <div class="card-footer buttons">
                <i class="far fa-comment-dots chat" data-toggle="modal" data-target="#personchat" data-id="${data.id}"></i>
                <i data-id="${data.id}" class="fas fa-info-circle" data-toggle="modal" data-target="#personinfo"></i>
                <i class="fas fa-times-circle btn-remove-favorite" data-id="${data.id}"></i>
              </div>
</div>`
  })  
  datapanel.innerHTML = rawhtml
}
//刪除喜愛朋友
function removeFromFavorite(id){
  if (!people) return
  const personIndex = people.findIndex((friend)=>friend.id === id)
  if (personIndex === -1) return
  people.splice(personIndex, 1)
  localStorage.setItem('favoriteFriends',JSON.stringify(people))
  showpeopleInfo(people)
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
    avatar.innerHTML = `<img src="${data.avatar}" alt="" style="border-radius:5px;width:10vw">`
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
    avatar.innerHTML = `<img src="${data.avatar}" alt="" class="chat-avatar">`
    modalname.innerText=`${data.name}'s Chat`
  })
  .catch(err => {
    console.error(err); 
  })
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

//朋友資料與加到喜愛與聊天資料
datapanel.addEventListener('click', function onPanelClick(event){
  if (event.target.matches('.personinfo') || event.target.matches('.fa-info-circle')) {
    showpersonInfo(Number(event.target.dataset.id))
    console.log(event.target.dataset.id)
  } else if (event.target.matches('.btn-remove-favorite')) {
    removeFromFavorite(Number(event.target.dataset.id))
  } else if (event.target.matches('.chat')) {
    console.log(event.target.dataset.id)
    showpersonchat(Number(event.target.dataset.id))
    lightordark()
}
})

document.addEventListener('scroll',function onpagescroll () {
  const navbarheight = 200
  const distanceFromTop = Math.abs(document.body.getBoundingClientRect().top)
  if (distanceFromTop >= navbarheight){
    navbar.classList.add('opacity')
      }else{navbar.classList.remove('opacity')}  
}) 

 showpeopleInfo(people)

$(function () {
const $backToTop = $('.js-back-to-top')
const $win = $(window)
// 當用戶滾動到離頂部100像素時，展示回到頂部按鈕
$win.scroll(function () {
if ($win.scrollTop() > 100) {
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


