<!DOCTYPE html> 
<html lang="en"> 
	
<head> 
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <div class="container">
	<title> 
		CarsVekki :)
	</title> 
 
	</head>
	<style>
	body{
		background-image: 
	url('mc.jpg');
		background-repeat: no-repeat;
		background-attachement: full;
		background-size: 100% 280%;
		}
	</style>
	<style>
	.serif {
		font-family: "Algerian", Times, serif;
		}
    </style>
	<style>
	.serif {
		font-family: "Algerian", Times, serif;
		}
    </style>
	<body>
		<h1 style="color:cyan;"><div align ="center"> 
		<br><br><b><p class="serif">Welcome to CarsVekki.com</p></b><br><br>
	</h1> 
	<div align ="center">
	<h3 style="color:red;"> 
		<p class="serif"> Select Your Own Car Choice</p> 
	</h3> 
	
	<?php
		if(array_key_exists('button1', $_POST)) { 
			button1(); 
		} 
		  
		function button1() { 
		
			header("Location:f1 (1).php");
			exit; 
		} 
		
		 
	?> 
	<div align ="center">
	<form method="post"> 
		<input  type="submit" name="button1"
				class="class="btn btn-primary" value="Your Choice" /> 
		
		</form> 

</body> 
</html> 
