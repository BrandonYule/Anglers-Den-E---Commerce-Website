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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style.css">
<script src="function.js"></script>

<!-- Customer order form styling  -->

<style>
  body {
  font-family: Arial;
  font-size: 17px;
  padding: 8px;
}

    * {
  box-sizing: border-box;
}

.row {
  display: -ms-flexbox; 
  display: flex;
  -ms-flex-wrap: wrap; 
  flex-wrap: wrap;
  margin: 0 -16px;
}

.amount-col {
  -ms-flex: 25%; 
  flex: 25%;
}

.order-col {
  -ms-flex: 50%; 
  flex: 50%;
}

.main-col {
  -ms-flex: 75%; 
  flex: 75%;
}

.amount-col,
.order-col,
.main-col {
  padding: 0 16px;
}

.container {
  background-color: #f2f2f2;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
}

input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}
.select{
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color: #dddddd;
  color: black;
  padding: 12px;
  margin: 10px 0;
  margin-left:80%;
  border: none;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn:hover {
  background-color: black;
  color: white;
}

a {
  color: black;
}

hr {
  border: 1px solid lightgrey;
}

span.price {
  float: right;
  color: grey;
}


@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
}

</style>

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

<div class="about-img" >
  <center><h1 class="over-head" ><b>Checkout</b></h1></center>
</div>

<!-- Cart count  -->

<?php
    $count = 0;
if(isset($_SESSION['cus_cart'])){
    $count = count($_SESSION['cus_cart']);
}

    ?>

<!-- Customer info and order form  -->

<h2>Checkout Your Order</h2>

<div class="row">
  <div class="main-col">
    <div class="container">
      <form action="insert_order.php" method="post">
      
        <div class="row">
          <div class="order-col">
            <h3>Billing Address</h3>
            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
            <input type="text" id="fname" name="fname" value="<?php echo $_SESSION['first_name']; ?>">
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" name="email" value="<?php echo $_SESSION['email']; ?>"
            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
            <input type="text" id="adr" name="address" placeholder="45 Eduvos Drive">
            <label for="city"><i class="fa fa-institution"></i> City</label>
            <input type="text" id="city" name="city" placeholder="Johannesburg">
            <label for=""><i class="fa fa-phone"></i>Phone Number</label>
            <input type="text" id="phoneno" name="phoneno" value="<?php echo $_SESSION['phoneno'];  ?>">
            <div class="row">
              <div class="order-col">
                <label for="state">Country</label>
                <input type="text" id="state" name="country" placeholder="South Africa">
              </div>
              <div class="order-col">
                <label for="zip">Zip / Postal code</label>
                <input type="text" id="zip" name="postalcode" placeholder="1619">
              </div>
            </div>
          </div>

          <div class="order-col">
            <h3>Payment Method</h3>
            <label for="fname"> Cards</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>

            </div>
            <label>Please Select Your Payment Method</label>
            <select name="payment" class="select" id="">
                <option value="Paypal">Paypal</option>
                <option value="Cash On Delievry">Cash On Delievry</option>
                <option value="Bank Transfer">Bank Transfer</option>
            </select>
            
          </div>
          
        </div>
        
        <input type="submit" name="submit" value="Proceed to Order" class="btn">
     
    </div>
  </div>
  <div class="amount-col">
    <div class="container">
    <?php
            $pname = "pname";
            $total = 0;
                    $subtotal = 0;
                    if(isset($_SESSION['cus_cart'])){
                        foreach($_SESSION['cus_cart'] as $key => $value){
                            $total = $value['price'] * $value['qnty'];
                            $subtotal += $value['price'] * $value['qnty'];
                            
                            
                        
                    }
               
                }
                ?>
      <h4>Cart <span class="price" style="color:black"><i class="fa fa-shopping-cart"></i> <b>[<?php echo "$count";?>]</b></span></h4>
      <p>Order Total <span class="price">R<?php echo number_format($subtotal,2);?></span></p>
      <p>Shipping and handling<span class="price">R00.00</span></p>
      
      <p>Tax<span class="price">14%</span></p>
      <p>Total<span class="price">R<?php echo number_format($subtotal,2);?></span></p><input  type="hidden" name="subtotal" value="<?php echo number_format($subtotal,0);?>">
      <hr>
      <p>Total <span class="price" style="color:black"><b>R<?php echo number_format($subtotal,2);?></b></span></p>

      <?php
                   
                   $total = 0;
                   $subtotal = 0;
                   
                   // $item_no = $_GET['item_no'];
                   if(isset($_SESSION['cus_cart'])){
                    
                       foreach($_SESSION['cus_cart'] as $key => $value){
                           
                           // print_r($value);
                           echo 
                           "
                           
                           <tr>
                           
                           <td>
                       
                           <input type='hidden' name='pname[]' id='pname'+i+''  value=' $value[pname]'>
                           </td>
                           
                           <td>
                        
                           <input type='hidden' id='price'+i+'' name='price[]' value=' $value[price]'>
                           </td>
                           <td>
                         
                           </td>
                           <td>
                           <input type='hidden' id='qnty'+i+'' name='qnty[]' value=' $value[qnty]'>
                             
                            
                             
                           
                             </tr>
                             
                           ";
                       
                   }
              
               }
              
               ?>
                      </tbody>
                    </table>
    </div>
    </form>
  </div>
</div><br>

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