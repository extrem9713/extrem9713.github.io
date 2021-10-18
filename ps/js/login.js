// JavaScript Document
$(document).ready(function(){
  $("#login").click(function(){
    var email = $("#email-m").val();
    var password = $("#password-m").val();
    // Checking for blank fields. 檢查輸入欄位是否為空…
    if( email =='' || password ==''){
      $('input[type="text"],input[type="password"]').css("border","2px solid red");
      $('input[type="text"],input[type="password"]').css("box-shadow","0 0 3px red");
      alert("輸入的欄位不能是空的!");
    }else {
      //以ajax方式將輸入的值丟給login.php，這個寫法跟我們之前用的方式更簡潔，花些時間理解一下。
      $.post("login.php",{ email: email, password:password},
      function(data) {
        if(data=='無效的E-mail!') { //從login.php傳回來的值(echo)，如果是…
          $('input[type="text"]').css({"border":"2px solid #4400CC","box-shadow":"0 0 3px #4400CC"});
          $('input[type="password"]').css({"border":"2px solid #00F5FF","box-shadow":"0 0 5px #00F5FF"});
          alert(data);
        }else if(data=='E-mail 或 密碼 是錯誤的!'){
          $('input[type="text"],input[type="password"]').css({"border":"2px solid 	#4400CC","box-shadow":"0 0 3px 	#4400CC"});
          alert(data);
        } else if(data=='登入成功!'){
          $("form")[0].reset();
          $('input[type="text"],input[type="password"]').css({"border":"2px solid #00F5FF","box-shadow":"0 0 5px #00F5FF"});
          //若需要的話，可把表單隱藏起來
          // $(".main").hide();
			


          alert(data);
        } else{
          alert(data);
        }
      });
    }
  });
});