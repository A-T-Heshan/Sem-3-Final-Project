
<title>Login</title>
<div class="navi" >
<?php 
        include_once "../Base/header.php";
    ?>
</div>
<link rel="stylesheet" href="../../css/loginPage/login.css">


<body>
    

    <table >
        <tr>
            <th> <form action="#">
                <h1>Login</h1>
                <div class="in">
                   
                <input type="email" name="email" placeholder="Username">
                <span class="icon">
                    <img src="../../images/loginPage/name.png" alt="Email">
                </span>
            </div><br>
            <div class="in">
                <input type="password" name="password" placeholder="Password">
                <span class="icon">
                    <img src="../../images/loginPage/pass.png" alt="password">
                </span>
            </div>
                <br><br><br><br>
                <button>Login Now</button>
                </form>
            </th>
            <th> <img 1 src="../../images/loginPage/login.jpg" alt="Lovley dog"></th>
        </tr>
    </table>  
    <?php
    include_once "../Base/footer.php";
    ?>
