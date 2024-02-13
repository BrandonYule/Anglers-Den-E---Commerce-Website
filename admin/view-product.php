<?php

include 'connection.php';

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
       
        
        <div class="column-delete" >
          <h2 class="font">View Products</h2>
          <table id="cart-table">
            <thead>
              <tr>
              <th>Product Name </th>
              <th>Unit Price</th>
              <th>Image</th>
              <th >Date</th>
              <th>Delete</th>
              </tr>
            </thead>
            
            <tbody>
            <?php
            $sql = "SELECT * FROM products";
            $run = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_array($run)) {
            ?>
                                
                                    
                                     <tr>
                                    
                                     <td><?php echo $row['name'] ?></td>
                                    
                                     <td><?php echo $row['price'] ?></td>
                    <td><?php echo '<img src="image/'.($row["img"] ).'" height="50" width="50"/>' ?></td>
                    <td><?php echo $row['date'] ?></td>
                    <td><a href="deleteproduct.php?uid=<?php echo $row['id'] ?>" class="btn">Delete</a></td>
                                     
                                       </tr>
                                       <?php
            }
            ?>
                                     
                           
                                </tbody>
                               
          </table>
        </div>
   
      
     
      
</body>
</html> 