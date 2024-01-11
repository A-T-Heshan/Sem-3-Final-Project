
    <title>Login</title>
    <link rel="stylesheet" href="../../css/registerPage/Register.css">


    <?php
    include_once "../Base/header.php";
    ?>
    <div class="container" >
        <div class="leftSide">
            <form action="" method="post" >
                <div class="formContent">
                    <h1>Register</h1>
                    <input type="email" placeholder="Email" name="email" required>
                    <input type="text" placeholder="Username" name="username" required><br>
                    <input type="password" placeholder="Password" name="Password" required><br>
                    <input type="password" placeholder="Confirm Password" name="confirm password" required><br>
                    <button id="submitButton" type="submit">Register Now</button>
                </div>
            </form>
        </div>
        <div class="rightSide">
            <img src="../../images/loginPage/login.jpg" alt="" id="nn">
        </div>
    </div>

    <?php
        include_once "../Base/footer.php";
    ?>
</body>

</html>
