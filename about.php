<?php
session_start();
include 'connection.php';

?>
<!DOCTYPE html>
<html>
<head>
  <title>The Anglers Den</title>
<meta name="viewport" content="width=device-width, initial-scale=1">

<script src="function.js"></script>
<link rel="stylesheet" href="style.css">
</head>
<body>

  <!-- navbar -->

  <div class="topnav" id="myTopnav">
  <a href="index.php">Home</a>
    <a href="about.php">About us</a>
    <a href="new-arrivel.php">New Arrival</a>
    <a href="fishing-product.php">Fishing Products</a>
    <a href="outdoor-product.php">Outdoor Products</a>
    <a href="cart.php">Cart</a>
    <a href="checkout.php">Checkout</a>
    <a href="./logout.php" >Logout</a>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
      <i class="fa fa-bars"></i>
    </a>
  </div>a

<!-- background image -->

<div class="about-img" >
  <center><h1 class="over-head" ><b>About Us</b></h1></center>
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

 <!-- About us Info  -->
 
 
  <div class="container" style="background-color:#f1f1f1">
    <div class="row">
      <div class="column-img">
        <img src="images/new2.jpg" alt="App" width="335" height="471">
      </div>
      <div class="column-text">
        <h1 class="xlarge-font"><b>Superior </b></h1>
        <h3 class="large-font" >Fishing and Outdoor Products</h3>
        <p><span style="font-size:24px;font-family: cursive;">Get hooked on our weekly blog where we talk about the newest and most popular fishing and outdoor products to the market!</p>
        <button class="button" style="background-color:black">Read More</button>
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