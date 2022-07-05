<html>
<head>
<title>Signed up</title>
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
<h1>Sign Up again!</h1>
<?php
include "connect.php";

 $errors = array();
     $name=$_POST['username'];
    if(isset($name))
    {
        $sql=mysqli_query($con,"SELECT username FROM users WHERE username='$name'");
        if($sql)
        {
            $num_rows=mysqli_num_rows($sql);
        }
        
        
        if($num_rows >=1)
        {
            $errors[] = '<br>This username already exist.';
        }
        
        if(!ctype_alnum($_POST['username']))
        {
            $errors[] = '<br>The username can only contain letters and digits.';
        }
        if(strlen($_POST['username']) > 30)
        {
            $errors[] = '<br>The username cannot be longer than 30 characters.';
        }
    }
    else
    {
        $errors[] = '<br>The username field must not be empty.';
    }
     
     
    if(isset($_POST['password']))
    {
        if($_POST['password'] != $_POST['password_check'])
        {
            $errors[] = '<br>The two passwords did not match.';
        }

        if(strlen($_POST['password']) > 20)
        {
            $errors[] = '<br>The Password cannot be longer than 30 characters.';
        }

        if(strlen($_POST['password']) < 8)
        {
            $errors[] = '<br>The Password cannot be smaller than 8 characters.';
        }
    }
    else
    {
        $errors[] = '<br>The password field cannot be empty.';
    }
     
    if(!empty($errors))
    {
        echo "<br><br><p style='font-size:34px; text-align:center; font-weight:bold;'>You have a problem while signing up..</p>";
        foreach($errors as $key => $value) 
        {
            echo '<p style="text-align:center; font-size:19px; font-weight:bold; color:red;">' . $value . '</p>';
        }
        echo '<br><p style="text-align:center; font-size:19px; font-weight:bold; font-decoration:none;"><a href="signup.php">Sign Up again</a></p>';
    }
    else
    {
        
        $username=$_POST['username'];
        $gender=$_POST['gender'];
        $email=$_POST['email'];
        $password=sha1($_POST['password']);
        $contact=$_POST['contact'];
        
        $db=new PDO("mysql:host=localhost;dbname=veasqforum","root","");
        if($db)
        {
             $sql = "INSERT INTO
                    users(name,username,gender,email,password,contact,udate, user_level)
                VALUES(?,?,?,?,?,?,?,0)";
             $test=$db->prepare($sql);
             $test->bindParam(1,$name);
             $test->bindParam(2,$username);
             $test->bindParam(3,$gender);
             $test->bindParam(4,$email);
             $test->bindParam(5,$password);
             $test->bindParam(6,$contact);
             $test->bindParam(7,date('y/m/d'));
             if($test->execute())
             {
                 $to=$_POST['email'];
                 $subject='veasqforum';
                 $message='ThankYou for registering VeAsQ Forum.';
                 $headers="From:mvenkateshsmart@gmail.com \r\n ".
                     "Reply-To: mvenkateshsmart@gmail.com \r \n".
                     "Content-type : text/html; charset= UTF-8 \r\n";
                 mail($to,$subject,$message,$headers);
                 header("location: signin.php");
             }

             else
              echo '<br>Something went wrong while registering. Please try again later.';
        }
        else
        {
            echo '<br>Something went wrong while registering. Please try again later.';
            
        }
}
?>
</div>
</body>
</html>

