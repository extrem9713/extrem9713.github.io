<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$connection = mysqli_connect("localhost", "wda1907", "EXTREMtraurig" ,"wda1907_fattystore") or die("owada");
$query=" SELECT * FROM product WHERE type=1";
mysqli_set_charset($connection,"UTF8");
$result= mysqli_query($connection ,$query);


if(!$result){
	die("shit" .mysqli_error($connection));
}

$row_product = mysqli_fetch_assoc($result);

?>