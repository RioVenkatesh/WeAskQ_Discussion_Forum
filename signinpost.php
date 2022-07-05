 <html>
 <head>
 <title>Signed In</title>
 <link rel="stylesheet" type="text/css" href="css/posts.css">
 </head>

 <body>
 <div class="bg-imgsio">
 <?php
include 'nvgbar.php';
?>
<br><br><br>
<center>
<img src="icons/oops.png" width="20%" height="40%">
<br><br>
<h1>Sign In again</h1>
<?php
include "connect.php";

$errors = array(); 
            $user = $_POST['username'];
            $pass = sha1($_POST['password']);
          
            $query = mysqli_query($con,"SELECT * FROM users WHERE username='$user'");
            $numrows = mysqli_num_rows($query);
            if ($numrows!=0)
            {
            
            while ($row = mysqli_fetch_array($query))
            {
                          
             if($pass==$row['password'])
                    {
                        $_SESSION['id']    = $row['id'];
                        $_SESSION['username']  = $row['username'];
                        $_SESSION['user_level'] = $row['user_level'];
                        $_SESSION['signed_in'] = true;
                         header("location:index.php");
                    }    
                
              else
                {
                    echo "<br><br><p style='font-size:34px; text-align:center; font-weight:bold;'>You have entered a wrong password . Please try again.</p>";
                     echo '<p style="text-align:center; font-size:19px; font-weight:bold; font-decoration:none;"><a href="signin.php"><br>Sign In again</a></p>';
                }
            }
                    
            }

                else
                {
                    echo "<br><br><p style='font-size:34px; text-align:center; font-weight:bold;'>You have entered a wrong username. Please try again.</p>";
                    echo '<p style="text-align:center; font-size:19px; font-weight:bold; font-decoration:none;"><a href="signin.php"><br>Sign In again</a></p>';
                }
        ?>

</div>
        </body>
        </html>