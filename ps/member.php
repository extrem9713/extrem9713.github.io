<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>胖胖登入</title>
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/animate.css" rel="stylesheet" type="text/css">
<link href="css/member.css" rel="stylesheet" type="text/css">
<link href="css/header.css" rel="stylesheet" type="text/css">
<link href="css/footer.css" rel="stylesheet" type="text/css">
<link href="css/lightbox.css" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Dancing+Script&display=swap" rel="stylesheet">
<link href="images/icon.png" rel="icon" type="image/png" sizes="72x72">
</head>

<body>
<script src="js/jquery-3.4.1.min.js"></script> 
<?php include("header.php") ?>
		<div class="container-fluid con-bg">
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
				<button type="button" class="btn-lg btn-primary btn-p" name="login" id="login">登入</button>
					 </div>
					  <div class="col-md-2">
 <button type="button" class="btn-lg btn-primary btn-p" data-toggle="modal" data-target="#modalreg">註冊</button>
					</div>
					
				</div>
					  </div>
				</form>
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
<script src="js/login.js"></script>
<script src="js/cart.js"></script>
</body>
</html>