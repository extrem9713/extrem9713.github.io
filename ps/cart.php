<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>購物車</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="css/animate.css" rel="stylesheet" type="text/css">
<link href="css/cart.css" rel="stylesheet" type="text/css">
<link href="css/header.css" rel="stylesheet" type="text/css">
<link href="css/footer.css" rel="stylesheet" type="text/css">
<link href="css/lightbox.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>

<body>
	<?php include("header.php") ?>
	<?php include("connection/fattycart.php") ?>
	<div class="container-fluid con con-bg r">
		<div class="row">			
		<table class="table text-center r">		
			<thead>
				<tr>
				<h3 class="t-title r">訂購商品</h3>
				</tr>
			<tr class="table-primary">
				<th scope="col">商品名稱</th>
				<th scope="col">規格</th>
				<th scope="col">數量</th>
				<th scope="col">價格</th>
				<th scope="col">小計</th>
				<th scope="col">取消</th>
			</tr>			
			</thead>
			<tbody>
			<tr class="sum1">
			<td><?php echo $row_product['name'] ?>
				<a class="example-image-link" href="images/<?php echo $row_product['img'] ?>.jpg" data-lightbox="image-1" data-title="<?php echo $row_product['name'] ?>"><img class="pr example-image" src="images/<?php echo $row_product['img'] ?>.jpg"></a></td>
			<td><?php echo $row_product['psize'] ?></td>
			<td><?php echo $_SESSION['qty']?></td>
			<td>NT:<?php echo $row_product['price'] ?></td>
			<td class="total">NT:820</td>
			<td><img class="cancel" src="images/cancel.png"></td>
			</tr>
			<tr class="table-primary">
			<td>總計</td>
			<td></td>
			<td></td>
			<td></td>
			<td>NT:820</td>
			<td></td>
			</tr>
			</tbody>
		</table>
			<button class="btn btn-danger keepbuy" onClick="history.go(-2)">繼續購物</button>			
		</div>
		<br>
		<div class="container-fluid">
			<div class=" r text-center">
			<h3 class="t-title">會員登入</h3>
			  <form>
				  <div class="member">
				<p class="m-title">E-mail:</p>
				<input type="text" class="form-control-m" id="email-m" name="email-m">
				<p class="m-title">密碼:</p>
				<input type="password" class="form-control-m" id="password-m" name="password-m">
				<br>
				  <div class="row justify-content-center">
					  <div class="col-md-2">
				<button type="button" class="btn-lg btn-primary btn-p" name="login" id="login">login</button>
					 </div>
					  <div class="col-md-2">
 <button type="button" class="btn-lg btn-primary btn-p" data-toggle="modal" data-target="#modalreg">註冊</button>
					</div>
					 <div calss="col-md-2">
					  <button type="button" class="btn-lg btn-danger btn-p" onClick="googlein">google登入</button>
					  </div>
				</div>
					  </div>
				</form>
			</div>
	</div>
	
		</div>	
<div class="modal fade" id="modalreg" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">		         
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
<?php include("registration.php") ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn-c btn btn-secondary bg-danger" data-dismiss="modal">Close</button>
       
  
      </div>
    </div>
  </div>
</div>
	<?php include("footer.php") ?>
	<script src="js/jquery-3.4.1.min.js"></script> 
    <script src="js/vue.js"></script>
	<script src="js/axios.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="js/bootstrap.js"></script> 
<script src="js/wow.js"></script> 
<script src="js/main.js"></script>
<script src="js/login.js"></script>
<script src="js/lightbox.js"></script>
<script src="js/message.js"></script>
<script src="js/cart.js"></script>
<script language="javascript">
	
	
	</script>
</body>
</html>
