<?php
//START SESSION
session_start();
include '../include/connection.php';


?>
<!doctype html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, viewport-fit=cover, shrink-to-fit=no">
    <meta data-react-helmet="true" name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, viewport-fit=cover">
    </meta>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, viewport-fit=cover, shrink-to-fit=no">
    <meta data-react-helmet="true" name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, viewport-fit=cover">
    </meta>
    <link rel="shortcut icon" href="../img/mainlogo.png" />
    <meta property="og:image" content="img/mainlogo.png">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BLOAD BANK</title>
    <link href="https://fonts.googleapis.com/css?family=Merriweather&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../scss/main.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css" integrity="sha384-QYIZto+st3yW+o8+5OHfT6S482Zsvz2WfOzpFSXMF9zqeLcFV0/wlZpMtyFcZALm" crossorigin="anonymous">
</head>

<body>
    <header>
        <div class="collapse bg-primary" id="navbarHeader">
            <div class="container">
                <div class="row">

                </div>
            </div>
        </div>
        <div class="navbar navbar-primary bg-primary box-shadow d-flex fixed-top">
            <div class="container d-flex justify-content-between">
                <a href="#" class="navbar-brand d-flex align-items-center">
                    <img src="../img/mainlogo.png" alt="logo" width="50" height="50">
                    <strong style="color:white; margin-left: 5%;"> BLOOD BANK</strong>

                </a>

                <a class="text-light text-decoration-non nav-item nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
                <a class="text-light text-decoration-non nav-item nav-link" href="#">Features</a>
                <a class="text-light text-decoration-non nav-item nav-link" href="#">Pricing</a>
                <a class="text-light text-decoration-non nav-item nav-link disabled" href="#">Add User</a>

                <?php

                if (isset($_SESSION['username'])) {
                    echo '<div>
                    <a href="logout.php" class="text-light text-decoration-none">Logout</a>
                </div>';
                } else {
                    echo '<div>
                    <a href="login.php" class="text-light text-decoration-none">Login</a>
                    <a href="signup.php" class="text-light text-decoration-none">Sign up</a>
                </div>';
                }   ?>
            </div>
        </div>
    </header>