<?php
session_write_close();
session_start();

if (isset($_SESSION["username"])) {
    header("Location:../Homepage/homepage.php");
    session_write_close();
} else {
    include_once "../Base/header.php";
    ?>

    <title>Register</title>
    <link rel="stylesheet" href="../../css/registerPage/register.css">

    <?php
    include_once "../Base/header.php";
    ?>

    <script>
        function checkPassword() {
            var pass1 = document.getElementById("password").value;
            var pass2 = document.getElementById("password_repeat").value;
            var labelElement = document.getElementById("error_msg");
            labelElement.innerHTML = "";

            if (pass1 === pass2) {
                labelElement.innerHTML = "";
                return true;
            } else {
                labelElement.innerHTML = "Passwords don't match.";
                return false;
            }
        }

        function checkPasswordRequirements() {
            var password = document.getElementById("password").value;

            var minLength = 8;
            var hasUpperCase = /[A-Z]/.test(password);
            var hasLowerCase = /[a-z]/.test(password);
            var hasDigit = /\d/.test(password);

            var requirementsMet = password.length >= minLength && hasUpperCase && hasLowerCase && hasDigit;

            var requirementsDiv = document.getElementById("error_msg");
            requirementsDiv.innerHTML = "";

            if (!requirementsMet) {
                requirementsDiv.innerHTML = "Password should be like: Example: Abc12345.";
                return false;
            }else{
                return true;
            }
        }

        function validateForm() {
            var check1 = checkPassword();
            var check2 = checkPasswordRequirements();
            return (check1&&check2)
        }
    </script>

    <div class="container">
        <div class="leftSide">
            <form action="../../PHP/registerPage/register.php" method="post" onsubmit="return validateForm()">
                <div class="formContent">
                    <h1>Register</h1>
                    <input type="email" placeholder="Email" name="email" required>
                    <input type="text" placeholder="Username" name="username" required><br>
                    <input type="password" placeholder="Password *[A-Z] [a-z] [0-9] more than 8 digits" name="Password"
                        id="password" onkeyup="checkPasswordRequirements()" required><br>
                    <input type="password" placeholder="Confirm Password" name="confirm_password" id="password_repeat"
                        onkeyup="checkPassword()" required><br>
                    <label style="color: red;font-size: 10px;font-weight:bold" for="error_msg" id="error_msg"></label><br>
                    <button id="submitButton" type="submit" name="submit" style="margin-top:10px">Register Now</button>
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
<?php } ?>