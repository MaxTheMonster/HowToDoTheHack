<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" type="text/css" href="../styles/default.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script> 
	<meta charset="UTF-8">
	<title>New Project - HowToDoTheHack</title>
</head>
<body background="../img/dimension.png">
<form name="create_project" action="#" method="post">
        <div align="center">
    <table width="80%" border="0">
        <tr>
        <td><span style="color: #1ea1f4;"></span>Project Name: </td>
        <td><input type="text" name="Project_name"></td>
        </tr>
        
        <tr>
        <td>Description of Project: </td>
        <td><textarea style="resize: none;" name="Description" rows="10" cols="60"></textarea></td>
        </tr>
<!-- <hr style="color: #25ff25; width: 1036px; height: 3px;"> -->
        
  

   
    <tr>
    <td>
       Language(s) used:</td>
    <td> <select name="Language">
    <option value="">Select language</option>
    <option value="C">C</option>
    <option value="C++">C++</option>
    <option value="C#">C#</option>
    <option value="Clojure">Clojure</option>
    <option value=".NET">.NET</option>
    <option value="Eiffel">Eiffel</option>
    <option value="Erlang">Erlang</option>
    <option value="Go">Go</option>
    <option value="Groovy">Groovy</option>
    <option value="Haskell">Haskell</option>
    <option value="HTML">HTML</option>
    <option value="Java">Java</option>
    <option value="JavaScript">Java Script</option>
    <option value="Lisp">Lisp</option>
    <option value="Logo">Logo</option>
    <option value="Objective C">Objective C</option>
    <option value="PHP">PHP</option>
    <option value="Processing">Processing</option>
    <option value="Prolog">Prolog</option>
    <option value="Python">Python</option>
    <option value="R">R</option>
    <option value="Ruby">Ruby</option>
    <option value="Scala">Scala</option>
    <option value="Scratch">Scratch</option>
    <option value="SQL">SQL</option>
    <option value="Other">Other</option>
    </select>
    <input type="submit" value="Add Language" id="addlang">
    </td>   
    </tr>
        
       
        
       <tr>
       <td><input type="submit" value="Sumbit Project" name="submit"></td>
        <td>&nbsp;</td>   
    	 </tr>
</table>
</form>
	 <script src="../scripts/newproj.js"></script> 
</body>
</html>