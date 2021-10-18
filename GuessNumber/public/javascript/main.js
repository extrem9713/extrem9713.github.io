let ans = Math.floor(Math.random()*99)+1
let i = 1
const button = document.querySelector('.check')
const reset = document.querySelector('.reset')
const show = document.querySelector('.show')
button.addEventListener('click', checknum)
function checknum() {  
const guessnumber = document.querySelector('.guessnumber').value
const guessnumberborder = document.querySelector('.guessnumber')

  if(ans === Number(guessnumber)) {
    show.innerHTML =`答對了，共猜了${i}次`
    guessnumberborder.style.border ='2px solid blue'
    
  }
  else if( Number(guessnumber) <= 0){
     show.innerHTML='請輸入正數喔~'
    guessnumberborder.style.border='2px solid red'
  }
  else if(ans > Number(guessnumber)) {
    show.innerHTML='數字太小了~'
    guessnumberborder.style.border='2px solid red'
    
    i++
  }
  else if(ans < Number(guessnumber)) {
    show.innerHTML='數字太大了~'
    guessnumberborder.style.border='2px solid red'
    
    i++
  }else{
    show.innerHTML = '請輸入數字~'
    guessnumberborder.style.border='2px solid red'
  }
}
reset.addEventListener('click', resetnum)
function resetnum() {
  ans = Math.floor(Math.random()*99) + 1
  show.innerHTML ='遊戲已重置'
  document.querySelector('.guessnumber').value = ''
  i = 1
}
const changebg = document.querySelector('.changebg')
const body = document.querySelector('body')
changebg.addEventListener('click',(event)=>{
  const target = event.target
 return body.style.background = target.style.background
})