

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .container{
        padding: 10px 20px;
    }
    .main{
    place-items: center;
    }
    .product-container {
    display: flex;
    gap: 95px; 
    }
</style>

<body>
    <div class="container">
        <?php
require("header/header.php");
?>
 <img src="./pictures/snow.jpg" alt="homepage" height="600px" width="1093">
 <div class="main">
 <h1> Best Selling</h1>
 <p>Get in the trend with our best selection styles</p>
 </div>
 <div class="product-container">
    <div class="product">
    <img src="./pictures/coat.jpg" alt="" height="300px" width="300px">
    <h3>Product 3</h3>
            <p>$30</p>
    </div>
<div class="product">
    <img src="./pictures/gloves.jpg" alt=""height="300px" width="300px">
    <h3>Product 3</h3>
            <p>$30</p>
     </div>
     <div class="product">
    <img src="./pictures/jacket.jpg" alt=""height="300px" width="300px">
    <h3>Product 3</h3>
            <p>$30</p>
     </div>
 </div>
 <div class="product-container">
    <div class="product">
    <img src="./pictures/socks.jpg" alt=""height="300px" width="300px">
    <h3>Product 3</h3>
            <p>$30</p>
               </div>
               <div class="product">
    <img src="./pictures/jacket.jpg" alt=""height="300px" width="300px">
    <h3>Product 3</h3>
            <p>$30</p>
               </div>
               <div class="product">
    <img src="./pictures/jacket.jpg" alt=""height="300px" width="300px">
    <h3>Product 3</h3>
            <p>$30</p>
               </div>
 </div>
 <div class="product-container">
    <div class="product">
    <img src="./pictures/socks.jpg" alt=""height="300px" width="300px">
    <h3>Product 3</h3>
            <p>$30</p>
               </div>
               <div class="product">
    <img src="./pictures/jacket.jpg" alt=""height="300px" width="300px">
    <h3>Product 3</h3>
            <p>$30</p>
               </div>
               <div class="product">
    <img src="./pictures/jacket.jpg" alt=""height="300px" width="300px">
    <h3>Product 3</h3>
            <p>$30</p>
               </div>
 </div>
<?php
require("header/footer.php")
?>
 </div>
</body>
</html>
