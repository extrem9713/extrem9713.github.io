// JavaScript Document
$(document).ready(function() {
  $("#message-submit").click(function() {    
    var messagemail = $("#messagemail").val();
    var message = $("#message").val();   
    if (messagemail == '' || message == '') {
      alert("輸入的欄位不能是空的!");
    } else {
      $.post("message.php", {        
        messagemail: messagemail,
        message: message
      }, function(data) {
        if (data == '感謝您的寶貴意見!') {
          $("form")[0].reset();
        }
        alert(data);
      });
    }
  });
});// JavaScript Document