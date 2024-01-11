<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../../css/Base/base.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="header-class">
        <header>
            <center><label for="notification">Channel best Doctor</label></center>
        </header>
    </div>
    <div class="navigation-bar">
        <ul>
            <li><a href="../../html/HomePage/homepage.php">Home</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Donate</a></li>
            <li><a href="../contactUS/contactUs.php">Contact Us</a></li>


            <?php
            session_write_close();
            session_start();
            if ((isset($_SESSION["username"]))) {
                $username = $_SESSION["username"];
                echo '<li style="float: right; font-size: 12px;"><a href="#account" id="right-side-buttons" style="width:80px">' . $username . '</a></li>';

            } else {
                echo '<li style="float: right; font-size: 12px;"><a href="../loginPage/login.php" id="right-side-buttons" style="width:80px">Login</a></li>';
                echo '<li style="float: right; font-size: 12px;"><a href="../registerPage/Register.php" id="right-side-buttons" style="width:80px">Register</a></li>';
            }
            session_write_close();
            ?>


            <li style="float: right; font-size: 12px;">
                <a href="#helpcenter" id="right-side-buttons"> Help Center</a>
            </li>
        </ul>
    </div>
    <div class="second-header">
        <center><label for="notification">
                <h3>Channel best Doctor</h3>
            </label></center>
    </div>