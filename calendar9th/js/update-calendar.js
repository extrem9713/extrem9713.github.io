var current_color = {
  name: "blue",
  color: "#1b19cd",
  off_color: "#7c7efb"
};
var color_data = [{
    name: 'blue',
    color_code: '#1b19cd',
    off_color_code: '#7c7efb'
  },

  {
    name: 'red',
    color_code: '#d01212',
    off_color_code: '#eea19b'
  },

  {
    name: 'purple',
    color_code: '#721d89',
    off_color_code: '#ebadfb'
  },

  {
    name: 'green',
    color_code: '#158348',
    off_color_code: '#57c664'
  },

  {
    name: 'orange',
    color_code: '#ee742d',
    off_color_code: '#f7a77a'
  },

  {
    name: 'deep-orange',
    color_code: '#f13c26',
    off_color_code: '#f77d59'
  },

  {
    name: 'baby-blue',
    color_code: '#31b2fc',
    off_color_code: '#3d8dd9'
  },

  {
    name: 'cerise',
    color_code: '#ea3d69',
    off_color_code: '#fcbecc'
  },

  {
    name: 'lime',
    color_code: '#2acc32',
    off_color_code: '#4ffa4f'
  },

  {
    name: 'teal',
    color_code: '#2fccb9',
    off_color_code: '#7fe7e3'
  },

  {
    name: 'pink',
    color_code: '#f50d7a',
    off_color_code: '#ffb9ea'
  },

  {
    name: 'black',
    color_code: '#212524',
    off_color_code: '#687e7b'
  }
];

function change_color(){


  ajax({color:current_color.name});
  submitcolor();
}




function opencolor() {
  var modal = document.getElementById("modal");
  var template = document.getElementById("fav-color");
  modal.open = true;
  template.removeAttribute("hidden");
}

function submitcolor() {
  color_data.forEach(function(arr_data) {
    if (current_color.name == arr_data.name) {
      current_color.color = arr_data.color_code;
      current_color.off_color = arr_data.off_color_code;
    }
  });

  var elements;
  elements = document.getElementsByTagName("td");
  for (i = 0; i < elements.length; i++) {
    elements[i].style = null;
  };

  elements = document.getElementsByClassName("color");
  for (i = 0; i < elements.length; i++) {
    elements[i].style.backgroundColor = current_color.color;
  };

  elements = document.getElementsByClassName("border-color");
  for (i = 0; i < elements.length; i++) {
    elements[i].style.borderColor = current_color.color;
  };

  elements = document.getElementsByClassName("off-color");
  for (i = 0; i < elements.length; i++) {
    elements[i].style.color = current_color.off_color;
  };


  var modal = document.getElementById("modal");
  var template = document.getElementById("fav-color");
  modal.open = false;
  template.setAttribute("hidden", "hidden");
}

function addcheckmark(color_name) {
  current_color.name = color_name;

  //刪除原有checkmark
  var checkmarks = document.getElementsByClassName("checkmark");
  for (i = 0; i < checkmarks.length; i++) {
    checkmarks[i].parentNode.removeChild(checkmarks[i]);
  }

  //增加checkmark
  var colorpreviews = document.getElementsByClassName("color-preview");
  for (i = 0; i < colorpreviews.length; i++) {
    if (colorpreviews[i].id == color_name) {
      colorpreviews[i].innerHTML = "<i class='fas fa-check checkmark'></i>";
    }
  }
}

function getweekdayname(day) {
  if (day == 0) return "Sun";
  if (day == 1) return "Mon";
  if (day == 2) return "Tues";
  if (day == 3) return "Wed";
  if (day == 4) return "Thu";
  if (day == 5) return "Fri";
  if (day == 6) return "Sat";
}

function getmonthname(month) {
  if (month == 1) return "1月";
  if (month == 2) return "2月";
  if (month == 3) return "3月";
  if (month == 4) return "4月";
  if (month == 5) return "5月";
  if (month == 6) return "6月";
  if (month == 7) return "7月";
  if (month == 8) return "8月";
  if (month == 9) return "9月";
  if (month == 10) return "10月";
  if (month == 11) return "11月";
  if (month == 12) return "12月";
}

function getordinary(date) {
  if (date == 1 || date == 21 || date == 31) return date + "<sup>st</sup>";
  if (date == 2 || date == 22) return date + "<sup>nd</sup>";
  if (date == 2 || date == 22) return date + "<sup>rd</sup>";
  else return date + "<sup>th</sup>"
}

var nowyear, nowmonth;

function updatedate() {
  var today = new Date();
  document.getElementById("cur-year").innerHTML = today.getFullYear();
  document.getElementById("cur-month").innerHTML = getmonthname(today.getMonth() + 1);
  document.getElementById("cur-date").innerHTML = getordinary(today.getDate());
  document.getElementById("cur-day").innerHTML = getweekdayname(today.getDay());




  nowyear = today.getFullYear();
  nowmonth = today.getMonth();
  fillmonth(nowyear, nowmonth);
}

function getUID(year, month, day) {
  if (month == 0) {
    month = 12;
    year--;
  }
  if (month == 13) {
    month = 1;
    year++;
  }
  return year.toString() + month.toString() + day.toString();
}

function fillmonth(nowyear, nowmonth) {
  document.getElementById("cal-year").innerHTML = nowyear;
  document.getElementById("cal-month").innerHTML = getmonthname(nowmonth + 1);
  let days = document.getElementsByTagName("td");
  today = new Date();
  var firstdate = new Date(nowyear, nowmonth, 1);
  var dayoffirstdate = firstdate.getDay();
  monthday = [31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];
  if (((nowyear % 4 == 0) && (nowyear % 100 != 0)) || (nowyear % 400 == 0))
    monthday[1] = 29;

  //今月
  for (i = 1; i <= monthday[nowmonth]; i++) {
    var uid = getUID(nowyear, nowmonth + 1, i);
    days[dayoffirstdate + i - 1].innerHTML = i;
    days[dayoffirstdate + i - 1].setAttribute("data-uid", uid);
    appendSpriteToCellAndTooltip(uid,days[dayoffirstdate + i - 1]);
  }
  var lastmonth = nowmonth - 1;
  if (lastmonth == -1) {
    lastmonth = 11;
    nowyear--;
  }
  var nextmonth = nowmonth + 1;
  if (nextmonth == 12) {
    nextmonth = 0;
    nowyear++;
  }
  //刪除增加的class標籤
  for (i = 0; i < days.length; i++) {
    if (days[i].classList.contains("color")) {
      days[i].classList.remove("color");
    }

    if (days[i].classList.contains("pre-month-lastday")) {
      days[i].classList.remove("pre-month-lastday");
    }

  }

  //上月
  if (dayoffirstdate > 0) {
    days[dayoffirstdate - 1].classList.add("pre-month-lastday");
  }

  for (i = dayoffirstdate - 1, j = monthday[lastmonth]; i >= 0; i--, j--) {
    var uid = getUID(nowyear, lastmonth + 1, j);
    days[i].innerHTML = j;
    days[i].setAttribute("data-uid", uid);
    appendSpriteToCellAndTooltip(uid,days[i]);
    days[i].classList.add("color");
  }

  //下月
  for (i = dayoffirstdate + monthday[nowmonth], j = 1; i <= 41; i++, j++) {
    uid = getUID(nowyear, nextmonth + 1, j)
    days[i].innerHTML = j;
    days[i].setAttribute("data-uid", uid);
    appendSpriteToCellAndTooltip(uid, days[i]);
    days[i].classList.add("color");
  }

  // console.log(document.getElementsByTagName('tbody')[0].innerHTML);

  //刪除current-day id
  if (document.getElementById("current-day")) {
    document.getElementById("current-day").removeAttribute("id");
  }

  //今日增加灰底
  var nowdate = today.getDate();
  if (nowyear == today.getFullYear() && nowmonth == today.getMonth()) {
    //setAttribute("name,value")
    days[dayoffirstdate + nowdate - 1].setAttribute("id", "current-day");
  }
  submitcolor()
}

document.onkeydown = function(e) {
  switch (e.keyCode) {
    case 37:
      premonth();
      break;
    case 39:
      nextmonth();
      break;
  }
}

function premonth() {
  nowmonth--;
  if (nowmonth == -1) {
    nowmonth = 11;
    nowyear--;
  }
  fillmonth(nowyear, nowmonth);
}

function nextmonth() {
  nowmonth++;
  if (nowmonth == 12) {
    nowmonth = 0;
    nowyear++;
  }
  fillmonth(nowyear, nowmonth);
}
var postits=[];
function appendSpriteToCellAndTooltip(uid, elem){
    for(let i = 0; i < postits.length; i++){
        if(uid == postits[i].id){
          elem.innerHTML += `<img src='images/note${postits[i].note_num}.png' alt='A post-it note'>`;
          elem.classList.add("tooltip");
          elem.innerHTML += `<span>${postits[i].note}</span>`;
        }
    }
}

var postits = [];
var currentpostitid = 0;
var newcurrentpostit = false;
var currentpostitindex = 0;

function openmakenote() {
  var modal = document.getElementById("modal");
  modal.open = true;
  var template = document.getElementById("make-note");
  template.removeAttribute("hidden");
}

function closemakenote() {
  var modal = document.getElementById("modal");
  modal.open = false;
  var template = document.getElementById("make-note");
  template.setAttribute("hidden", "hidden");
}

function dayclicked(elm) {
  console.log(elm.dataset.uid);
  postitid=elm.dataset.uid;
  currentdayhasnote(postitid);
  if(newpostit==false){
    document.getElementById("edit-post-it").value=postits[postitindex].note;
  }
  openmakenote();
}

var postits=[];
var postitid=0;
var newpostit=false;
var postitindex=0;

function currentdayhasnote(uid){
for(let i=0;i<postits.length;i++){
  if(postits[i].id==uid){
    newpostit=false;
    postitindex=i;
    return;
  }
}
newpostit=true;
}

function getrandom(min,max){
return  Math.floor(Math.random()*(max-min))+min;
}

function submitpostit(){
const value=document.getElementById("edit-post-it").value;
document.getElementById("edit-post-it").value="";
if(value==""){
  closemakenote();
  return;
}
let num=getrandom(1,6);
//javacsript 物件類別
let postit={
  id:postitid,
  note_num:num,
  note:value
}

if(newpostit){
  postits.push(postit);
  ajax({new_note_uid:postit.id,new_note_color:postit.note_num,new_note_text:postit.note});
}
else {
  postits[postitindex].note=postit.note;
  ajax({update_note_uid:postits[postitindex].id,update_note_text:postit.note});

}
console.log(postits);
fillmonth(nowyear,nowmonth);
closemakenote();
}

function deleteit(){
document.getElementById("edit-post-it").value="";
let indexToDel;
if(!newpostit){
  indexToDel=postitindex;
}
if(indexToDel!=undefined){
  ajax({delete_note_uid:postits[indexToDel].id});
  postits.splice(indexToDel,1);
  console.log(postits);
}
fillmonth(nowyear,nowmonth);
closemakenote();
}
