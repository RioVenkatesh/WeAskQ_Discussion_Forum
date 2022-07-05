<html>
<head>
<title>Complete Discussion</title>
<link rel="stylesheet" type="text/css" href="css/posts.css">
</head>
<body>
<div class="bgimg2">
<br><br><br>
<?php
include 'connect.php';
include 'nvgbar.php';
$topicid=$_GET['posts_topic'];
$query = mysqli_query($con,"SELECT * FROM topics WHERE topic_id='$topicid'");
if(!$query)
{
	echo 'error';
}
else
{
	while($row = mysqli_fetch_assoc($query))
	{
		$name=$row['topic_subject'];
    $descr=$row['topic_descr'];
    $date=$row['topic_date'];
    $date2=date('d-m-Y', strtotime($date));
    $cat=$row['topic_cat'];
    $by=$row['topic_by'];
    $query4=mysqli_query($con,"SELECT username FROM users WHERE id='$by'");
    $row4= mysqli_fetch_assoc($query4);
    $username=$row4['username'];
		echo "<div style='width:51.5%; margin-left:15px'><h1 style='text-align:left; color:black; font-size: 40px;'> &nbsp&nbsp$name</h1>
  <br>
  <p style='width:50%; font-size:20px; font-weight:bold;'>&nbsp&nbsp&nbsp $descr</p>
  <br><br>
  <p style='font-size:15px; font-weight:bold;'>&nbsp&nbsp&nbsp &nbspAsked by:&nbsp</p> <p style='font-size:15px; font-weight:bold; color:blue;'>$username</p>&nbsp&nbsp&nbsp&nbsp <p style='font-size:15px; font-weight:bold;'>On:&nbsp</p> <p style='font-size:15px; font-weight:bold; color:blue;'>$date2</p>
  <p style='font-size:15px; font-weight:bold; font-color:blue;'> &nbsp&nbsp&nbsp&nbsp&nbspIn:&nbsp</p><p style='font-size:15px; font-weight:bold; color:blue;'>$cat</p></div>";
	}
}
$query2 = mysqli_query($con,"SELECT * FROM posts WHERE posts_topic='$topicid' ORDER BY posts_date ASC");
$numrows = mysqli_num_rows($query2);
echo"<br><hr style='width:60%; float:left; margin-left:0px; border: 3px solid black;border-radius: 5px;'>";
echo "<br><p style='font-size:21px; font-weight:bold; color:black;'>&nbsp&nbsp&nbsp$numrows Replies</p><br><br>";
if(!$query2)
{
	echo 'error';
}
else
{
	while($row2= mysqli_fetch_assoc($query2))
	{
    echo"<hr style='width:50%; float:left; margin-left:0px; border: 2px dashed black;border-radius: 2px;'><br>";
		$content=$row2['posts_content'];
		$date=$row2['posts_date'];
		$by=$row2['posts_by'];

		$query3=mysqli_query($con,"SELECT username FROM users WHERE id='$by'");
		$row3= mysqli_fetch_assoc($query3);
		$name=$row3['username'];
  echo "<p style='background-color:white; color:darkblue; font-size:22px; font-weight:bold;margin-left:15px;text-decoration:none;'> $name</p><br><br>";
		echo "<div class='msg'> $content</div><br><p style='color:darkblue; font-size:15px; margin-left:15px;text-decoration:none;'> replied on:</p> ";
		 echo date('d-m-Y', strtotime($date));
      echo "<br><br>";
     
	}
}
?>

<hr style='width:60%; float:left; margin-left:0px; border: 3px solid black;border-radius: 5px;'><br>
<p style='font-size:20px; font-weight:bold; color:blue; margin-left:15px;'>Know the answer:</p>
<form method="post" action="reply.php?id1=<?php echo $topicid; ?>">
  <fieldset class="account-info">
      <label style="color:green">
    Reply
    </label>
    <textarea rows="7" cols="90" name="reply" class="textarea" required>
</textarea>
<br>
  </fieldset>
  <fieldset class="account-action">
    <input class="btn" type="submit" name="submit" value="Reply" >
  </fieldset>
</form>
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
</div>
</div>
</body>
</html>