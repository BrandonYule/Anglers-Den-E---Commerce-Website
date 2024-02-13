<?php
include 'connection.php';
$id=$_GET["uid"];
$sql="SELECT * FROM products WHERE id='$id'";
                $run=mysqli_query($conn,$sql);
                $fet=mysqli_fetch_assoc($run);
$del="DELETE FROM products WHERE id='$id'";
$run=mysqli_query($conn,$del);
if($run){
    unlink("image/".$fet['img']);
   header('Refresh:0, url=view-product.php');
}else{
    echo "Data has not been deleted";
}
?>