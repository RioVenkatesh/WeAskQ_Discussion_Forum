<html>
<head>
    <title>Update Profile</title>
    <link rel="stylesheet" type="text/css" href="css/posts.css">
</head>

<body>
<div class="bg-imgp">
<?php
include 'nvgbar.php';
?>
<br><br><br>
<center>
<img src="icons/oops.png" width="20%" height="40%">
<br><br>
<h1>Edit Profile Again</h1>
<?php
include "connect.php";

$errors = array();
$username=$_POST['username'];
$id1=$_SESSION['id'];
$sql1=mysqli_query($con,"SELECT username FROM users WHERE id='$id1'");
$row=mysqli_fetch_array($sql1);
$username1=$row['username'];
if(isset($username))
{
    $sql=mysqli_query($con,"SELECT username FROM users WHERE username='$username'");
    if($sql)
    {
        $num_rows=mysqli_num_rows($sql);
    }


    if($num_rows >0 && ($username != $username1))
    {
        $errors[] = 'This username already exist.';
    }

    if(!ctype_alnum($_POST['username']))
    {
        $errors[] = 'The username can only contain letters and digits.';
    }
    if(strlen($_POST['username']) > 10)
    {
        $errors[] = 'The username cannot be longer than 10 characters.';
    }
}
else
{
    $errors[] = 'The username field must not be empty.';
}

if(!empty($errors))
{
    echo "<br><br><p style='font-size:34px; text-align:center; font-weight:bold;'>You have a problem while editing profile..</p>";
    foreach($errors as $key => $value)
    {
        echo '<br><p style="text-align:center; font-size:19px; font-weight:bold; color:white;">' . $value . '</p>';
    }
    echo '<br><p style="text-align:center; font-size:19px; font-weight:bold; font-decoration:none;"><a href="profile_update.php">Edit Profile again</a></p>';
}
else
{
    $name=$_POST['name'];
    $username=$_POST['username'];
    $email=$_POST['email'];
    $contact=$_POST['contact'];
    $id=$_SESSION['id'];
    $db=new PDO("mysql:host=localhost;dbname=veasqforum","root","");
    if($db)
    {
        $sql = "UPDATE users 
            SET name = :name, 
            username = :username, 
            email = :email,  
            contact = :contact  
            WHERE id = :id";
        $test = $db->prepare($sql);
        $test->bindValue(':name', $name, PDO::PARAM_STR);
        $test->bindValue(':username', $username, PDO::PARAM_STR);
        $test->bindValue(':email', $email, PDO::PARAM_STR);
        $test->bindValue(':contact', $contact, PDO::PARAM_STR);
        $test->bindValue(':id', $id, PDO::PARAM_STR);
        if($test->execute())
            header("location: profile.php");
        else
            echo 'Something went wrong while registering. Please try again later.1 ';
        print_r($test->errorInfo());
    }
    else
    {
        echo 'Something went wrong while registering. Please try again later.2';

    }

}
?>
</div>
</body>
</html>

