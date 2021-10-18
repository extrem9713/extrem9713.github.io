<?php
  $connection = mysqli_connect("localhost", "wda1907", "EXTREMtraurig","wda1907_fattystore"); // 建立與MySQL伺服器的連接
  mysqli_query($connection,'SET NAMES UTF8');
  $db = mysqli_select_db($connection,"cart"); // 選擇所要連結的資料庫
  
  $email=$_POST['email'];
  $name=$_POST['name'];
  $qty=$_POST['qty'];
  $total=$_POST['total'];
 
  
  
  
    $query = mysqli_query($connection,"insert into cart(email, name, qty,total) values ('$email', '$name', '$qty', '$total')"); // Insert query
      if($query){
        echo "你已送出訂單!";
        
      }else
    if (!mysqli_query($connection,"cart"))
  {
  die('Error: ' . mysqli_error($connection));
  }
echo "1 record added";
   
  
  mysqli_close ($connection);
?>