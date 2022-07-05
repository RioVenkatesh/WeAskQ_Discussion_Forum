<!doctype html>
<head>
	<title>
		homepage
	</title>
<link rel="stylesheet" type="text/css" href="css/header.css"> 	 
<link rel="stylesheet" type="text/css" href="css/nvgbar.css">	
</head>
<body>
<div class="bg-img">
<?php
include 'connect.php';
include 'nvgbar.php';
include 'footer.php';
?>
<div class="title">
Welcome To<br>
WeAskQ Forum</div>

<div class="banner">
<div style="font-size:30px;font-weight:bold;text-shadow:1px 2px 2px white">
Latest Posts</div>
<br>
<?php

include 'connect.php';
$query=mysqli_query($con,"SELECT * FROM topics ORDER BY topic_date DESC LIMIT 8");
while($row = mysqli_fetch_assoc($query))
{
  $topic=$row['topic_subject'];
  $id=$row['topic_id'];
  $cat=$row['topic_cat'];
  echo "<div class='bannerhov'>";
  echo "<a href='topic.php?posts_topic=$id'  style='text-decoration:none; color:white; font-size:20px; font-weight:bold;'>
   ".$topic." </a><br><div style='color:white; font-size:12px;'>in the Topic $cat<br></div>";
   echo "<br></div>";
}

?>
</div>
<div class="linepost">
<div style="font-color:black;font-size:30px;font-weight:bold;text-shadow:1px 2px 2px white">Users Feedback</div><br>
<marquee behavior="scroll" direction="up" onmouseover="this.stop();" onmouseout="this.start();"> 
<?php

include 'connect.php';
$query=mysqli_query($con,"SELECT * FROM feedback ORDER BY feedback_id DESC LIMIT 10");
while($row = mysqli_fetch_assoc($query))
{
  $topic=$row['feedback_descr'];
  echo "<p style='text-align:center;color:white; font-size:15px;'>
   ".$topic."</p>";
}
?>
</marquee>
</div>
</div>
</body>

