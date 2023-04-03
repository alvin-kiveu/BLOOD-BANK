<?php
//START SESSION
session_start();
include 'include/connection.php';

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
    <link rel="shortcut icon" href="img/mainlogo.png" />
    <meta property="og:image" content="img/mainlogo.png">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BLOAD BANK</title>
    <link href="https://fonts.googleapis.com/css?family=Merriweather&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="scss/main.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css" integrity="sha384-QYIZto+st3yW+o8+5OHfT6S482Zsvz2WfOzpFSXMF9zqeLcFV0/wlZpMtyFcZALm" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/589a5b1ebd.js" crossorigin="anonymous"></script>
</head>

<body>
<header>
    <div class="navbar navbar-primary bg-primary box-shadow">
        <div class="container d-flex justify-content-between align-items-center">
            <a href="#" class="navbar-brand d-flex align-items-center">
                <img src="img/mainlogo.png" alt="logo" width="50" height="50">
                <strong style="color:white; margin-left: 5%;"> BLOOD BANK</strong>

            </a>
            <button  class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
                <span  class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-collapse collapse" id="navbarHeader">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="index.php" class="nav-link  text-decoration-none">Home</a>
                    </li>
                    <?php
                    if (isset($_SESSION['username'])) {
                        echo '<li class="nav-item">
                            <a href="madarequest.php" class="nav-link  text-decoration-none">Requests</a>
                        </li>
                        <li class="nav-item">
                            <a href="logout.php" class="nav-link  text-decoration-none">Logout</a>
                        </li>';
                    } else {
                        echo '<li class="nav-item">
                            <a href="login.php" class="nav-link  text-decoration-none">Login</a>
                        </li>
                        <li class="nav-item">
                            <a href="signup.php" class="nav-link  text-decoration-none">Sign up</a>
                        </li>';
                    }
                    ?>
                </ul>
            </div>
        </div>
    </div>
</header>

<style>
    .navbar-toggler {
        border: none;
        background-color: white;
    }
   
    .navbar-toggler-icon {
        background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(0, 0, 0, 0.5)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E");
    }
    .navbar-toggler-icon:after {
        content: "";
        display: block;
        width: 100%;
        height: 100%;
        background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(0, 0, 0, 0.5)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E");
        background-repeat: no-repeat;
        background-position: center;
        background-size: 100% 100%;
        transition: transform 0.3s ease-in-out;
    }
    .navbar-toggler.collapsed:after {
        transform: rotate(180deg);
    }
    .navbar-toggler.collapsed {
        background-color: white;
        color:#800211;
    }
    .navbar-toggler.collapsed:hover {
        background-color: white;
        color:#800211;
    }
    .navbar-toggler:hover {
        background-color: white;
        color:#800211;
    }
    .navbar-toggler:focus {
        background-color: white;
        color:#800211;
    }
    .navbar-toggler:active {
        background-color: white;
        color: red;
    }
    .navbar-toggler:visited {
        background-color: white;
        color:#800211;
    }
    .navbar-toggler:link {
        background-color: white;
        color: red;
    }
    .navbar-toggler:active {
        background-color: white;
        color:#800211;
    }
    .navbar-toggler:visited {
        background-color: white;
        color:#800211;
    }
    .navbar-nav li a{
        color: white;
        font-weight: 900;
        padding: 16px;
    }
    .navbar-nav li{
        border-bottom: 1px solid #fff;
        color: white;
    }
    .navbar-nav li a:hover{
        background-color: #fff;
        color:#800211;
    }
@media (max-width: 768px) {
    .navbar-brand img {
        width: 40px;
        height: 40px;
        margin-right: 5px;
    }
    .navbar-brand strong {
        font-size: 1.2rem;
    }
    .navbar-toggler {
        padding: 0.25rem 0.3rem;
        font-size: 1.25rem;
    }
    .navbar-nav {
        flex-direction: column;
        margin-left: auto;
        margin-right: auto;
        margin-top: 1rem;
        text-align: center;
    }
    .navbar-nav .nav-item {
        margin-bottom: 0.5rem;
    }
}
</style>
