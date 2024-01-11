
<title>Login</title>
    <link rel="stylesheet" href="../../css/PetRegisterPage/petRegister.css">


    <?php
    include_once "../Base/headerWhileLogin.php";
    ?>
    <div class="container" >
        <div class="leftSide">
            <form action="">
                <div class="formContent">
                    <h1>Register Your Dog</h1>
                    <input type="text" class="info" placeholder="PetName" name="petname" required>
                    <input type="date" class="info" placeholder="Date of Birth" name="date" required>
                  
<br><br>
<div class="gender" style="">
                    Gender :    
	<input type="radio" name="gender" value="Male" required style="margin-left: 20px;">Male
	<input type="radio" name="gender" value="Female" style="margin-left: 20px;">Female<br><br>
	
</div>      
                <br>
                    Upload your dog's image  <br><br>
                    <input type="file"  name="image" style="color: white;" ><br>
                    <button id="submitButton" type="submit">Register Now</button>
                </div>
            </form>
        </div>
        <div class="rightSide">
            <img src="../../images/loginPage/login.jpg" class="photo" alt="">
        </div>
    </div>

    <?php
    include_once "../Base/footer.php";
    ?>
</body>

</html>
