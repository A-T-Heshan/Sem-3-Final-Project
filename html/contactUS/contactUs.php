
<?php
include_once"../Base/header.php";
?>
    <link rel="stylesheet" href="../../css/contactUS/contatctUs.css"
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <style>
        button:hover{
            cursor: pointer;
            background-color: black;
            color: white;
            box-shadow: 0px 5px 5px #4BE351;
            transform: translateY(-5px); 
            border-bottom: 2px solid red;
            border-left: 2px solid red;
            border-right: 2px solid red;
            transition: 0.5s;
        }
        input:hover,textarea:hover{
            background-color: white;  
            transition: .3s;
            box-shadow: 2px 2px 2px rgba(0, 0, 0, 1); 
        }
        input,textarea{
            box-shadow: 1px 1px 1px rgba(0, 0, 0, 1); 
        }
    </style>

    <form action="" method="get">
        <h2>Contact Us</h2>
        <h4 style="margin-top:20px">Any questions or remarks? Just write us a message!</h4>
        <h4 style="margin-top:20px">Email :</h4>
        <input  style="margin-top:20px;text-align:left;padding-left:10px;font-size:14px;" type="email" placeholder="Enter a valid email address" name="email" required>
        <h4 style="margin-top:20px">Name :</h4>
        <input  style="margin-top:20px;font-size:14px;text-align:left;padding-left:10px; " type="text" placeholder="Enter your name" name="name" required>
        <h4 style="margin-top:20px">Massege :</h4>
        <textarea  style="margin-top:20px;padding-top:7px;padding-left:7px;font-size:14px; " name="address" rows="8" cols="50" required></textarea>
        <br><br><br>
        <button type="submit" style="height:40px;width:110px;">Submit</button>
    </form>

<?php
include_once"../Base/footer.php";
?>