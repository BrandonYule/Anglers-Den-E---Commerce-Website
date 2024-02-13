<?php
session_start();
include 'connection.php';

?>
<?php

if(!isset($_SESSION['email'])){
    header('location:login.php');
    
}
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
  </div>

<!-- background image -->
<div class="bg-img" >
  <center><h1 class="over-head" ><b>This is a Trending Product!</b></h1></center>
</div>

<center> <h1 class="f-p">Product Details</h1></center>


<!-- add product from database  -->

<div class="container" style="background-color:#f1f1f1">
<form action="insertcart.php" method="post">
    <div class="row">
    <?php 
   
   $id = $_GET['id'];
   $my="SELECT * FROM products  WHERE id = '$id'";
//    echo $my;exit();
   
   $rune=mysqli_query($conn,$my);
   while($fet=mysqli_fetch_array($rune))
   {
    $id = $fet['id'];
    ?>
      <div class="column-img">
        <img src="<?php echo '../the anglers den/admin/image/' .$fet[5]; ?>" alt="" width="335" height="471">
      </div>
      <div class="column-text">
        <h3 class="xlarge-font"><?php echo $fet[2]?></h3>
        <p  style="font-size:24px;font-family: cursive;"><span>R<?php echo $fet[3]?></span></p>
        <label for="quantity" style="font-size:24px;font-family: cursive;">Quantity:</label>
  <input type="number"  name="qnty" style="font-size:24px;font-family: cursive;">
<input type="hidden" name="price" value="<?php echo $fet[3]?>">
<input type="hidden" name="discription" value="<?php echo $fet[4]?>">
<input type="hidden" name="pname" value="<?php echo $fet[2]?>">
<p>
</p>
        <p><span style="font-size:24px;font-family: cursive;"><?php echo $fet[4]?></p>
        <button type="submit" name="addcart" class="button" style="background-color:black">Add to Cart</button>
      </div>
      <?php 
                }
            ?>
    </div>
    </form>
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