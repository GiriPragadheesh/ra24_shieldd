<!DOCTYPE html>
<html>
<head>
<body>
<meta charset="UTF-8">
<title>CarsVekki :)</title>
</head>

<body>

<form method="POST" style ="background-image: url('C:\xampp\htdocs\c.jpeg');">

<div align="center">
<br><br><br>	                    
	             <h1> Welcome</h1>
<br><br>
</body></html>
  
	 	
  <label>Select Type: </label>
<select name="car" id="car">
	<option value="">Select Cartype</option>
	<option value="hatchback">Hatchback</option>
	<option value="sedan">Sedan</option>
	<option value="suv">SUV</option>
</select><br><br>

	      
<label >Shift:</label>:

<input type="radio" name="choice"
<?php if (isset($choice) && $choice=="Gear") echo "checked";?>
value="gear"> Gear 
<input for="ctype" type="radio" name="choice" 
 <?php if (isset($choice) && $choice=="Auto") echo "checked";?>
value="auto"> Auto <br><br>

<label>Choose Price:</label>
<select name="amount" id="amount">
	<option value="">Choose Amount</option>
	<option value="300000">300000</option>
	<option value="400000">400000</option>
	<option value="500000">500000</option>
	<option value="600000">600000</option>
	<option value="700000">700000</option>
	<option value="800000">800000</option>
	<option value="1000000">1000000</option>
	<option value="1100000">1100000</option>
	<option value="1300000">1300000</option>
	<option value="1500000">1500000</option>
	<option value="2100000">2100000</option>
	<option value="2200000">2200000</option>
	<option value="3200000">3200000</option>
</select>
<br>
<br><br><button type="submit" name="details" class="btn btn-primary">SUBMIT<br></button>
<br></form>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<div class="container">
<table class="table">
<?php
include 'config.php';
$conn = mysqli_connect("localhost", "root", "");
mysqli_select_db($conn,'carsvekki');

if(isset($_POST['details']))
{ 
echo "<br>WELCOME"; 
$type=$_POST['car'];
echo $type;
$shift=$_POST['choice'];
echo $shift;
$price=$_POST['amount'];
echo $price;
$conn = mysqli_connect("localhost", "root", "");
mysqli_select_db($conn,'carsvekki');

$details=mysqli_query($conn,"select * from cars where Type='$type' and Transmission='$shift' and Price='$price'") or die( mysqli_error($conn));;
while($description=mysqli_fetch_array($details))
{
$company=$description['Company'];
echo "<br><tr><td>Company: ".$company;
$name=$description['Name'];
echo "<br><tr><td>Name of Car: ".$name;
$fuel=$description['Fuel'];
echo "<br><tr><td>Fuel: ".$fuel;
$pt=$description['PT'];
echo "<br><tr><td>".$pt;
$engine=$description['Engine'];
echo "<br><tr><td>Engine: ".$engine;
$lifetime=$description['Lifetime'];
echo "<br><tr><td>Lifetime: ".$lifetime;
$transmission=$description['Transmission'];
echo "<br><tr><td>Transmission: ".$transmission;
$typ=$description['Type'];
echo "<br><tr><td>Type: ".$typ;
$cc=$description['CC'];
echo "<br><tr><td>CC is: ".$cc;
$variant=$description['Variant'];
echo "<br><tr><td>Variant: ".$variant;
$mielage=$description['Mielage'];
echo "<br><tr><td>Mileage: ".$mielage;
$pri=$description['Price'];
echo "<br><tr><td>Price: ".$pri;
$color=$description['Color'];
echo "<br><tr><td>Color: ".$color;
$service=$description['Service'];
echo "<br><tr><td> ".$service;
$parts=$description['Parts'];
echo "<br><tr><td> ".$parts;

}

}

?>

</table></body></head></html>  
  
  
  
  