<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link rel="stylesheet" href="style.css">
    
    <link rel="icon" href="image/favicon.ico" type="image/icon type">

    
</head>
<body>


<!-- <header class="header">
    <link rel="shortcut icon" href="image/favicon.ico" type="image/x-icon">

    <div id="menu-btn" class="fas fa-bars"></div>

    <a href="index.html" class="logo"> <span>Kacha</span>Stop </a>

    <nav class="navbar">
        <a href="index.html">home</a>
        <a href="index.html #vehicles">vehicles</a>
        <a href="index.html #spareparts">spare parts</a>
        <a href="index.html #reviews">review</a>
       <a href="index.html #contact">contact</a>
    
    </nav>

    <div id="login-btn">
        <button onclick="location.href='login.html'" class="btn">login</button>
        <i class="far fa-user"></i>
    </div>

</header> 
    
</div> -->


<!-- <!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Registration</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body> -->
<?php
require('db.php');
// If form submitted, insert values into the database.
if (isset($_REQUEST['username'])){
        // removes backslashes
	$username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
	$username = mysqli_real_escape_string($con,$username); 
	$email = stripslashes($_REQUEST['email']);
	$email = mysqli_real_escape_string($con,$email);
	$password = stripslashes($_REQUEST['password']);
	$password = mysqli_real_escape_string($con,$password);
	$trn_date = date("Y-m-d H:i:s");
        $query = "INSERT into `users` (username, password, email, trn_date)
VALUES ('$username', '".md5($password)."', '$email', '$trn_date')";
        $result = mysqli_query($con,$query);
        if($result){
            echo "<div class='row'>
<h3 class='heading'>You are registered successfully.</h3>
<br><p class='heading'>Click here to <a href='index.php'>Login</a><p></div>";
        }
    }else{
?>
<div class="login" id="login">
<div class="form">
<h1 class="heading">Registration</h1>
<div class="row">
<form name="registration" action="" method="post">
<input type="text" name="username" placeholder="Username" class="box" required />
<input type="email" name="email" placeholder="Email" class="box" required />
<input type="password" name="password" placeholder="Password" class="box" required />
<br>
<input type="submit" name="submit" value="Register" class="btn" />
<br>

<br><br>

<p class="text"> Already have an account <a href="index.php">login</a> </p>


</form>
</div>
<?php } ?>
</body>
</html>

<!-- <section class="login" id="login">

    <h1 class="heading"><span>Signup</span></h1>

    <div class="row">

    <form action="">
             <h3><strong>Create your account</strong></h3>
            <input type="text" placeholder="your name" name="username"  class="box"  required>
            <input type="password" placeholder="password" name="password"   class="box"  required >
             <input type="email" placeholder="email" name="email" name="email"  class="box"   > 
            <input type="phonenumber" placeholder="PhoneNo" name="contact" class="box"   > -->
<!-- 
<br>
            <input type="submit"  name="insert-btn" class="btn" value="Register">
            <br>
            <br>
            <p class="text"> Already have an account <a href="login.php">login</a> </p>
</form>
    </div>

</section> -->


<!-- 

<section class="footer" id="footer">

    <div class="box-container">

        <div class="box">
            <h3>our shops</h3>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> Aziz auto store </a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> khalid autos </a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> mehran autos </a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> sunrise auto spareparts </a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> ashraf autos </a>
        </div>

        <div class="box">
            <h3>quick links</h3>
            <a href="home.html"> <i class="fas fa-arrow-right"></i> home </a>
            <a href="vehicles.html"> <i class="fas fa-arrow-right"></i> vehicles </a>
            <a href="review.html"> <i class="fas fa-arrow-right"></i> reviews </a>
            <a href="contact.html"> <i class="fas fa-arrow-right"></i> contact </a>
            <a href="login.html"> <i class="fas fa-arrow-right"></i> login </a>
        </div>

        <div class="box">
            <h3>contact info</h3>
            <a href="#"> <i class="fas fa-phone"></i> 0322-9948363 </a>
            <a href="#"> <i class="fas fa-phone"></i> 0318-5204385 </a>
            <a href="#"> <i class="fas fa-envelope"></i> muhammed.bscs3971@iiu.edu.pk </a>
            <a href="#"> <i class="fas fa-envelope"></i> muhammed.bscs4076@iiu.edu.pk </a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> Rawalpindi, Pakistan - 43600 </a>
        </div>

    </div>

    <div class="credit"> created by: muhammad aown ali & muhammad usman karamat | all rights reserved </div>

</section> -->





 


</body>

</html>