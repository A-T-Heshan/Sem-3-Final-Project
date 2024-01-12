<?php
session_write_close();
session_start();

if (isset($_POST["submit"])) {
    $userName = $_POST["username"];
    $password = $_POST["password"];
    require_once '../dbConnection/connectDB.php';
    if (strpos($userName,'@') && strpos($userName,'.')) {
        $userName = strtolower($userName);
    }
    loginUser($conn, $userName, $password);
} else {
    header('Location:../../html/loginPage/login.php');
    exit();
}

function loginUser($conn, $userName, $password)
{
    $sql = "SELECT user_name,email
    FROM user
    WHERE (('$userName' = user_name OR '$userName' = email) AND '$password' = password)";

    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $_SESSION["username"] = $row["user_name"];
            header("Location:../../html/HomePage/homepage.php");
            exit();
        }
    } else {
        header("Location:../../html/loginPage/login.php?Invalid_userAccount=true");
        exit();
    }
}
?>