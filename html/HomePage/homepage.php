<?php
include_once "../Base/header.php";
?>
<link rel="stylesheet" href="../../css/HomePage/homepage.css">
<h2 id="services-header">Services</h2>
<div class="flex-container-1">
    <div class="flex-left-1">
        <img src="../../images/HomePage/vaccination.png" alt="" width="100%">
    </div>
    <div class="flex-right-1">
        <h3 id="header-1"><span>Vaccination</span></h3>
        <h4 id="vaccination-info-1">"Effortlessly keep
            track of your pet's vaccinations with our user-friendly tracking system.
            Receive automated reminders for upcoming vaccinations, ensuring your pet stays healthy and up-to-date
            with their shots.
            Access a comprehensive history of your pet's vaccinations at your fingertips."</h4>


    </div>
</div>

<div class="flex-container-2">
    <div class="flex-left-2">
        <h3 id="header-2"> <span>Channel a Doctor</span> </h3>
        <h4 id="vaccination-info-2">"Discover the best veterinarians in your area through our comprehensive directory.
            Read reviews, view ratings, and find the perfect healthcare provider for your pet.
            Schedule appointments directly through our platform, making it easy to prioritize your pet's well-being."
        </h4>
    </div>
    <div class="flex-right-2">
        <img src="../../images/HomePage/channel-doctor.png" alt="" width="100%">
    </div>
</div>
<form action="../Base/logout.php" method="post">
    <button type="submit" name="logout" >logout</button>
</form>
<?php
include_once "../Base/footer.php";
?>