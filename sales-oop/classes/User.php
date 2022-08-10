<?php
        require_once "Database.php";

        class Product extends Database {

            public function createUser($first_name, $last_name, $username, $password){
                $sql = "INSERT INTO users (first_name, last_name, username, password) VALUES ('$first_name', '$last_name', '$username', '$password')";
                if($this->conn->query($sql)){
                    header("location: ../");
                    exit;
                }else{
                    die("Error in CREATING USER: " . $this->conn->error);
                }
            }
    
            public function login($username, $password){
                $sql = "SELECT id, username, password FROM users WHERE username = '$username'";
    
                $result = $this->conn->query($sql);
    
                if($result->num_rows == 1){
                    $user_details = $result->fetch_assoc();
    
                    if(password_verify($password, $user_details['password'])){
                        session_start();
                        $_SESSION['user_id'] = $user_details['id'];
                        $_SESSION['username'] = $user_details['username'];
    
                        header("location: ../views/dashboard.php");
                        exit;
                    }else{
                        die("Password is incorrect");
                    }
    
                }else{
                    die("Username not found");
                }
            }
            
            public function getAllProducts(){
                $products = [];
                $sql = "SELECT id, product_name, price, quantity FROM products";
    
                if($result = $this->conn->query($sql)){
                    while($row = $result->fetch_assoc()){
                        $products[] = $row;
                    }
                        return $products;
    
                }else{
                    die("ERROR in retrieving user list: " . $this->conn->error);
                }
            }
        
        
        }


?>