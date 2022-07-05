<!doctype html>
<html>
<head>
	<title>
		Menu
	</title>
<link rel="stylesheet" type="text/css" href="css/nvgbar.css">
</head>
<body>
<div class="container">
            <ul class="menu">
                <li><a href="index.php">Home</a></li>
                <li><a href="#">Category</a>
                    <ul class="submenu">
                        <li><a href="technology.php">Technology </a></li>
                        <li><a href="health.php">Health</a></li>
                        <li><a href="entertainment.php">Entertainment</a></li>
                        <li><a href="sports.php">Sports</a></li>
                    </ul>
                </li>
                <li><a  href="posts.php">Ask Doubt !!</a> </li>
                <li><a href="contact.php">Contact Us</a></li>
<li><?php

include 'connect.php';
session_start();
    if(isset($_SESSION['signed_in'])== true)
    {
        $name=$_SESSION['username'];
        echo "<a href='profile.php'>Hello ".$name." </a>";
    }
    else
    {
        echo '<a href="signin.php">LogIn</a>';
    }

?></li>
<li><?php
    if(isset($_SESSION['signed_in'])== true)
    {
        echo '<a href="signout.php">LogOut</a>';
    }
    else
    {
        echo '<a href="signup.php">SignUp</a>';
    }

?></li>

</div>
</body>
</html>