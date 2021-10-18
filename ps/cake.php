<!doctype html>
<html>
<head>
<meta charset="utf-8">
<?php include("link.php") ?>
<link href="css/cake.css" rel="stylesheet" type="text/css">
<title>胖胖蛋糕</title>
</head>

<body>
	<script src="js/jquery-3.4.1.min.js"></script> 
	<?php include("header.php") ?>
	<?php include("connection/fattystore.php") ?>
	
<div class="container-fluid con-bg con">
  <div class="row justify-content-center text-center " >
	 <?php do{ ?>
    <div class="card col-md-5 col-5 col-sm-5 col-lg-3 col-xl-3 wow flipInY" data-wow-duration="1s" data-wow-iteration="1" data-wow-delay="1s">
    <a href="product.php?pid=<?php echo $row_product['pid'] ?>">
    <img  class="card-img-top" src="images/<?php echo $row_product['img']?>.jpg" alt="Card image cap"></a>
      <div class="card-body">
        <h5 class="card-title wow flipInY"><?php echo $row_product['name']; ?></h5>
        <p class="card-text"><?php echo $row_product['descript']?></p>
 
        <a class="btn btn-primary form-control" href="product.php?pid=<?php echo $row_product['pid'] ?>">點我選購!</a>
	 
	 
	 </div>
    </div>
   <?php } while($row_product=mysqli_fetch_assoc($result)) ?>
 
  </div>	
</div>	
	
	<?php include("footer.php") ?>

<!-- Include all compiled plugins (below), or include individual files as needed --> 
<?php include("js.php") ?>

</body>
</html>
