<?php
    $servername = "localhost";
    $dbusername = "root1";
    $dbpassword = "ITRyd@RzrYq1pA-4";
    $dbname = "petcaresystemdb";

    $conn = mysqli_connect($servername,$dbusername,$dbpassword,$dbname);

    if (!$conn) {
        die("Connection failed : ". mysqli_connect_error());
    }else{
        header('Loaction:../../html/loginPage/login.php?db-connect-error');
    }
?>