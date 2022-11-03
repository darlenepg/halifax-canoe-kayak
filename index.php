<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Skills for Hire project.">
    <title>Halifax Canoe and Kayak</title>
    <link rel="stylesheet" href="assets/css/main.css">
</head>

<body>   
    <div class="container" id="myHeader">
        <div class="logo">
            <a href="#"><img src="assets/images/paddle-white.png" alt="logo"></a>
        </div>
        <div class="navbar">
            <div class="icon-bar" onclick="Show()">
             <i></i>
                <i></i>
                <i></i>
            </div>
    
            <ul id="nav-lists">
             <li class="close"><span onclick="Hide()">×</span></li>
                <li><a href="index.php">Home</a></li>
                <li><a href="book.php">Book Trip</a></li>
                <li><a href="admin-login.php">Admin Login</a></li>
            </ul>
        </div>
    </div>

 <!-- Main -->
 <main>
    <div class="hero-image">
      <div class="hero-txt-btn">
        <h1 class="hero-text">Come Experience Canada!</h1>
      </div>
    </div>
  </main>
  <!-- Main -->

  <!-- Section -->
  <section class="main">
    <div>
      <h2 class="brand">Upcoming Adventures</h2>
    </div>

   
  <!-- Here is the added adventures from add-confirm-->
<div class="adventures-list"> 
<?php
 
 include_once 'connection.php';

 $query = "SELECT * FROM adventures";
 
 
 if ($result = $con->query($query)) {
 
     while ($row = $result->fetch_assoc()) {
         $id = $row["id"];
         $heading = $row["heading"];
         $tripDate = $row["tripDate"];
         $duration = $row["duration"];
         $summary = $row["summary"];
     
          echo . $id . '<br/>';
         echo '<h1>'. $heading . '</h1> <br/>';
         echo "<b> Date: </b>" . $tripDate .'<br/> <br/>';
         echo "<b>Duration: </b>" . $duration . ' days <br/> <br/>';
         echo "<b>Summary </b><br/>" . $summary .'<br/> <br/>';
        
     }
 
 /*freeresultset*/
 $result->free();
 }
 
 ?>
 </div>
 </section>
<!-- Added Adevntures --> 
<!-- End Section -->

   
<!-- Site footer -->
<footer>
<div class="footer-content">
  <h3>Halifax Canoe and Kayak</h3>
  <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Explicabo in, impedit quod dicta est facilis consectetur 
    laborum eius vitae voluptate asperiores, vel ipsa laboriosam odit esse beatae nesciunt architecto deserunt, dipisicing elit. 
    Explicabo in, impedit quod dicta est facilis consectetur.</p>
  
  <div class="footer-bottom">
    <p>copyright &copy;2021 <a href="index.php">Halifax Canoe and Kayak</a>  </p>
    <ul class="socials">
      <li><a href="https://www.facebook.com/"><img src="assets/images/facebook.svg"></a></li>
      <li><a href="https://www.twitter.com/"><img src="assets/images/twitter.svg"></a></li>
      <li><a href="https://www.instagram.com/"><img src="assets/images/instagram.svg"></a></li>
    </ul>
  </div>
  <div class="footer-menu">
    <ul class="f-menu">
      <li><a href="index.php">Home</a></li>
      <li><a href="book.php">Book Trip</a></li>
      <li><a href="admin-login.php">Admin Login</a></li>
    </ul>
  </div>
</div>
</footer>
<!-- End Footer -->

</body>
<script src="assets/js/main.js"></script>
</html>
