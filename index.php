<?php
session_start();
include 'connection.php';

?>

<!DOCTYPE html>
<html>
<head>
  <title>The Anglers Den</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="function.js"></script>
<link rel="stylesheet" href="style.css">
</head>
<body>
  
  <!-- navbar -->

  <div class="topnav" id="myTopnav">
    <a href="index.php" >Home</a>
    <a href="about.php">About us</a>
    <a href="new-arrivel.php">New Arrival</a>
    <a href="fishing-product.php">Fishing Products</a>
    <a href="outdoor-product.php">Outdoor Products</a>
    <a href="checkout.php">Checkout</a>
    <a href="cart.php">Cart</a>
    <a href="login.php">Login</a>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
      <i class="fa fa-bars"></i>
    </a>
  </div>

<!-- background image -->
<div class="bg-img" >
  <center><h1 class="over-head" ><b>The Anglers Den</b></h1></center>
</div>

<center> <h1 class="f-p">New Arrivals</h1></center>

<div class="product-row">
  <div class="product-column">
    <div class="product-card">
      
      <a href="new-arrivel.php"><img src="images/Docks Bite alarm set.jpg" width="70%" alt="">
    <h3>Docks 4 Piece Bite Alarm Set</h3>
      <p>R399</p></a>
      
    </div>
  </div>

  <div class="product-column">
    <div class="product-card">
     
      <a href="new-arrivel.php"><img src="images/rubberduck.jpg" width="70%" alt="">
      <h3>Inflatable Rubber Duck</h3>
      <p>R1299</p></a>
    </div>
  </div>
  
  <div class="product-column">
    <div class="product-card">
      
      <a href="new-arrivel.php"><img src="images/Monster Carp Combi Link size 4.jpg" width="70%" alt="">
      <h3>Monster Carp Combi Link Size 4</h3>
      <p>R49</p></a>
    </div>
  </div>
  
  <div class="product-column">
    <div class="product-card">
     
      <a href="new-arrivel.php"> <img src="images/steellight.jpg" width="70%" alt="">
      <h3>Waterproof Steel Flashlight</h3>
      <p>R199</p></a>
    </div>
  </div>
</div>

<!-- Fishing Product -->

 <center> <h1 class="f-p">Fishing Products</h1></center>

<div class="product-row">
  <div class="product-column">
    <div class="product-card">
      
    <a href="fishing-product.php"><img src="images/landingnet.jpg" width="70%" alt="">
    <h3>Monster Carp Landing Net</h3>
      <p>R399</p></a>
    </div>
  </div>

  <div class="product-column">
    <div class="product-card">
     
      <a href="fishing-product.php"><img src="images/Okuma 8K Fishing Reel.jpg" width="70%" alt="">
      <h3>Okuma 8K Fishing Reel</h3>
      <p>R539</p></a>
    </div>
  </div>
  
  <div class="product-column">
    <div class="product-card">
      
      <a href="fishing-product.php"><img src="images/Prologic Fishing Box.jpg" width="70%" alt="">
      <h3>Prologic Fishing Box</h3>
      <p>R249</p></a>
    </div>
  </div>
  
  <div class="product-column">
    <div class="product-card">
     
      <a href="fishing-product.php"><img src="images/fishingrod.jpg" width="70%" alt="">
      <h3>Shimano LFG Fishing Rod</h3>
      <p>R479</p></a>
    </div>
  </div>
</div>

   <!-- Outdoor Product -->
   <center> <h1 class="f-p">Outdoor Products</h1></center>

<div class="product-row">
  <div class="product-column">
    <div class="product-card">
      
      <a href="outdoor-product.php"><img src="images/Korda Tea Set.jpg" width="70%" alt="">
    <h3>Korda Tea Set</h3>
      <p>R299</p></a>
    </div>
  </div>

  <div class="product-column">
    <div class="product-card">
     
      <a href="outdoor-product.php"><img src="images/Ridge Monkey Kettle XL.jpg" width="70%" alt="">
      <h3>Ridge Monkey Kettle XL</h3>
      <p>R295</p></a>
    </div>
  </div>
  
  <div class="product-column">
    <div class="product-card">
      
      <a href="outdoor-product.php"><img src="images/Stainless steel flask.jpg" width="70%" alt="">
      <h3>Stainless steel Hot/Cold flask</h3>
      <p>R99</p></a>
    </div>
  </div>
  
  <div class="product-column">
    <div class="product-card">
     
      <a href="outdoor-product.php"><img src="images/steellight.jpg" width="70%" alt="">
      <h3>Wterproof Steel Flashlight</h3>
      <p>R199</p></a>
    </div>
  </div>
</div>


<!-- Store Information -->

<div class="grid-container">
  <div class="header">
    <h4>The Anglers Den</h4>
  </div>
  </div>
<div class="row1">
  <div class="column1">
    <div class="card1">
      <h3>
        SUPERIOR QUALITY</h3>
    
      <p>All of our products are of superior quality to ensure your maximum satisfaction.</p>
    </div>
  </div>

  <div class="column1">
    <div class="card1">
      <h3>PREMIUM PACKAGING</h3>
      
      <p>
      All of our products are carefully packed to enure they arrive safely.</p>
    </div>
  </div>
  
  <div class="column1">
    <div class="card1">
      <h3>
        REFUND POLICY</h3>
      
      <p>
      30 Days FREE Refund.</p>
    </div>
  </div>
  

  </div>
</div> 

<!-- footer  -->

<div class="footer-container">
  
  
  <div class="footer-left" >
  <span class="f-info">The Anglers Den</span>
  <p class="f-info">South African based online store <br> Fishing and Outdoor Products </p>
  </div>
  <div class="footer-middle" >
  <label for="">PAGES</label><br>
  
  <a href="about.php"><span class="pages">About</span></a><br>
  <a href="contact.php"><span class="pages">Contact</span></a><br>
  <a href="register.php"><span >Register</span></a><br>
  <a href="login.php"><span >Login</span></a><br>
  </div>  
  <div class="footer-right" >
  <h4>Where To Find Us</h4>
  <span> 28 Basil Street <br>
KEMPTON PARK, South Africa <br>
084 558 4294
  </span><br>
  <span>THEANGLERSDEN@GMAIL.COM</span><br>
  <span>084 558 4294
  </span>

  </div>
  
  
</div>
</body>
</html>