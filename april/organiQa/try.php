<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="asset/css/card.css">
  <script src="jquery-3.4.1.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
</head>
<body>
<div class="rows">
    <div class='product--green' style="display: inline-block;float: left">
    <div class='product_inner'>
      <img src='images/product-1new.png' width='300'>
      <p>Nike Air (Women)</p>
      <p>Size 7</p>
      <p>Price £199.99</p>
      <p><i class='fa fa-cart'></i></p>
    </div>
    <div class='product_overlay'>
      <h2>Added to basket</h2>
      <i class='fa fa-check'></i>
    </div>
  </div>
  <div class='product--green'>
    <div class='product_inner'>
      <img src='images/product-1new.png' width='300'>
      <p>Nike Air (Women)</p>
      <p>Size 7</p>
      <p>Price £199.99</p>
      <p><i class='fa fa-cart'></i></p>
    </div>
    <div class='product_overlay'>
      <h2>Added to basket</h2>
      <i class='fa fa-check'></i>
    </div>
  </div>
</div>
</body>
<script type="text/javascript">
  $(function() {

  "use strict"
  
  var init = "No items yet!";
  var counter = 0;

  // Initial Cart
  $(".counter").html(init);
  
  // Add Items To Basket
  function addToBasket() {
    counter++;
    $(".counter").html(counter).animate({
      'opacity' : '0'
    },300, function() {
      $(".counter").delay(300).animate({
        'opacity' : '1'
      })
    })
  }

  // Add To Basket Animation
  $("button").on("click", function() {
    addToBasket(); $(this).parent().parent().find(".product_overlay").css({
      'transform': ' translateY(0px)',
      'opacity': '1',
      'transition': 'all ease-in-out .45s'
    }).delay(1500).queue(function() {
      $(this).css({
        'transform': 'translateY(-500px)',
        'opacity': '0',
        'transition': 'all ease-in-out .45s'
      }).dequeue();
    });
  });
});
</script>
</html>