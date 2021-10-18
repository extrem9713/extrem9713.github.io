<button id="gotop" class="pointer-cursor"><img src="images/beegotop.png"></button>
<nav class="navbar navbar-expand-lg navbar-dark bg-night"> 
	<img src="images/logo.png" width="20%">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent1">
    <ul class="navbar-nav mr-auto" id="menu-bar">
      <li class="nav-item"><a class="nav-link nav-link-r" href="index.php" target="_top"><img src="images/top.png"><span class="sr-only" >(current)</span></a> </li>
      <li class="nav-item"><a class="nav-link nav-link-r" href="about.php"><img src="images/about.png"></a> </li>
      <li class="nav-item"><a class="nav-link nav-link-r" href="cake.php"><img src="images/cake.png"></a></li>
      <li class="nav-item"><a class="nav-link nav-link-r" href="box.php"><img src="images/box.png"></a></li>
      <li class="nav-item"><a class="nav-link nav-link-r" href="bread.php"><img src="images/bread.png"></a></li>
      <li class="nav-item"><a class="nav-link nav-link-r" href="cart.php"><img src="images/shoping.png"></a></li>
      <li class="nav-item"><a  data-toggle="modal" data-target="#cart" class="nav-link nav-link-r"><img src="images/shoping.png">(<span class="total-count"></span>)</a></li>
      <li class="nav-item"><a id="li-login" class="nav-link nav-link-r" href="login.php"><img src="images/shoping.png"></a></li>
      <li class="nav-item"><a id="i-logout" class="nav-link nav-link-r" href="#"><img src="images/shoping.png"></a></li>
    </ul>
    <form class="form-inline my-2 my-lg-0" method="post" action="search.php">
      <img src="images/bee.png"  id="search-bee">		
      <input class="form-control mr-sm-2" type="search" name="keyword" placeholder="Search" aria-label="Search">
      <button class="btn form-control" type="submit"><img id="search-icon" src="images/search.png"></button>
		
    </form>
  </div>
</nav>
  <script type="text/javascript">
    var username = "<?php echo $_SESSION['userName']; ?>";
    var useremail = "<?php echo $_SESSION['userEmail']; ?>";;

    function login_navbar(username){ //登入後，處理導覽列登入、登出等相關顯示與關閉
      $('#li-userName').show(username);
      $('#uname').html(username);
      $('#li-logout').show();
      $('#li-login').hide();
      $('#li-register').hide();
    }
    function logout_navbar(){
      $('#li-logout').hide();
      $('#li-login').show();
      $('#li-register').show();
      $('#li-userName').hide();
    }
    console.log(username)
    if (username != "") {
      login_navbar(username);
    } else {
      logout_navbar();
    }

    $("#li-logout").click(function(){ //按了登出後…
      <?php
        session_destroy();
      ?>
      logout_navbar();
      alert(username+"已經登出！")
    });
  </script>
<div class="modal fade" id="cart" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
     <div class="modal-dialog modal-lg" role="document">
       <div class="modal-content">
         <div class="modal-header">
           <h5 class="modal-title" id="exampleModalLabel">購物車</h5>
           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
             <span aria-hidden="true">&times;</span>
           </button>
         </div>
         <div class="modal-body">
           <table class="show-cart table">
           </table>
           <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="1">
            <label class="form-check-label" for="inlineRadio1">到店取貨</label>
   </div>
       <div class="form-check form-check-inline">
       <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="2">
       <label class="form-check-label" for="inlineRadio2">宅急便</label>
       </div>

          <input id="address" type="text" placeholder="請輸入郵寄地址!">
           <div id="totalprice" class="price">總金額: $<span class="total-cart"></span></div>
         </div>
         <div class="modal-footer">
           <button class="clear-cart btn btn-danger">清除購物車</button>
           <button type="button" class="btn" data-dismiss="modal">關閉 </button>
           <button type="button" class="btn btn-block" id="submitOrder">確認下單</button>
         </div>
       </div>
     </div>
    </div>
<script type="text/javascript">
    $("#submitOrder").click(function(){
      console.log(shoppingCart.listCart().length);
      if (username == "") {
        $('#cart').modal('hide');
        alert("送出訂單，請先登入！");
      } else if (shoppingCart.listCart().length == 0){
        alert("購物車是空的，請選購完商品，再送出訂單！");
      } else {
        console.log(username + ',' + useremail);
        console.log("Submit order....");
        console.log( JSON.parse(JSON.stringify(shoppingCart.listCart())));
        $('#cart').modal('hide');
        shoppingCart.clearCart();
        displayCart();
        alert("訂單已成功送出！")
      }
    });
  </script>