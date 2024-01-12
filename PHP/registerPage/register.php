<?php
session_write_close();
session_start();

if (isset($_POST["submit"])) {
    $pass1 = $_POST["Password"];
    $pass2 = $_POST["confirm_password"];
    $email = $_POST["email"];
    $username = $_POST["username"];

    if ($pass1 == $pass2) {
        require_once '../dbConnection/connectDB.php';
        register_user($conn, $pass1, $email, $username);
    }
}
function register_user($conn, $pass1, $email, $username)
{
    $sql = "SELECT user_name , email 
    FROM user 
    WHERE user_name = '$username' OR email = '$email'";

    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        header("Location:../../html/registerPage/register.php?Already_Have_An_Account=true");
        exit();
    } else {
        $sql = "SELECT COUNT(user_name) AS row_count FROM user";
        $result = $conn->query($sql);
        if ($result) {
            $row = $result->fetch_assoc();
            $user_count = $row["row_count"];
            $nextUserId = sprintf('U%05d', $user_count + 1);
            $sql = "INSERT INTO user (user_ID, user_name, password, email) 
                    VALUES ('$nextUserId','$username','$pass1','$email')";
            if ($conn->query($sql)) {
                $_SESSION['username'] = $username;
                header('Location:../../html/HomePage/homepage.php');
            }
        }
    }
}

?>