
 <?php
    session_start();
    // $loginUser = $_SESSION['loginUser'];
  ?>
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
      <li class="nav-item"><a class="nav-link nav-link-r" data-toggle="modal" data-target="#cart"><img src="images/shoping.png"><span style="color: red;font-weight: 700;font-size: 1vw;" class="total-count"></span></a>
		
		</li>
	  <li class="nav-item"><a class="nav-link nav-link-r" href="member.php"><img src="images/login.png"></a></li>
	  <li class="nav-item"><a id="li-logout" class="nav-link nav-link-r" href="#.php"><img src="images/logout.png"></a></li>
    </ul>
    <form class="form-inline my-2 my-lg-0" method="post" action="search.php">
      <img src="images/bee.png"  id="search-bee">		
      <input class="form-control mr-sm-2" type="search" name="keyword" placeholder="Search" aria-label="Search">
      <button class="btn form-control" type="submit"><img id="search-icon" src="images/search.png"></button>		
    </form>
  </div>
</nav>

  <!-- Cart Modal -->
    <div class="modal fade" id="cart" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
     <div class="modal-dialog modal-lg" role="document">
       <div class="modal-content cart-content">
         <div class="modal-header">
           <h5 class="modal-title c-title" id="exampleModalLabel">購物車</h5>
           
         </div>
         <div class="modal-body">
           <table class="show-cart table">
           </table>
           <div class="price">總金額: $<span id="total" class="total-cart"></span></div>
         </div>
         <div class="modal-footer">
           <!-- <div style="display:flex;justify-content:center;align-items:center;">
             <div class="font">學號(或姓名)：</div>
             <textarea id="order" class="font" name="order"></textarea>
           </div> -->
           <button type="button" class="btn btn-warning" data-dismiss="modal">關閉 </button>
           <button type="button" class="btn btn-block btn-primary" id="submitOrder">確認下單</button>
		   <button class="clear-cart btn btn-danger">清除購物車</button>
         </div>
       </div>
     </div>
    </div>
  <script type="text/javascript">
  <?php session_start();?>
	  var email = "<?php echo $_SESSION['email'] ?>";
	    $("#li-logout").click(function(){ //按了登出後…
      <?php
        session_destroy();
      ?>
      
      alert("已經登出！會無法送訂單喔")
    });
 
	  
    $("#submitOrder").click(function(){
      
      
   var cartArray = shoppingCart.listCart();
   var name = cartArray[i].name;
   var qty = shoppingCart.totalCount();
   var total = shoppingCart.totalCart();
	 console.log(email)
	 console.log(name,qty,total)
  $.post("carttofatty.php",{email:email, name: cartArray[i].name, qty:shoppingCart.totalCount() ,total:shoppingCart.totalCart()})
  $('#cart').modal('hide');
        shoppingCart.clearCart();
        displayCart();
        alert("訂單已成功送出！")
    });
  </script>
  
 