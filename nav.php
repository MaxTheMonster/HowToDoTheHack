<html>
<ank rel="stylesheet" type="text/css" href="styles/default.css">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script> 
<div class="nav">
	<style>input:focus {
		  outline: none;
		  border-bottom: solid 2px #969696;
		}
		.nav h1 {
			text-align: right;
			background-color: 3em;
		}
		input {
		  display: block;
		  margin: 0;
		  width: 393px;
		  height: 2em;
		  font-family: sans-serif;
		  margin-bottom: 0.5em;
		  font-size: 18px;
		  appearance: none;
		  box-shadow: none;
		  border-radius: none;
		  border: none;
		  border-bottom: solid 2px #c9c9c9;
		  transition: border 0.3s;
		  color: #2B2B2B; 
		  border-radius: 4px;
		  font-weight: bold;
		  padding-left: 1em;
		}
		input[type="submit"] {
		 width: 5em;
		 cursor: pointer;
		}
				::-webkit-input-placeholder {
		   color: gray;
		   font-size: 15px;
		}

		:-moz-placeholder { /* Firefox 18- */
		   color: gray;  
		   font-size: 15px;
		}

		::-moz-placeholder {  /* Firefox 19+ */
		   color: gray;  
		   font-size: 15px;
		}

		:-ms-input-placeholder {  
		   color: gray;  
		   font-size: 15px;
		}
		.nav {
			border-radius: 1em;
			padding: 1em;
		}
		a:hover {
			text-decoration: none;
			color: black;
		}
		a {
			color: black;
			text-decoration: none;
		}
		.navb:hover {
			opacity: 1;
			text-decoration: none;
			color: orange;
			border: 1px solid orange;
			border-bottom-right-radius: 0.5em;
			border-bottom-left-radius: 0.5em;
			cursor: pointer;
			transition: 1s;
			border-bottom: 10px solid yellow;
			border-left: 1px solid yellow;
			border-right: 1px solid yellow;
			border-top: 1px solid yellow;
			font-weight: 10px;
		}
		.navb {
			color: black;
			background-color: white;
			opacity: 0.7;
			font-weight: 2em;
			padding: 1em;
			text-decoration: none;
			border: 1px solid black;
			border-bottom: 5px solid brightyellow;
			border-bottom-right-radius: 0.5em;
			border-bottom-left-radius: 0.5em;
		}

		</style>
<center>


	<span class="navb"><a href="#">Home</a></span>
	<span class="navb"><a href="#">Projects</a></span>

	<span class="navb"><a href="#">Add a Project</a></span>
	<span class="navb"><a href="#">Sign Up</a></span>
	<br/>

</center>
<h1>HowToDoTheHack</h1>
<input width="393px" placeholder="Search..." type="text" class="search">

<input id="submit" value="Search" type="submit" background="img/search.png">
</div>
<script src="scripts/nav.js"></script>
</html>