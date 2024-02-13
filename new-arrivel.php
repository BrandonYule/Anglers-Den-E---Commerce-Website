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

<div class="newarrivel-img" >
  <center><h1 class="over-head" ><b>New Arrival</b></h1></center>
</div>

<!-- add product from database  -->

<center> <h1 class="f-p">Available New Arrivals</h1></center>

<div class="product-row">
<?php 
            $my="SELECT * FROM products  WHERE category = 'new arrivel'";
            $rune=mysqli_query($conn,$my);
            while($fet=mysqli_fetch_array($rune))
            {
            ?>
  <div class="product-column">
    <div class="product-card">
      
      <a href="product-single.php?id=<?php echo $fet[0]?>"><img src="<?php echo '../the anglers den/admin/image/' .$fet[5]; ?>" width="200" height="300" alt="">
    <h3><?php echo $fet[2]?></h3>
      <p>R<?php echo $fet[3]?></p></a>
      <button class="button detail">Detail</button>
      <a href="product-single.php?id=<?php echo $fet[0]?>"><button class="button addcart">Add Cart</button></a>
      
   
  </div>

 
  </div>
  <?php 
                }
 ?>
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