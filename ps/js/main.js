// JavaScript Document
$(function(){
  $('#gotop').click(function(){
    $('html,body').animate({scrollTop:0},1000);
  });
});
$(window).scroll(function(){
  if($(this).scrollTop()>800){
    $('#gotop').fadeIn(500);
  }
  else{
    $('#gotop').stop().fadeOut(500);
  }
});
