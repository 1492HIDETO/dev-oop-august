<?php

    class Book{
        private $title;
        private $price;
        private $author;

        public function __construct($new_title, $new_price, $new_author){
        $this->title = $new_title;
        $this->price = $new_price;
        $this->author = $new_author;
        }

        public function getTitle(){
            return $this->title;
        }

        public function getPrice(){
            return $this->price;
        }

        public function getAuthor(){
            return $this->author;
        }
    }
?>