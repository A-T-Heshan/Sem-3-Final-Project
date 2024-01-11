<?php
session_write_close();
session_start();


if (isset($_SESSION["username"])) {
    header("Location:../Homepage/homepage.php");
    session_write_close();
} else {
    include_once "../Base/header.php";
    echo '
    <title>Login</title>
<link rel="stylesheet" href="../../css/loginPage/loginpage.css">

    <div class="container">
        <div class="leftSide">
            <form action="../../PHP/loginPage/login.php" method="post">
                <div class="formContent">
                    <h1>Login</h1>
                    <input type="text" placeholder="username / Email" name="username" required>
                    <input type="password" placeholder="password" name="password" required><br><br>
                    <label id="loginMessage"></label><br>
                    <button id="submitButton" type="submit" name="submit">Login</button>
                    ';
                    ?>
                    <?php
                    if (isset($_GET["Invalid_userAccount"])) {
                        echo '
                        <style>
                        #loginMessage{
                            color: red;
                            font-weight: bold;
                        }
                        </style>
                        <script>document.getElementById("loginMessage").innerText = "Invalid login...";</script>';
                    }
                    echo'
                </div>
            </form>
        </div>
        <div class="rightSide">
            <img src="../../images/loginPage/login.jpg" alt="">
        </div>
    </div>
    
    </body>
    
    </html>';
    include_once "../Base/footer.php";
    session_write_close();
}
session_write_close();

?>