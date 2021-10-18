<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>FATTY胖胖烘培坊</title>
<?php include("link.php") ?>
<link href="css/main.css" rel="stylesheet" type="text/css">
</head>
<body>
<script src="js/jquery-3.4.1.min.js"></script> 
<!-- body code goes here -->
<?php include("header.php"); ?>
<?php include("connection/fattystar.php") ?>
<div class="container-fluid">
  <div class="row" id="moonfes"> <img src="images/moon.png" class="rolmoon"  id="moon"> <img src="images/cloud-l.png" id="c-l"> <img src="images/cloud-r.png" id="c-r"> 
	  <div class="run"><img src="images/rabbit.png" id="rabbit"></div>
	  <img src="images/gress.png" id="gress"> 
	  <img class="wow flash" data-wow-delay="1s" data-wow-iteration="99" src="images/bug.png" id="bug1">
	  <img class="wow flash" data-wow-delay="0.7s" data-wow-iteration="99" src="images/bug.png" id="bug2"> 
	  <img class="wow flash" data-wow-delay="0.6s" data-wow-iteration="99" src="images/bug.png" id="bug3"> 
	  <img class="wow flash" data-wow-delay="0.2s" data-wow-iteration="99" src="images/bug.png" id="bug4"> 
	  <img class="wow flash" data-wow-delay="2s" data-wow-iteration="99" src="images/bug.png" id="bug5"> 
	  <img class="wow flash" data-wow-delay="1.5s" data-wow-iteration="99" src="images/bug.png" id="bug6"> 
	  <img class="wow flash" data-wow-delay="1.3s" data-wow-iteration="99" src="images/bug.png" id="bug7">
	  <img class="wow flash" data-wow-delay="0.5s" data-wow-iteration="99" src="images/bug.png" id="bug8">
	  <img class="wow flash" data-wow-delay="1.1s" data-wow-iteration="99" src="images/bug.png" id="bug9">
	  <img class="wow flash" data-wow-delay="1.2s" data-wow-iteration="99" src="images/bug.png" id="bug10">
	  <img class="wow flash" data-wow-delay="0.4s" data-wow-iteration="99" src="images/bug.png" id="bug11">
	  <img class="wow flash" data-wow-delay="1.4s" data-wow-iteration="99" src="images/bug.png" id="bug12">
	

	</div>
</div>

<div class="contaner-fluid content">
	<div class="row">
		<div class="col-md-11 col-11 offset-1">
		<h5 class="con-title wow jackInTheBox">本月主打星</h5>
		</div>
	</div>
	<div class="row justify-content-center text-center " style="margin-top:2vh;">
	<?php do{ ?>
	<div class="card col-md-5 col-5 col-sm-5 col-lg-3 col-xl-3 wow flipInY" data-wow-duration="1s" data-wow-iteration="1" data-wow-delay="1s">
    <a href="product.php?pid=<?php echo $row_star['pid'] ?>">
    <img  class="card-img-top" src="images/<?php echo $row_star['img']?>.jpg" alt="Card image cap"></a>
      <div class="card-body">
        <h5 class="card-title wow flipInY"><?php echo $row_star['name']; ?></h5>
        <p class="card-text"><?php echo $row_star['descript']?></p> 
        <a class="btn btn-primary form-control" href="product.php?pid=<?php echo $row_star['pid'] ?>">點我選購!</a>
	 
	 
	 </div>
    </div>
   <?php } while($row_star=mysqli_fetch_assoc($result)) ?>
	</div>

	<?php
	$newsquery=" SELECT * FROM product,news WHERE news.pid=product.pid";
	
	$newsresult= mysqli_query($connection ,$newsquery);


	if(!$newsresult){
		die("shit" .mysqli_error($connection));
	}

	$row_news = mysqli_fetch_assoc($newsresult);
			?>


	<div class="row">
		<div class="col-md-11 col-11 offset-1">
		<h5 class="con-title wow jackInTheBox" data-wow-delay="0.5s"style="margin-top: 5vh;">月餅禮盒預購</h5>
		</div>
	</div>
	<div class="row justify-content-center text-center" style="margin-top:2vh;margin-bottom:2vh;">
	 <?php do{ ?>
		<div class="card col-md-5 col-5 col-sm-5 col-lg-3 col-xl-3 wow flipInY" data-wow-duration="1s" data-wow-iteration="1" data-wow-delay="1s">
    <a href="product.php?pid=<?php echo $row_news['pid'] ?>">
    <img  class="card-img-top" src="images/<?php echo $row_news['img']?>.jpg" alt="Card image cap"></a>
      <div class="card-body">
        <h5 class="card-title wow flipInY"><?php echo $row_news['name']; ?></h5>
        <p class="card-text"><?php echo $row_news['descript']?></p> 
        <a class="btn btn-primary form-control" href="product.php?pid=<?php echo $row_news['pid'] ?>">點我選購!</a>
	 
	 
	 </div>
    </div>
   <?php } while($row_news=mysqli_fetch_assoc($newsresult)) ?>

	  </div>

	  
	  
</div>
  
<?php include("footer.php")?>	
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 


<!-- Include all compiled plugins (below), or include individual files as needed --> 
<?php include("js.php") ?>

</body>
</html>