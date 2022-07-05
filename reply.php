<html>
<head>
<title>Reply</title>
</head>
<body>
<div class="bg-img">
<br><br><br>
<center>
<img src="icons/oops.png" width="20%" height="40%">
<div class="account-action">
<?php
$topicid=$_GET['id1'];
include 'connect.php';
include 'nvgbar.php'; 
if(isset($_SESSION['signed_in']) == 1)
{
	$content=$_POST['reply'];
  $id=$_SESSION['id'];
   $db=new PDO("mysql:host=localhost;dbname=veasqforum","root","");
        if($db)
        {
          $sql = "INSERT INTO
                            posts(posts_content,
                                  posts_date,
                                  posts_topic,
                                  posts_by)
                        VALUES(?,?,?,?)";
          $test=$db->prepare($sql);
             $test->bindParam(1,$content);
             $test->bindParam(2,date('y/m/d'));
             $test->bindParam(3,$topicid);
             $test->bindParam(4,$id);
             if($test->execute())
              header("Location:topic.php?posts_topic=$topicid");
              else
                echo 'An error occured while inserting your reply. Please try again later.' . mysqli_error().' '.count_errors(); 

        }
        else
        {
           echo 'An error occured while inserting your reply. Please try again later.' . mysqli_error();
        }

  
}

else
{
echo "<br><br><br><p style='font-size:54px; text-align:center; font-weight:bold;'>OOPS!!!<br>You need to sign in first</p>";
                     echo '<br><p style="text-align:center; font-size:30px; font-weight:bold;"><a href="signin.php">Sign In </a></p>';

}
echo "<br><br><br><br><br><br><br><br><br><br>";
?>
</div>
</div>
</body>
</html>
