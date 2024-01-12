
    <script>
        
        function redi(){
             
                    document.write("dsfsdf");
            
        }
    </script>

<div class="container">
    <div class="leftSide">
        <form onsubmit="redi()">
            <div class="formContent">
                <h1>Register</h1>
                <input type="email" placeholder="Email" name="email" required>
                <input type="text" placeholder="Username" name="username" required><br>
                <input type="password" placeholder="Password *[A-Z] [a-z] [0-9] more than 8 digits" name="Password"
                    id="password" onkeyup="" required><br>
                <input type="password" placeholder="Confirm Password" name="confirm password" id="password_repeat"
                    onkeyup="" required><br>
                <label style="color: red;font-size: 10px;font-weight:bold" for="error_msg" id="error_msg"></label><br>
                <button id="submitButton" type="submit" name = "submit" style="margin-top:10px" on>Register Now</button>
            </div>
        </form>
    </div>
    <div class="rightSide">
        <img src="../../images/loginPage/login.jpg" alt="" id="nn">
    </div>
 </div>