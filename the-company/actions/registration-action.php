<?php
    
    include "../classes/User.php";

    #gather the form data
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    #create the object (mysql)
    $user = new User;

    #call the method
    $user->createUser($first_name, $last_name, $username, $password);
?>