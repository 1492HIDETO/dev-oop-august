<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book OOP with Constructor</title>
</head>
<body>
<form action="" method="post">
    <label for="title">Title</label>
    <input type="text" name="title" id="title">

    <br>

    <label for="price">Price</label>
    <input type="text" name="price" id="price">

    <br>

    <label for="author">Author</label>
    <input type="text" name="author" id="author">

    <br>

    <button type="submit" name="btn_submit">Submit</button>

</form>

<?php
    include "book(constructor).php";
    if(isset($_POST['btn_submit'])){
//$title = $_POST['title'];
//$price = $_POST['price'];
//$author = $_POST['author'];
// $book = new Book($title, $price, $author);
//same as
$book = new Book($_POST['title'], $_POST['price'], $_POST['author']);

        echo "Title: " . $book->getTitle() . "<br>";
        echo "Price: " . $book->getPrice() . "<br>";
        echo "Author: " . $book->getAuthor();
    }

?>
    
</body>
</html>