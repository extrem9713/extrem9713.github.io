<?php
  $connection = mysqli_connect("localhost", "wda1907", "EXTREMtraurig","wda1907_fattystore") or die("owada"); // 建立與MySQL伺服器的連接
  mysqli_query($connection,'SET NAMES UTF8');  
  $db = mysqli_select_db($connection,"registration"); // 選擇所要連結的資料庫
  $username=$_POST['username']; //擷取從網頁送過來的資料
  $email=$_POST['email'];
  $password= sha1($_POST['password']); //密碼sha1雜湊值, 或者想要用原始密碼儲存，就不需要套用sha1函式
  
  //  //檢查email位址是否正確與否
  $email = filter_var($email, FILTER_SANITIZE_EMAIL); ////清毒email，去除掉一些非預期字元，像是： <,>,?,#,!, 等
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
    echo "無效的Email!";
  }else{
    $result = mysqli_query($connection,"SELECT * FROM registration WHERE email='$email'");
    $data = mysqli_num_rows($result);
    if(($data)==0){
      $query = mysqli_query($connection,"insert into registration(username, email, password) values ('$username', '$email', '$password')"); // Insert query
      if($query){
        echo "你已註冊成功!";
		
      }else
      {
        echo "錯誤!";
      }
    }else{
      echo "這個E-mail已經註冊過了，請再試另一個E-mail!";
    }
  }
  mysqli_close ($connection);
?>