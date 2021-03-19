
window.onload=function(){ShowTime()};

//歡迎
// alert('歡迎來到我的網站~');

//亂數產生器
function getrandom(x){
//Math.floor 取整數  Math.random 給予0~1之間的亂數 故乘以x取得0~x亂數 +1使得數字不為0
return  Math.floor(Math.random()*x+1);
}

//時間
function ShowTime(){
　var NowDate=new Date();
  var y=NowDate.getFullYear();
  var mon=(NowDate.getMonth()+1);
  var d=NowDate.getDate();
　var h=NowDate.getHours();
　var m=NowDate.getMinutes();
  var hello='';
  var day='';
  if(NowDate.getHours()>17 || NowDate.getHours()<5)
  hello='晚安!';
  else
  hello='日安!';
  switch (NowDate.getDay()) {
    case 0:
    day='星期日'
      break;
    case 1:
    day='星期一'
        break;
    case 2:
    day='星期二'
        break;
    case 3:
    day='星期三'
        break;
    case 4:
    day='星期四'
        break;
    case 5:
    day='星期五'
       break;
    case 6:
    day='星期六'
      break;
  }
    　document.getElementById('showbox').innerHTML= hello+'&nbsp;&nbsp;現在是&nbsp;&nbsp;'+y+'年'+mon+'月'+d+'日'+'&nbsp;&nbsp;'+day+'&nbsp;&nbsp;'+h+'時'+m+'分';
　setTimeout('ShowTime()',1000);
}

//猜數字
function numbergame(){
  var target=getrandom(99);
  var number=0;
  var times=0;
  do{
   number=prompt('請輸入1~99內的數字' ,number);
   if(number==null || number==target)
   break;

   if(number>target)
   {alert('數字太大囉');
   times++
   continue;}

   else
   {alert('數字太小囉');
   times++
   continue;}
  }
  while(true);
  if(number==null)
  document.wirte('不玩了喔 答案是'+target+'</br>');

  else{
  alert('答對了 答案是'+target+'  共猜了'+(times+1)+'次');
  }
}
