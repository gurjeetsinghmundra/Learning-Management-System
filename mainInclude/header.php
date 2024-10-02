<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

<!--Bootstrap css-->     
    <link rel="stylesheet" href="css/bootstrap.min.css">
<!--Font css-->
    <link rel="stylesheet" href="css/all.min.css">
<!-- Google Font -->
<link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@700&display=swap" rel="stylesheet">


<!-- Student Testimonial Owl Slider CSS -->

<link rel="stylesheet" type="text/css" href="css/owl.min.css">
<link rel="stylesheet" type="text/css" href="css/owl.theme.min.css">
<link rel="stylesheet" type="text/css" href="css/testyslider.css">


<!--Custom CSS -->
<link rel="stylesheet" href="css/style.css">
    
    <title>Gn Khalsa</title>
</head>
<body>


<!--Navigation-->
<nav class="navbar navbar-expand-sm navbar-dark  pl-5 fixed-top"> 
<a class="navbar-brand" href="index.php">GnKhalsa</a>
<span class="navbar-text">Learn and Implement</span>
<button class="navbar-toggler" type="button" 
data-toggle="collapse" data-target="#navbarNavAltMarkup"
aria-controls="navbarNavAltMarkup" aria-expanded="false"
aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
<ul class="navbar-nav custom-nav pl-5">
<li class="nav-item custom-nav-item"><a href="index.php" class="nav-link">Home</a></li>
<li class="nav-item custom-nav-item"><a href="courses.php" class="nav-link">Courses</a></li>
<li class="nav-item custom-nav-item"><a href="paymentstatus.php" class="nav-link">Payment Status</a></li>
<?php 
              session_start();   
              if (isset($_SESSION['is_login'])){
                echo '<li class="nav-item custom-nav-item"><a href="student/studentProfile.php" class="nav-link">My Profile</a></li> <li class="nav-item custom-nav-item"><a href="logout.php" class="nav-link">Logout</a></li>';
              } else {
                echo '<li class="nav-item custom-nav-item"><a href="#login" class="nav-link" data-toggle="modal" data-target="#stuLoginModalCenter">Login</a></li> <li class="nav-item custom-nav-item"><a href="#signup" class="nav-link" data-toggle="modal" data-target="#stuRegModalCenter">Signup</a></li>';
              }
          ?> 
<li class="nav-item custom-nav-item"><a href="#Feedback" class="nav-link">Feedback</a></li>
<li class="nav-item custom-nav-item"><a href="#Contact" class="nav-link">Contact</a></li>
</ul>
</div>
</nav>
