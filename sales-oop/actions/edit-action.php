<?php

    include "../classes/User.php";

    $user_id = $_GET['user_id'];
    // for hidden id = $_POST['user_id'];
    $product_name = $_POST['product_name'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];


    $user = new User;

    $user->updateUser($user_id, $product_name, $price, $quantity);
?>