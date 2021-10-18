// ************************************************
// Shopping Cart API
// ************************************************

var shoppingCart = (function() { //Self-invoking function/Immediately-invoked function, 此函式是一個物件，建立、初始化一個Cart物件，並以shoppingCart命名此Cart物件
  // =============================
  // Private methods and propeties
  // =============================
  cart = [];

  console.log("Cart initializing.....")

  // Constructor
  function Item(name, price, count) { //購物車單項：名稱、價格、數量
    this.name = name;
    this.price = price;
    this.count = count;
  }

  // Save cart
  function saveCart() { //儲存Cart
    sessionStorage.setItem('shoppingCart', JSON.stringify(cart));
  }

    // Load cart
  function loadCart() { //載入Cart
    cart = JSON.parse(sessionStorage.getItem('shoppingCart'));
  }
  if (sessionStorage.getItem("shoppingCart") != null) {
    loadCart();
  }


  // =============================
  // Public methods and propeties 公開的方法與屬性
  // =============================
  var obj = {}; //物件

  // Add to cart 將一個項目加入到Cart
  obj.addItemToCart = function(name, price, count) { //function expression
    for(var item in cart) {
      if(cart[item].name === name) {
        cart[item].count ++;
        saveCart();
        return;
      }
    }
    var item = new Item(name, price, count);
    cart.push(item);
    saveCart();
  }
  // Set count from item 將項目裏的數量指定給Cart項目中的數量
  obj.setCountForItem = function(name, count) {
    for(var i in cart) {
      if (cart[i].name === name) {
        cart[i].count = count;
        break;
      }
    }
  };
  // Remove item from cart 從Cart中移除項目
  obj.removeItemFromCart = function(name) {
      for(var item in cart) {
        if(cart[item].name === name) {
          cart[item].count --;
          if(cart[item].count === 0) {
            cart.splice(item, 1);
          }
          break;
        }
    }
    saveCart();
  }

  // Remove all items from cart 從Cart移除所有的項目
  obj.removeItemFromCartAll = function(name) {
    for(var item in cart) {
      if(cart[item].name === name) {
        cart.splice(item, 1);
        break;
      }
    }
    saveCart();
  }

  // Clear cart 清空Cart
  obj.clearCart = function() {
    cart = [];
    saveCart();
  }

  // Count cart 計算Cart中的總數量
  obj.totalCount = function() {
    var totalCount = 0;
    for(var item in cart) {
      totalCount += cart[item].count;
    }
    return totalCount;
  }

  // Total cart Cart中所有的項目總金額
  obj.totalCart = function() {
    var totalCart = 0;
    for(var item in cart) {
      totalCart += cart[item].price * cart[item].count;
    }
    return Number(totalCart);
  }

  // List cart
  obj.listCart = function() {
    var cartCopy = [];
    for(i in cart) {
      item = cart[i];
      itemCopy = {};
      for(p in item) {
        itemCopy[p] = item[p];

      }
      itemCopy.total = Number(item.price * item.count);
      cartCopy.push(itemCopy)
    }
    return cartCopy;
  }

  // cart : Array 陣列
  // Item : Object/Class 物件別
  // addItemToCart : Function
  // removeItemFromCart : Function 從Cart移除一個項目
  // removeItemFromCartAll : Function 從Cart移除所有的項目
  // clearCart : Function 清空Cart
  // countCart : Function Cart項目數量
  // totalCart : Function Cart中所有的項目總金額
  // listCart : Function 列出所有的Cart項目
  // saveCart : Function 儲存Cart
  // loadCart : Function 載入Cart
  return obj;
})();


// *****************************************
// Triggers / Events
// *****************************************
// Add item 加入一個項目到Cart
$('.add-to-cart').click(function(event) {
  event.preventDefault();
  var name = $(this).data('name');
  var price = Number($(this).data('price'));
  shoppingCart.addItemToCart(name, price, 1);
  console.log("add to cart")
  displayCart();
});

// Clear items 清除Cart項目(複數，多個)
$('.clear-cart').click(function() {
  shoppingCart.clearCart();
  displayCart();
});


function displayCart() { //顯示Cart
  var cartArray = shoppingCart.listCart();
  var output = "";
  for(var i in cartArray) {
    output += "<tr>"
      + "<td>" + cartArray[i].name + "</td>"
      + "<td>(" + cartArray[i].price + ")</td>"
      + "<td><div class='input-group'><button class='minus-item input-group-addon btn btn-primary' data-name=" + cartArray[i].name + ">-</button>"
      + "<input type='number' min='0' max='10' class='item-count form-control' data-name='" + cartArray[i].name + "' value='" + cartArray[i].count + "'>"
      + "<button class='plus-item btn btn-primary input-group-addon' data-name=" + cartArray[i].name + ">+</button></div></td>"
      + "<td><button class='delete-item btn btn-danger' data-name=" + cartArray[i].name + ">X</button></td>"
      + " = "
      + "<td>" + cartArray[i].total + "</td>"
      +  "</tr>";
  }
  $('.show-cart').html(output);
  $('.total-cart').html(shoppingCart.totalCart());
  $('.total-count').html(shoppingCart.totalCount());
  
//    console.log(cartArray[i].name,cartArray[i].price,shoppingCart.totalCount())
//	console.log(shoppingCart.totalCart())
}

// Delete item button 刪除Cart項目按鈕

$('.show-cart').on("click", ".delete-item", function(event) {
  var name = $(this).data('name')
  shoppingCart.removeItemFromCartAll(name);
  displayCart();
})


// -1 項目加1
$('.show-cart').on("click", ".minus-item", function(event) {
  var name = $(this).data('name')
  shoppingCart.removeItemFromCart(name);
  displayCart();
})
// +1 項目減1
$('.show-cart').on("click", ".plus-item", function(event) {
  var name = $(this).data('name')
  shoppingCart.addItemToCart(name);
  displayCart();
})

// Item count input 輸入項目數量
$('.show-cart').on("change", ".item-count", function(event) {
   var name = $(this).data('name');
   var count = Number($(this).val());
  shoppingCart.setCountForItem(name, count);
  displayCart();
});

displayCart();
