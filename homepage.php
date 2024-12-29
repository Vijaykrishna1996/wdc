<?php
session_start();
include("connect.php");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Karnataka State Women's Development Corporation</title>
    <link rel="stylesheet" href="home.css">

</head>
</head>
<body>
     <div class="KSWDC">
        <h1> Karnataka State Womens Development Corporation <h1>
            <h4>Government of Karnataka Undertaking</h4>
        <h3> 6th Floor, Shopping Complex, 4th Block, Jayanagar, Bangalore-560011 <h3>
</div>
    <div class="navbar">
        <p><a href="home.html">Home</a></p>
        <p><a href="about.html">About</a></p>
        <p><a href="guidelines.html">Guidelines</a></p>
        <p><a href="actionplan.html">Action Plan</a></p>
        <p><a href="progress.html">Progress</a></p>
        <p><a href="contact.html">Contact Us</a></p>
        <li><a href="login.html" class="login-btn">Login Page</a></li>
    </div>
    <div class="slider">
        <div class="slides">
            <div class="slide">
                <img src="https://kswdc.karnataka.gov.in/uploads/media_to_upload1640689046.jpg" alt="Slide 1">
            </div>
        </div>
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>

    <script>
        let slideIndex = 0;
        showSlides();

        function plusSlides(n) {
            slideIndex += n;
            showSlides();
        }

        function showSlides() {
            let slides = document.querySelectorAll(".slide");
            if (slideIndex >= slides.length) {
                slideIndex = 0;
            }
            if (slideIndex < 0) {
                slideIndex = slides.length - 1;
            }
            for (let i = 0; i < slides.length; i++) {
                slides[i].style.transform = `translateX(-${slideIndex * 100}%)`;
            }
        }
    </script>
    <div class="ticker-wrapper">
        <div class="ticker">
            <div class="ticker-item">
                <div class="bn-label arrow_box_right">Latest News</div>
                <p><i class="fa fa-hand-o-right" aria-hidden="true"></i> <p> 2024-25 Schemes Online applications are invited through Seva sindhu Portal</p>
            </div>
            <!-- Repeat ticker-item for more news items -->

        </div>
    </div>
         



       <?php 
       if(isset($_SESSION['email'])){
        $email=$_SESSION['email'];
        $query=mysqli_query($conn, "SELECT users.* FROM `users` WHERE users.email='$email'");
        while($row=mysqli_fetch_array($query)){
            echo $row['firstName'].' '.$row['lastName'];
        }
       }
       ?>
       :)
      </p>
      <a href="logout.php">Logout</a>
    </div>
</body>
</html>