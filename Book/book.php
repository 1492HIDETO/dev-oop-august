<?php

class Book{
    //properties
    public $title = 'The Origin';
    private $price;
    protected $author;
    
    //methods 
    public function displayTitle(){
        echo $this->title;
    }

    //setter 
    public function setPrice($new_price){
        $this->price = $new_price;
    }
    //getter
    public function getPrice(){
        return $this->price;
    }
}

$math = new Book;

$science = new Book;
// error $science->price = 30;

// $math->title = "Algebra";
// $math->displaytitle();

$science->setPrice(30);

echo $science->getPrice();
?>