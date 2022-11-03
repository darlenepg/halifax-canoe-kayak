<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Skills for Hire project.">
    <title>Halifax Canoe and Kayak</title>
    <link rel="stylesheet" href="assets/css/main.css">
    <style>
      .book-form {
    max-width: 50%;
    margin: 10px auto;
    padding: 20px 20px;
    background: #f4f7f8;
    border-radius: 8px;
 
}

.form-label{
    color: #3f4f94;
    font-size: 20px;
    padding: 20px;
    line-height: 2;
    
}

.register-btn {
   
        padding: 19px 39px 18px 39px;
        color: #FFF;
        background-color: #3f4f94;
        font-size: 18px;
        text-align: center;
        font-style: normal;
        border-radius: 5px;
        width: 100%;
        border: 1px solid #3f4f94;
        border-width: 1px 1px 3px;
        box-shadow: 0 -1px 0 rgba(255,255,255,0.1) inset;
        margin-bottom: 10px;
      }



input[type=text], input[type=email], input[type=date], select{
    background: rgba(255,255,255,0.1);
    border: none;
    font-size: 16px;
    height: auto;
    margin: 0;
    outline: 0;
    padding: 15px;
    width: 100%;
    background-color: #e8eeef;
    color: #3f4f94;
    box-shadow: 0 1px 0 rgba(0,0,0,0.03) inset;
    margin-bottom: 30px;
}




.options{
    font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    font-weight: 500;
    font-size: 15px;
    padding: 6px;
    height: 32px;
    border-radius: 2px;
}

.ty-text {
    max-width: 100%;
    margin: 10px auto;
    padding: 20px 20px;
    background: #f4f7f8;
    border-radius: 8px;
    text-align: center;
    font-size: 20px;
    line-height: 2;
    color: #3f4f94;
    font-weight:bold;
}



    </style>
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
        <h2 class="brand">Book Your Trip</h2>
        </div>

        <div class="book-form">
            <form name="booking" action="thankyou.php" method="POST" autocomplete="off">

                <label for="name" class="form-label">Name</label>
                <input type="text" name = "name" id="name" required> </br>

                <label for="email" class="form-label">Email</label>
                <input type="email" name ="email" id="email" required> </br>

                <label for="location" class="form-label">Location</label>
                <select class="options" name="location" id="location" required>
                    <option value="none" selected disabled hidden>Please select</option>
                    <option value="Halifax">Halifax</option>
                    <option value="Sydney">Sydney</option>
                    <option value="Yarmouth">Yarmouth</option>
                    <option value="Amherst">Amherst</option>
                    <option value="Liverpool">Liverpool</option>
                    <option value="Shelburne">Shelburne</option>
                </select> </br>

                <label for="date" class="form-label">Date</label> 
                <input class="options" type="date" name="date" id="date" min="2022-11-01" required>  </br>     
    
                <button class="register-btn">Register</button>
            </form>
        </div>
    </section>
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























