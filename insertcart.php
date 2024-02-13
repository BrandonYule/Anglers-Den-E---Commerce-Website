<?php
session_start();
// session_destroy();

$pname = $_POST['pname'];
$price = $_POST['price'];
$qnty = $_POST['qnty'];


//initilize the cus_cart variable
if (!isset($_SESSION['cus_cart'])) {
    $_SESSION['cus_cart'] = array();
}





if(isset($_POST['addcart'])){
    $check_item = array_column($_SESSION['cus_cart'],'pname');
    if(in_array($pname,$check_item)){
        echo "
        <script>
        alert ('product already added');
        window.location.href = 'cart.php';
        </script>
        ";
    }else{

$_SESSION['cus_cart'][] = array('pname' => $pname,'price' => $price, 'qnty' => $qnty);
// $_SESSION[$fabric] = $product;

header('location:cart.php');
}
}



if (isset($_POST['remove'])){
    foreach($_SESSION['cus_cart'] as $key => $value){
        if($value['pname'] == $_POST['pname']){
            unset($_SESSION['cus_cart'][$key]);
            $_SESSION['cus_cart'] = array_values($_SESSION['cus_cart']);
            header('location:cart.php');
        }
    }
}

?>