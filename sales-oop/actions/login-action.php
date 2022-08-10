<?php
    include "../classes/User.php";

    $username = $_POST['username'];
    $password = $_POST['password'];

    $product = new Product;

    $product->login($username, $password);
?>