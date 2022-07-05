<html>
<head>
    <title>Edit Profile</title>
    <link rel="stylesheet" type="text/css" href="css/posts.css">
</head>
<script>

    function validatePro() {
        var x = document.forms["myForm"]["name"].value;
        if (x == "")
        {
            alert("Name must be filled out");
            return false;
        }


        var x = document.forms["myForm"]["email"].value;
        var atpos = x.indexOf("@");
        var dotpos = x.lastIndexOf(".");
        if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {
            alert("Not a valid e-mail address");
            return false;
        }
        var z = document.forms["myForm"]["contact"].value;
        if (z == "")
        {
            alert("Contact Number must be filled out");
            return false;
        }
        var p = document.forms["myForm"]["username"].value;
        if (p == "")
        {
            alert("Username must be filled out");
            return false;
        }
</script>
<body>
<div class="bg-imgp">
<?php
include 'connect.php';
include 'nvgbar.php';
$id=$_SESSION['id'];
$query = mysqli_query($con,"SELECT * FROM users WHERE id='$id'");
while($row = mysqli_fetch_array($query)) {
    $name = $row['name'];
    $email = $row['email'];
    $username = $row['username'];
    $contact = $row['contact'];
    $gender = $row['gender'];
    $pass = $row['password'];
}
?>
<br><br>
<div class="formstyle">
<center>
<h1>Edit Profile</h1>
</center>
</div>
<form method="post" action="updateprofile.php" class="signup" name="myForm" onsubmit="return validatePro()" >
        <fieldset class="account-info">
            <label>
                Your Name
                <input type="text" name="name" value="<?php echo $name;?>">
            </label>
            <label>
                Email
                <input type="text" name="email" value="<?php echo $email;?>">
            </label>
            <label>
                Contact Number
                <input type="text" name="contact" value="<?php echo $contact;?>">
            </label>
            <label>
                Username
                <input type="text" name="username" value="<?php echo $username;?>">
            </label>
        </fieldset>
        <fieldset class="account-action">
            <input class="btn" type="submit" name="submit" value="Update">
        </fieldset>

</form>
</div>
</body>
</html>
