<?php


 session_start();
 include "connection.php";
 
 
 if(isset($_POST['submit'])){
    
    $fname = $_POST['fname'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $phoneno = $_POST['phoneno'];
    $country = $_POST['country'];
    $postal_code = $_POST['postalcode'];
    $subtotal = $_POST['subtotal'];
    $payment = $_POST['payment'];
    $login_id = $_SESSION["temp_login_id"];
    
    $sql = "INSERT INTO cus_information (fname,email,addres,city,phoneno,country,postal_code,subtotal,payment_method,login_id)
     VALUES ('$fname','$email','$address','$city','$phoneno','$country','$postal_code','$subtotal','$payment','$login_id')";
  
  echo " $login_id";
  
  $run = mysqli_query($conn,$sql);
  // $custumer_id = mysqli_insert_id($conn);
  $cus_id = $_SESSION["temp_login_id"];
      if ($run){
        header('Location: index.php');
        for($i=0;$i<count($_POST['pname']);$i++){
            
            $pname = $_POST['pname'][$i];
            $price = $_POST['price'][$i];
           $qnty = $_POST['qnty'][$i];
            
          
        $quert="INSERT INTO `cus_order`(`pname`, `price`, `quantity`,  `loginid`) 
        VALUES ('$pname','$price','$qnty','$cus_id')";
  
        $run2 = mysqli_query($conn,$quert);
        if ($run2) {
        //   echo "Your Entry Has Been Submitted Successfully";
        header('Location: checkout.php');

        }
  
  
  
      }
    }  
}
  
  

  ?>