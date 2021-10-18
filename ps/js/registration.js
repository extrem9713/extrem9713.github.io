// JavaScript Document
$(document).ready(function() {
  $("#register").click(function() {
    var username = $("#username").val();
    var email = $("#email").val();
    var password = $("#password").val();
    var cpassword = $("#cpassword").val();
	
    if (username == '' || email == '' || password == '' || cpassword == '' ) {
      alert("輸入的欄位不能是空的!");
    } else if ((password.length) < 5) {
      alert("密碼長度至少要6個字元!");
    } else if (!(password).match(cpassword)) {
      alert("輸入的二次密碼不一致!");
    } else {
      $.post("regist.php", {
        username: username,
        email: email,
        password: password,
		
      }, function(data) {
        if (data == '你已註冊成功!') {
          $("form")[0].reset();
		  
        }
        alert(data);
      });
    }
  });
});