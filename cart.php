
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

<style>

  .leftcolumn {   
  float: left;
  width: 75%;
  
}


.rightcolumn {
  float: left;
  width: 25%;
  padding-left: 20px;
}

.fakeimg {
  background-color: #dddddd;
  width: 100%;
  padding: 20px;
}

.card {
   background-color: white;
   padding: 20px;
   margin-top: 20px;
   background-color: #dddddd;
}

@media screen and (max-width: 800px) {
  .leftcolumn, .rightcolumn {   
    width: 100%;
    padding: 0;
  }
}
#cart-table {
  font-family: cursive;
  border-collapse: collapse;
  width: 100%;
}

#cart-table td, #cart-table th {
  border: 1px solid #dddddd;
  padding: 8px;
}

#cart-table tr:nth-child(even){background-color: #f2f2f2;}

#cart-table tr:hover {background-color: #ddd;}

#cart-table th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: white;
  color: black;
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
<div class="bg-img" >
  <center><h1 class="over-head" ><b>Cart</b></h1></center>
</div>


<div class="row">
  <div class="leftcolumn">
    <div class="card">
      <h2>Shopping Cart</h2>
      
      <table id="cart-table">
  <thead>
    <tr>
    <th>Product</th>
    <th>Unit Price</th>
    <th>Quantity</th>
    <th >Total</th>
    <th>Remove</th>
    </tr>
  </thead>
  
  <tbody>
                      <?php
                   
                   $total = 0;
                   $subtotal = 0;
                   // $item_no = $_GET['item_no'];
                   if(isset($_SESSION['cus_cart'])){
                       foreach($_SESSION['cus_cart'] as $key => $value){
                           $total = $value['price'] * $value['qnty'];
                           $subtotal += $value['price'] * $value['qnty'];
                           // print_r($value);
                           echo 
                           "
                           <form action='insertcart.php' method='post'>
                           <tr>
                          
                           <td>
                           $value[pname]
                           <input type='hidden' name='pname' value=' $value[pname]'>
                           </td>
                           <td>
                           $value[price]
                           <input type='hidden' name='price' value=' $value[price]'>
                           </td>
                           <td>
                           $value[qnty]
                           <input type='hidden' name='qnty' value=' $value[qnty]'>
                           </td>
                           
                           
                           <td>
                           R$total
                           </td>
                           
                           <td ><button name='remove' class='btn btn-sm '><i class='fa-solid fa-times'></i></button></td>
                           
                             </tr>
                             </form>
                           ";
                       
                   }
              
               }
              
               ?>
                      </tbody>
                      <tfoot>
                        <tr>
                          <th colspan="3">Total</th>
                          <th colspan="2">R<?php echo number_format($subtotal,2);?></th>
                        </tr>
                      </tfoot>
</table>

<a href="checkout.php"> <button type="submit"  class="button" style="background-color:black;margin-left:76%;margin-top:3%">Proceed to Checkout</button></a>
    </div><br><br>
   
  </div>
  <div class="rightcolumn">
    <div class="card">
      <h2>Order summary</h2><hr>
      <div class="fakeimg" style="height:100px;">Shipping and additional costs are automatically calculated and added to your total.</div><hr>
      <table class="table">
                    <tbody>
                      <tr>
                        <td>Order subtotal</td>
                        <th>R<?php echo number_format($subtotal,2);?></th>
                      </tr>
                      <tr>
                        <td>Shipping & handling</td>
                        <th>R00.00</th>
                      </tr>
                      <tr>
                        <td>Tax</td>
                        <th>14%</th>
                      </tr>
                      <tr class="total">
                        <td>Total</td>
                        <th>R<?php echo number_format($subtotal,2);?></th>
                      </tr>
                    </tbody>
                  </table>
    </div><br><br>
    
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