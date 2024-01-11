
<?php
include_once"../Base/header.php";
?>
    <link rel="stylesheet" href="../../css/contactUS/contatctUs.css"
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>


    <form>
        <h2>Contact Us</h2>
        <h4>Any questions or remarks? Just write us a message!</h4>
        <h4>Email :</h4>
        <input type="email" placeholder="Enter a valid email address" name="email">
        <h4>Name :</h4>
        <input type="text" placeholder="Enter your name" name="name">
        <h4>Massege :</h4>
        <textarea name="address" rows="8" cols="50" required></textarea>
        <br><br><br>
        <button>Submit</button>
    </form>

<?php
include_once"../Base/footer.php";
?>