<html>
<head>
	<link rel="stylesheet" type="text/css" href="styles/default.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script> 
    <script> 
    $(function(){
      $("head").load("nav.php"); 
    });
    </script>
	<link rel="stylesheet" type="text/css" href="styles/default.css">
	<meta charset="UTF-8">
	<title>HowToDoTheHack</title>
</head>
<body background="img/dimension.png">
<div class="signup">
    <h1>Create a HowToDoTheHack account, and get started inspiring the world.</h1>
    <!-- Table of creating an accout -->
<!-- <table> -->
<!-- <tr> -->
<div class="signform">
    <label>Enter your email: </label>
    <input type="email" name="email" placeholder="Enter your email">
    <br/>
    <label>Choose a Username: </label> 
    <input type="text" name="Username" placeholder="Enter a Username">
    <br/>
    

    <label>Create a password: </label>
    <input type="password" name="Password" placeholder="Create a password" id="passoword">
    <span>Password must be at least 8 characters</span>
    <br/>
    <label>Confirm your password: </label>
    <input type="password" name="cnfrmPassword" placeholder="Retype your password" id="confirm_password">
    <span>Passwords do not match</span>
    <br/>
    <input id="submit" value="SUBMIT" type="submit">
</div>


</div>
<p id="wih">What is HowToDoTheHack?</p>
 <script src="scripts/app.js"></script> 
</body>
</html>