<?php
    session_start();

    if(empty($_SESSION)){
        header('location: ../');
        exit;
    }

    include "../classes/User.php";

    $product = new Product;

    $product_list = $product->getAllProducts();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Dashboard</title>
</head>
<body>
   <?php include "navbar.php";?>

    <main>
        <div class="container mt-5 w-100">
            <div class="row mt-3">
                <div class="col-6 mt-5">
            <p class="display-4 fw-bold text-center">Product List</p>
            </div>
                <div class="col-6 mt-5 text-end">
                <a href="../views/add-product.php"><i class="fa-solid fa-3x fa-plus"></i></a>
                </div>
            </div>
            <table class="table table-hover w-100 mx-auto">
                <thead class="table-dark">
                    <th>ID</th>
                    <th>Product Name</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th></th>
                    <th></th>
                </thead>

                <tbody>
                    <?php
                    if(empty($user_list)){
                    ?>
                            <tr>
                                <td colspan="6" class="text-danger fw-bold text-center">NO USERS FOUND</td>
                            </tr>
                    <?php
                        }else{
                            foreach($user_list as $user_details){
                    ?>
                                <tr>
                                    <td><?= $user_details['id'];?></td>
                                    <td><?= $user_details['product_name'];?></td>
                                    <td><?= $user_details['price'];?></td>
                                    <td><?= $user_details['quanitity'];?></td>
                                    <td>
                                        <a href="edit-product.php?user_id=<?= $user_details['id'];?>" class="btn btn-warning btn-sm" title="Edit User"><i class="fa-solid fa-pen-to-square"></i></a>

                                        <a href="../actions/delete-action.php?user_id=<?= $user_details['id'];?>" class="btn btn-danger btn-sm" title="Delete User"><i class="fa-solid fa-trash-can"></i></a>
                                    </td>
                                    <td>
                                        
                                    </td>

                                </tr>
                    <?php
                            }
                        }
                    ?>
                </tbody>
            </table>
        </div>
    
</body>
</html>