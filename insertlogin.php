<?php 

session_start(); 

include "connection.php";

if (isset($_POST['email']) && (isset($_POST['pswd']))) {


    function validate($data){

       $data = trim($data);

       $data = stripslashes($data);

       $data = htmlspecialchars($data);

       return $data;

    }

    $email = validate($_POST['email']);

    $pswd = md5($_POST['pswd']);


    if (empty($email)) {
      echo "Email is required";
        header("Location: login.php?error=Email is required");

        exit();

    }else if(empty($pswd)){
           echo "Password is required";
        header("Location: login.php?error=Password is required");

        exit();

    }else{

        $sql = "SELECT * FROM registration WHERE email='$email' AND pswd = '$pswd' " ;

        // print_r($sql);
        // exit();
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {

            $row = mysqli_fetch_assoc($result);

            if($row['email'] === $email && $row['pswd'] === $pswd) {

                echo 'Logged in!';

                $_SESSION['email'] = $row['email'];
                $_SESSION['id'] = $row['id'];
                $_SESSION["temp_login_id"] = $row['id'];

                $_SESSION['first_name'] = $row['first_name'];
                $_SESSION['last_name'] = $row['last_name'];
                $_SESSION['phoneno'] = $row['phoneno'];
                
                header("Location:fishing-product.php");

                exit();

            }else{
                 echo "Incorect User name or password";
                header("Location: login.php?error=Incorrect Username or password");

                exit();

            }

        }else{
                
            header("Location: login.php?error=Incorrect Username or password");

            exit();

        }

    }

}