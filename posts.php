<html>
<head>
<title>Write a post</title>
</head>
<link rel="stylesheet" type="text/css" href="css/posts.css">
<script>
   function validatePost() {
    var x = document.forms["myPost"]["topic_subject"].value;
    if (x == "") 
        {
        alert("title is required");
        return false;
      }
      var y = document.forms["myPost"]["topic_descr"].value;
    if (y == "") 
        {
        alert("Please write a Description");
        return false;
      }
    }
</script>
<body>
<div class="bg-imgd">
<?php
include 'nvgbar.php';
?>
<center>
<div class="formstyle">
<h1>Start a Discussion</h1>
</div></center>
  <form method="post" action="postspost.php" name="myPost" onsubmit="return validatePost()" class="post">
  <fieldset class="account-info">
  <label>
      Title
      <input type="text" name="topic_subject" class="sub">
    </label>
    
        <label>
    Category<br><br>
    <select name="topic_cat">
    <option value="technology">Technology</Option>
    <option value="health">Health</Option>
    <option value="entertainment">Entertainment</Option>
    <option value="sports">Sports</Option>
  </select>
    </label>
    <label>
    Description
    </label>
       <textarea rows="18" cols="60" name="topic_descr" class="textarea">
</textarea>
  </fieldset><br>
  <fieldset class="account-action">
    <input class="btn" type="submit" name="submit" value="Post" >
  </fieldset>
</form>
<br>
</div>
</body>
</html>