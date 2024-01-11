<?php
session_write_close();
    session_start();
    session_destroy();
    header("Location:../loginPage/login.php");
?>