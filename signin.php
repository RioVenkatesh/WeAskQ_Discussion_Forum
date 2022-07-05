<!doctype html>
<html>
<head>
  <title>
    sign in
  </title>
  <link rel="stylesheet" type="text/css" href="css/posts.css">
  <script>
  function validatePost() {
    var x = document.forms["myForm"]["username"].value;
    if (x == "") 
        {
        alert("Username is required");
        return false;
      }
      var y = document.forms["myForm"]["password"].value;
    if (y == "") 
        {
        alert("Password is required");
        return false;
      }
    }
</script>
</head>
<body>
<div class="bg-imgsio">
<?php
include 'nvgbar.php';
?>
<br>
<center>
<div class="formstyle">
<h1>Sign In!</h1>
</div>
</center>
  <form method="post" action="signinpost.php" class="signin" name="myForm" onsubmit="return validatePost();">
  <fieldset class="account-info">
    <label>
      Username
      <input type="text" name="username">
    </label>
    <label>
      Password
      <input type="password" name="password">
    </label>
  </fieldset>
  <fieldset class="account-action">
    <input class="btn" type="submit" name="submit" value="SignIn">
  </fieldset>
</form>
</div>
<br><br>
<?php
include 'footer.php';
?>
</body>
</html>