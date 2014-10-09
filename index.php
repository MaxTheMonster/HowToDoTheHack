<?php
include 'nav.php';
?>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="styles/default.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script> 
    <link rel="stylesheet" type="text/css" href="styles/Fonticons.css">
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
<form >
<center>
<table border="1px solid white">
    <tr>
    <td><label for="email">Enter your email: </label></td>
    <td><input type="email" name="email" placeholder="Enter your email"></td>
    </tr>
    <tr><br/></tr>
    <tr>
    <td><label for="username">Choose a Username: </label></td> 
    <td><input type="text" name="username" placeholder="Enter a Username"></td>
    </tr>
    <tr><br/></tr>
    <tr>
    <td><label for="Password">Create a password: </label></td>
    <td><input type="password" name="Password" placeholder="Create a password" id="password"></td>
    </tr>
    <span class="hint">Password must be at least 8 characters</span>
    <tr><br/></tr>
    <tr>
    <td><label for="cnfrmPassword">Confirm your password: </label></td>
    <td><input type="password" name="cnfrmPassword" placeholder="Retype your password" id="confirm_password"></td>  
    </tr>       
    <span class="hint">Passwords do not match</span>
    <br/>
    
</table>

<input id="submit" value="Create an account!" type="submit">
</center>
</form>
</div>
 <span class="iconR" style="color: yellow; font-size: 25em; opacity: 0.8;">;</span>
</div>
<p id="wih">What is HowToDoTheHack?</p>
  <!-- <script src="scripts/app.js"></script> -->
</body>
</html>