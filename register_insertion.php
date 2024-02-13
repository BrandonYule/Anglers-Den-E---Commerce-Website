<?php
  include 'connection.php';
?>
<?php

 
 if(isset($_POST['submit'])){
    $first_name = $_POST['first_name'];
    $last_name= $_POST['last_name'];
   $email= $_POST['email'];
    $pswd = md5($_POST['pswd']);
    $Phoneno= $_POST['phoneno'];
    
    
    $checkuser = "SELECT * FROM registration where email = '$email'";
    $result = mysqli_query($conn,$checkuser);
    $count = mysqli_num_rows($result);
    if($count>0){
      header("Location: register.php?error= This Email Already Exist");

}else{
  $sql = "INSERT INTO registration (first_name,last_name ,email, pswd, phoneno) VALUES ('$first_name','$last_name','$email','$pswd','$Phoneno')";
   $er = mysqli_errno($conn);
   echo $er;
  $conn->query($sql);
  
    if(!$conn){
      echo "Error";
    }
    else{
      // echo "New Record Created";
      header("Location: login.php");
    }
  
  
   }
}

?>