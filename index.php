<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link rel="stylesheet" href="style.css">
    
    <link rel="icon" href="favicon.ico" type="image/icon type">

    

</head>
<body>



<?php
require('db.php');
session_start();
// If form submitted, insert values into the database.
if (isset($_POST['username'])){
        // removes backslashes
	$username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
	$username = mysqli_real_escape_string($con,$username);
	$password = stripslashes($_REQUEST['password']);
	$password = mysqli_real_escape_string($con,$password);
	//Checking is user existing in the database or not
        $query = "SELECT * FROM `users` WHERE username='$username'
and password='".md5($password)."'";
	$result = mysqli_query($con,$query) or die(mysql_error());
	$rows = mysqli_num_rows($result);
        if($rows==1){
	    $_SESSION['username'] = $username;
            // Redirect user to index.php
	    header("Location: main.php");
         }else{
            echo "<div class='login' class='row'>
            <br><br>
<h3 class='heading'>Username/password is incorrect.</h3>
<br><p class='heading'>Click here to <a href='index.php'>Login</a><p></div>";
       }
    }else{
?>
<br>
<div  class="login" id="login">
<div class="form">
    <br>

<h1 class="heading"><span>login</span></h1>
<div class="row">
    <br>
<form action="" method="post" name="login">
<input type="text" name="username" placeholder="Username" class="box" required />
<input type="password" name="password" placeholder="Password" class="box" required />
<br><br>
<input name="submit" type="submit" value="Login" class="btn"/>
<br><br>


<p class="text">Not registered yet? <a href='registration.php'>Register Here</a></p>
<br><br>
</form>
</div>
    </div>
<?php } ?>


</body>
</html>