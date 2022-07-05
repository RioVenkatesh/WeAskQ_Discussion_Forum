<!DOCTYPE html>
<html>
<head>
<title>
profile
</title>
<link rel="stylesheet" type="text/css" href="css/header.css"> 
<head>
<body>
<div class="bg-imgp">
<?php
include 'connect.php';
include 'nvgbar.php';
$id=$_SESSION['id'];
$query = mysqli_query($con,"SELECT * FROM users WHERE id='$id'");
while($row = mysqli_fetch_assoc($query))
	{
		$name=$row['name'];
    	$email=$row['email'];
    	$username=$row['username'];
    	$contact=$row['contact'];
    	$gender=$row['gender'];
	}

?>

<a href="profile_update.php"><img src="icons/usericon.webp" alt="Edit"></a>
<br><br><br>
<div class="username">
<?php echo $name; ?></div>
<div class="userdetails">
Username:
<?php echo $username; ?><br>

Contact No.:
<?php echo $contact; ?><br>

Email:
<?php echo $email; ?><br>

Gender:
<?php echo $gender; ?><br>
</div>
<div class="bannerprofile">
<h1 style="color:black; text-shadow:2px 2px white; font-size:25px;" >Discussions You have started</h1>
<?php
include 'connect.php';
	$id=$_SESSION['id'];

$query=mysqli_query($con,"SELECT * FROM topics WHERE topic_by='$id' ORDER BY topic_id DESC");
while($row = mysqli_fetch_assoc($query))
{
  $topic=$row['topic_subject'];
  $id1=$row['topic_id'];
   echo "<br><p ><a href='topic.php?posts_topic=$id1' style='text-decoration:none; color:white; font-size:15px; font-weight:bold;'>
   ".$topic." </a></p>";
}
?>
</div>
</div>
</body>
</html>

