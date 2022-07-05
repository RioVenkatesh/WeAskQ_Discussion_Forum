<!doctype html>
<head>
<script>
 function validateForm() {
   var y = document.forms["myForm"]["subscribe_mail"].value;                 /*value of entered email stored in y*/
    if(y=="")
    {
      alert("Enter your email");
      return false;
    }
    var x = document.forms["myForm"]["subscribe_mail"].value;
    var atpos = x.indexOf("@");
    var dotpos = x.lastIndexOf(".");
    if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {
        alert("Not a valid e-mail address");
        return false;
    }
    }
</script>
<link rel="stylesheet" type="text/css" href="css/footer.css">
	<title>
		footer
	</title>
	
</head>
<body>
<a href="feedback.php">
<button type="button" class="button2" >FEEDBACK!!!</button>
</a>
<form  class="searchBox" method="post" action="subscribe.php" onsubmit="return validateForm()" name="myForm">
<input class="searchInput" type="text" name="subscribe_mail" placeholder="Email..." >
<button class="searchButton" type="submit">SUBSCRIBE</button>
</form>
</body>
