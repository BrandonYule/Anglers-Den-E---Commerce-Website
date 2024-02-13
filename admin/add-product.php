<?php
include 'connection.php';



if(isset($_POST['submit'])){

  $category=strtolower(mysqli_real_escape_string($conn,$_POST['category']));
  $productname=strtolower(mysqli_real_escape_string($conn,$_POST['productname']));
  $price=strtolower(mysqli_real_escape_string($conn,$_POST['price']));
  $discription=strtolower(mysqli_real_escape_string($conn,$_POST['discription']));
  @$image = $_FILES['img']['name'];
  $date=date("Y-m-d");
  $sql="INSERT INTO `products`(`Category`, `name`, `price`,`discription`,`img`, `date`)
   VALUES ('$category','$productname','$price','$discription','$image','$date')";
   $run=mysqli_query($conn,$sql);
   move_uploaded_file($_FILES['img']['tmp_name'],'./image/'.$image);
   if($run){
      echo "<script>alert(' inserted')</script>";
   }
  }
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style.css">
<script src="function.js"></script>
<style>

</style>
</head>
<body>

    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="index.php">Home</a>
        <a href="add-product.php">Add Product</a>
        <a href="view-product.php">View Product</a>
        
      </div>
      
      <div id="main">
        
        <span class="font" style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; The Anglers Den</span>
        
      </div>
     
      <div class="row">
        <div class="column-form">
          <h2 class="font">Add Product</h2><hr>
          <div>
            <form method="post" enctype="multipart/form-data">
                <label >Add Category</label>
              <select  name="category">
                <option value="Fishing product">Fishing product</option>
                <option value="Outdoor product">Outdoor product</option>
                <option value="New Arrivel">New Arrivel</option>
              </select>
              <label >Product Name</label>
              <input type="text" id="fname" name="productname" >
          
              <label >Price</label>
              <input type="text"  name="price"  >
              <label>Description</label><br>
                        <textarea name="discription" class="form-control" id="" cols="55" rows="5"></textarea>
          
                        <label >Upload Image</label>
                        <input type="file" name="img" >
                        <!-- <input    required=""> -->
            
              <input type="submit" name="submit" value="Add Product">
            </form>
          </div>
        </div>
      </div>
      
</body>
</html> 