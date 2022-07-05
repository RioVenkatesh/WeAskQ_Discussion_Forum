<html>
<head>
<title>Give your feedback</title>
</head>
<link rel="stylesheet" type="text/css" href="css/posts.css">
<script>
 function FvalidateForm() {
   var y = document.forms["myForm"]["feedback_mail"].value;                 /*value of entered email stored in y*/
    if(y=="")
    {
      alert("Enter email");
      return false;
    }
    var atpos = y.indexOf("@");
    var dotpos = y.lastIndexOf(".");
    if (atpos<1 || dotpos<atpos+2 || dotpos+2>=y.length) {         /*fist char cant be @,max 3 char gap b/w dot and @,3 char after dot*/
        alert("Not a valid e-mail address");
        return false;
    }
    var q = document.forms["myForm"]["feedback_descr"].value;
      if(q == "")
      {
        alert("please enter your feedback");
        return false;
      }
    }
</script>
<body>
<div class="bg-imgd">
<?php
include 'nvgbar.php';
?>
<br>
<div class="formstyle">
<center>
<h1>Give your Feedback !!</h1>
</center>
</div>

  <form method="post" action="feedbackpost.php" name="myForm" onsubmit="return FvalidateForm()" class="bc">
  <fieldset class="account-info">
  <label>
      Email
      <input type="text" name="feedback_mail" width="40%">
    </label>
    
    <label>
    Feedback
      
    </label>
    <textarea rows="12" cols="60" name="feedback_descr" class="textarea">
</textarea>

  </fieldset>
  <fieldset class="account-action">
    <input class="btn" type="submit" name="submit" value="Submit" >
  </fieldset>
</form>
</div>
</body>
</html>