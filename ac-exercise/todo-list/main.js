// 初始變數
const list = document.querySelector('#my-todo')
const addBtn = document.querySelector('#addBtn')
const input = document.querySelector('#newTodo')
const mydone = document.querySelector('#my-done')
// 資料
const todos = ['Hit the gym', 'Read a book', 'Buy eggs', 'Organize office', 'Pay bills']
for (let todo of todos) {
  addItem(todo)
}


// 函式
function addItem (text) {
  const newItem = document.createElement('li')
  newItem.innerHTML = `
    <label for="todo">${text}</label>
    <i class="delete fa fa-trash"></i>
  `
  list.appendChild(newItem)
}

function addListItem(inputValue){
  addItem(inputValue)
    input.value = ''
    input.placeholder = 'add item'
    input.classList.remove('wrong-typing')
}

function wrongValue(){
  input.value = ''
    input.placeholder = 'please type something!'    
    input.classList.add('wrong-typing')
}

function deleteItem(target){
  if(target.classList.contains('delete')){
  const parentElement = target.parentElement
    parentElement.remove()
  }
}
// write your code here
//1. add Todo
addBtn.addEventListener('click',function(){
    const inputValue = input.value
  //用trim()可以排除輸入空格的情況
  if(inputValue.trim().length > 0){
    addListItem(inputValue)    
  }
  if(!inputValue.trim().length > 0){
    wrongValue()
    
  }
})

input.addEventListener('keypress',(event)=>{
  const inputValue = input.value
  if(inputValue.trim().length > 0 && event.keyCode === 13){
    addListItem(inputValue)    
  }
  if(!inputValue.trim().length > 0){
    wrongValue()
  } 
})

//2.Remove Todo and add to done
list.addEventListener('click',(event)=>{
  const target = event.target
  deleteItem(target)
  if(target.tagName === 'LABEL'){
    target.classList.toggle('checked')
    //add to done
    target.parentElement.remove()    
    mydone.appendChild(target.parentElement)
  } 
})
//remove done
mydone.addEventListener('click',(event)=>{
  const target = event.target
 deleteItem(target)
  //move checked done back to todo
  if(target.tagName === 'LABEL'){
    target.classList.toggle('checked')
    //add to list
    target.parentElement.remove()    
    list.appendChild(target.parentElement)
  }
  
})



