<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        h3#headline {
            width: 100px;
            height: 50px;
            font-weight: bold;
            position: relative;
            display: inline; 
            animation: mymove 10s linear 0s infinite alternate;
        }
        .second-header:hover{
            cursor: default;
        }
        .second-header{
            padding-top: 5px;
            padding-bottom: 0px;
        }

        @keyframes mymove {
            from {
                left: 4%;
            }

            to {
                left: -4%;
            }
        }
    </style>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../../css/Base/templateHeaderFooter.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>

<body>
    <div class="header-class">
    </div>
    <div class="navigation-bar">
        <ul>
            <li><a href="../../html/HomePage/homepage.php">Home</a></li>
            <li><a href="#">Donate</a></li>
            <li><a href="../contactUS/contactUs.php">Contact Us</a></li>


            <?php
            session_write_close();
            session_start();
            if ((isset($_SESSION["username"]))) {
                $username = $_SESSION["username"];
                echo '<li style="float: right; font-size: 12px;"><a href="../profile/profile.php" id="right-side-buttons" style="width:80px">' . $username . '</a></li>';
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
        <center>
            <h3 id="headline"></h3>
        </center>
        <script>
            var text = ['Channel the best doctor', 'Track your dog vaccination', 'Buy best meals for your dog'];
            var index = 0;

            function printText() {
                document.getElementById('headline').innerHTML = text[index];
                if (index == text.length - 1) {
                    index = -1;
                }
                index++; 
                setTimeout(printText, 10000);
            }

            printText();
        </script>
    </div>