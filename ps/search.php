<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/search.css" rel="stylesheet">
<link href="css/animate.css" rel="stylesheet" type="text/css">
<link href="css/header.css" rel="stylesheet" type="text/css">
<link href="css/footer.css" rel="stylesheet" type="text/css">
<title>胖胖搜尋</title>
</head>

<body>
	<?php include("header.php") ?>
	<?PHP
	$keyword=trim($_POST['keyword']);
		  if($keyword==""){
		echo("請輸入搜尋關鍵字!");
		exit;
	} 
	$connection = mysqli_connect("localhost", "wda1907", "EXTREMtraurig" ,"wda1907_fattystore") or die("owada");
$query=" SELECT * FROM product WHERE name like '%$keyword%'";
mysqli_set_charset($connection,"UTF8");
$result= mysqli_query($connection ,$query);


if(!$result){
	die("shit" .mysqli_error($connection));
}

$row_product = mysqli_fetch_assoc($result);
$countrow = mysqli_num_rows($result);
if($countrow==0){
	echo"抱歉!找不到商品資料喔";
	exit;
}
	?>
	
	
	<div class="container-fluid con-bg con">
  <div class="row justify-content-center text-center r1" >
	 <?php do{ ?>

    <div class="card col-md-3 wow flipInY" data-wow-duration="1s" data-wow-iteration="1" data-wow-delay="1s" style="margin-top: 5vh;margin-left: 1vw;"><a href="product.php?pid=<?php echo $row_product['pid'] ?>"><img style="background: white;width: 15vw;height: 30vh;" class="card-img-top" src="images/<?php echo $row_product['img']?>.jpg" alt="Card image cap"></a>
      <div class="card-body">
        <h5 class="card-title wow flipInY"><?php echo $row_product['name']; ?></h5>
        <p class="card-text"  style="height: 20vh;"><?php echo $row_product['descript']?></p>
 
        <a class="btn btn-primary form-control" href="product.php?pid=<?php echo $row_product['pid'] ?>">點我選購!</a>
	 
	 
	 </div>
    </div>
	  
   <?php } while($row_product=mysqli_fetch_assoc($result)) ?>
 
  </div>
		
</div>
	
	
	<?php include("footer.php") ?>
	
<script src="js/jquery-3.4.1.min.js"></script> 	
<script src="js/bootstrap.js"></script> 
<script src="js/wow.js"></script>
<script src="js/main.js"></script>
<script src="js/message.js"></script>
</body>
</html>