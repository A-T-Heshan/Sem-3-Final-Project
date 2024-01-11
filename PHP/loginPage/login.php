<?php
session_write_close();
session_start();

if (isset($_POST["submit"])) {
    $userName = $_POST["username"];
    $password = $_POST["password"];
    require_once '../dbConnection/connectDB.php';

    loginUser($conn, $userName, $password);
} else {
    header('Location:../../html/loginPage/login.php');
    exit();
}

function loginUser($conn, $userName, $password)
{
    $sql = "SELECT userName
    FROM user_accounts
    WHERE ('$userName' = userName && '$password' = password)";

    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $_SESSION["username"] = $row["userName"];
            header("Location:../../html/HomePage/homepage.php");
            echo '<script>
                    document.getElementById("loginMessage").innerText = "Login successful...";
                 </script>';
            exit();
        }
    } else {
        header("Location:../../html/loginPage/login.php?Invalid_userAccount=true");
        exit();
    }
}
?>