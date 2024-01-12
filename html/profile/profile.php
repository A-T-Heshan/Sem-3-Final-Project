
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="../Base/logout.php" method="post">
        <button type="submit" name="logout">logout</button>
    </form>
    <form action="../Base/adminTogle.php" method="post">
        <button type="submit" name="togle">
        <?php
        session_write_close();
            session_start();
            
            ?>
        </button>
    </form>
</body>
</html>