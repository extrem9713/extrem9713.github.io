$(document).ready(function(){
  $('.header').height($(window).height());
})

$(window).ready(function(){
  $('#loading').hide(8000);
})

$(function(){
  $('#gotop').click(function(){
    $('html,body').animate({scrollTop:0},1000);
  });
});
$(window).scroll(function(){
  if($(this).scrollTop()>300){
    $('#gotop').fadeIn(500);
  }
  else{
    $('#gotop').stop().fadeOut(500);
  }
});
