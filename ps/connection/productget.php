<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"

$colname_rs="-1";
if(isset($_GET['pid'])){
	$colname_rs=$_GET['pid'];
}


$connection = mysqli_connect("localhost", "wda1907", "EXTREMtraurig" ,"wda1907_fattystore") or die("owada");
mysqli_set_charset($connection,"UTF8");
$query=" SELECT * FROM product WHERE pid=$colname_rs";

$result=mysqli_query($connection,$query);

if(!$result){
	die(fuck .mysqli_error($connection));
}
$row_data=mysqli_fetch_assoc($result);



?>