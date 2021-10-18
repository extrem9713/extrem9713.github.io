<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>胖胖商品</title>
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/animate.css" rel="stylesheet" type="text/css">
<link href="css/product.css" rel="stylesheet" type="text/css">
<link href="css/header.css" rel="stylesheet" type="text/css">
<link href="css/footer.css" rel="stylesheet" type="text/css">
<link href="css/lightbox.css" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Dancing+Script&display=swap" rel="stylesheet">
<link href="images/icon.png" rel="icon" type="image/png" sizes="72x72">
</head>

<body>
<script src="js/jquery-3.4.1.min.js"></script> 
<?php include("header.php") ?>
<?php include("connection/productget.php") ?>


	<div class="container-fluid con con-bg">
	<div class="row r">
	<div class="col-md-8 ">
		<div id="cartdata">
		<div class="br wow fadeIn" data-wow-duration="2s" data-wow-iteration="1"><img class="pr" src="images/<?php echo $row_data['img']?>.jpg"></div>
		<div class="row buy justify-content-center align-content-center">
		
<form action="cart.php" method="post">					   
    <div class="price-num">
      <p class="pn-text">價格:NT<?php echo $row_data['price'] ?></p> 
 
				</div>
			
			
			<button  class="btn btn-primary cart add-to-cart" data-name="<?php echo $row_data['name']?>" data-price="<?php echo $row_data['price']?>" style="cursor: pointer;" value="加入購物車">加入購物車</button>	
			
			
			</form>
			
		</div>
		</div>
		</div>
	<div class="col-md-4">
	  <div>
		<p class="p-title wow tada" data-wow-duration="1s"><?php echo $row_data['name']?></p>
		<hr>
		<p class="e-title"><?php echo $row_data['ename']?></p>
	    <p class="p-text">
			<?php echo $row_data['descript'] ?>
		</p>
	  </div>
	<nav>
		<br>
  <div class="nav nav-tabs" id="nav-tab" role="tablist">
    <a class="nav-item nav-link active tabs" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true"style="width: 8vw;">規格說明</a>
    <a class="nav-item nav-link tabs-1" id="nav-profile-tab" data-toggle="tab" href="#nav-notice" role="tab" aria-controls="nav-notice" aria-selected="false" style="width: 8vw;">注意事項</a>
    <a class="nav-item nav-link tabs-1" id="nav-contact-tab" data-toggle="tab" href="#nav-c" role="tab" aria-controls="nav-c" aria-selected="false" style="width: 8vw;">溫馨提醒</a>
  </div>
</nav>
<div class="tab-content" id="nav-tabContent">
  <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
	<p class="p-text">品名：<?php echo $row_data['name'] ?></p>
<p class="p-text">內容物：<?php echo $row_data['content'] ?></p>
<p class="p-text">規格：<?php echo $row_data['psize'] ?></p>
<p class="p-text">葷素：<?php echo $row_data['vm'] ?></p>
<p class="p-text">保存方式：<?php echo $row_data['storage'] ?></p>
<p class="p-text">保存期限：<?php echo $row_data['deadline'] ?></p>
<p class="p-text">實際保存期限請見包裝標示</p>
	
	</div>
  <div class="tab-pane fade" id="nav-notice" role="tabpanel" aria-labelledby="nav-profile-tab">
<p class="p-text">	※提醒您：</p>
<p class="p-text">(1) 接單生產、新鮮製作，冷藏宅配、隔日為到貨日。</p>
<p class="p-text">(2) 產品保存期限請詳見包裝盒面標示，請趁新鮮享用。</p>
<p class="p-text">(3) 商品圖片僅供實物參考。內容物組成以實物及商品規格為主。</p>
<p class="p-text">(4) 食品因保存期限及衛生考量，一經拆封使用，或非運送過程失溫導致商品變質者，恕不適用七天鑑賞期。</p>
<p class="p-text">(5) 如遇新品瑕疵需辦理退換貨者，請維持商品完整，保留原包裝及發票，並於2日內辦理退換貨，逾期恕不受理。</p>
	
	</div>
  <div class="tab-pane fade" id="nav-c" role="tabpanel" aria-labelledby="nav-contact-tab">
	<p class="p-text">• 6吋生日蛋糕內含：1包盤叉(共6副)、1把蛋糕刀。</p>
    <p class="p-text">• 7吋/8吋生日蛋糕內含：2包盤叉(共12副)、1把蛋糕刀。</p>
    <p class="p-text">• 9吋/10吋生日蛋糕內含：3包盤叉(共18副)、1把蛋糕刀。</p>
<p class="p-text">►如有需要，請再加購盤叉。</p>
<p class="p-text">►生日蛋糕商品如需數字蠟燭，請於備註欄填寫壽星年齡，未填寫一律以問號隨貨寄出。</p>
	</div>
</div>
    </div>
	</div>
</div>
<?php include("footer.php") ?>

<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="js/bootstrap.js"></script> 
<script src="js/wow.js"></script> 
<script src="js/main.js"></script>
<script src="js/lightbox.js"></script>
<script src="js/message.js"></script>
<script src="js/cart.js"></script>


</body>
</html>
