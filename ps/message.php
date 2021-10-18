<?php
ini_set("display_errors","On");
error_reporting(E_ALL);
  $connection = mysqli_connect("localhost", "wda1907", "EXTREMtraurig","wda1907_fattystore"); // 建立與MySQL伺服器的連接
  $db = mysqli_select_db($connection,"message"); // 選擇所要連結的資料庫
  mysqli_query($connection,'SET NAMES UTF8');
  $messagemail=$_POST['messagemail']; //擷取從網頁送過來的資料
  $message=$_POST['message'];  
  $messagemail = filter_var($messagemail, FILTER_SANITIZE_EMAIL); ////清毒email，去除掉一些非預期字元，像是： <,>,?,#,!, 等
  if (!filter_var($messagemail, FILTER_VALIDATE_EMAIL)){
    echo "無效的E-mail!";
  }else{
    $result = mysqli_query($connection,"SELECT * FROM message WHERE messagemail='$messagemail'");
    $data = mysqli_num_rows($result);
    if(($data)==0){
      $query = mysqli_query($connection,"insert into message(messagemail, message) values ('$messagemail', '$message')"); // Insert query
      if($query){
        echo "感謝您的寶貴意見!";
      }else
      {
        echo "錯誤!";
      }
    }else{
      echo "這個E-mail已經送過意見! 請等服務人員為您處理!";
    }
  }
  mysqli_close ($connection);
?>
