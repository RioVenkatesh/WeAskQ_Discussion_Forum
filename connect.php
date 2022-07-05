<?php
//connect.php
$server = 'localhost';
$username   = 'root';
$password   = '';
$database   = 'veasqforum';
$con=mysqli_connect($server, $username,  $password);
if(!($con))
{
    exit('Error: could not establish database connection');
    echo "error";
}
if(!mysqli_select_db($con,$database))
{
    exit('Error: could not select the database');
    echo "error";
}
?>