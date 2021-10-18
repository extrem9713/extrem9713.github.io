<?php
session_start();
  $connection = mysqli_connect("localhost", "wda1907", "EXTREMtraurig","wda1907_fattystore"); // 建立與MySQL伺服器的連接
  $db = mysqli_select_db($connection,"registration"); // 選擇所要連結的資料庫
  $email=$_POST['email']; //擷取從網頁送過來的變數email資料
  $password= sha1($_POST['password']); //密碼sha1雜湊值, 或者想要用原始密碼儲存，就不需要套用sha1函式
  //檢查email位址是否正確與否
  $email = filter_var($email, FILTER_SANITIZE_EMAIL); //清毒email，去除掉一些非預期字元，像是： <,>,?,#,!, etc.
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
    echo "無效的E-mail!";
  }else{
    //檢查輸入的email與密碼是否與資料庫所儲存的相符
    $result = mysqli_query($connection,"SELECT * FROM registration WHERE email='$email' AND password='$password'");
    $data = mysqli_num_rows($result);
    if($data==1){
      echo "登入成功!";	  
      $_SESSION['email'] = $email;	  
	  
    }else{
      echo "E-mail 或 密碼 是錯誤的!";
    }
  }
  mysqli_close ($connection); //關閉資料庫連結
?>