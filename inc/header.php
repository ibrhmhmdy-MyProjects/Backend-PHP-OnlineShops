<?php require_once "App.php"; ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Online Shop</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">Online Shop</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php">All Products(<?= $db->CountRows("products")?>)</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Add.php">Add Product</a>
                        </li>
                    </ul>
                </div>
                <nav class="navbar-nav ml-auto">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <?php $countUser = $db->CountRows("users"); ?>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Users(<?= $countUser ?>)</a>
                        </li>
                        <?php
                            if($session->hasSession("current_login")){
                                $current_user = $session->Get("current_login");
                                $user_id = $current_user['id'];
                                $username = $current_user['username'];
                                $email = $current_user['email'];
                        ?>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><?= $username ?></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="handlers/handleLogout.php">Logout</a>
                        </li>
                        <?php }else{ ?>
                        <li class="nav-item">
                            <a class="nav-link" href="register.php">Signup</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="login.php">Login</a>
                        </li>
                        <?php }?>
                    </ul>
                </nav>
            </div>
        </nav>
