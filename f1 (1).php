<!DOCTYPE html>
<html>
<head>
<body>
<meta charset="UTF-8">
<title>CarsVekki :)</title>
</head>
    <style>
	.serif {
		font-family: "Times New Roman", Times, serif;
		}
    </style>
<body>

<form method="POST");">

<div align="center">
<br><br><br>
	             <h2 style="color:red;"><b> <p class="serif">Welcome</p></b></h1>
<br>
</body></html>


  <h4 style="color:grey;"><label><p class="serif">Select Type: </label>
<select name="car" id="car">
	<option value="">Select Cartype</option>
	<option value="hatchback">Hatchback</option>
	<option value="sedan">Sedan</option>
	<option value="suv">SUV</option>
    <option value="coupe">Coupe</option>
    <option value="convertible">Convertible</option>
</select><br><br>


<label >Shift Type</label>:

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
    <option value="800000">900000</option>
	<option value="1000000">1000000</option>
	<option value="1100000">1100000</option>
	<option value="1300000">1300000</option>
	<option value="1500000">1500000</option>
	<option value="2100000">2100000</option>
	<option value="2200000">2200000</option>
	<option value="2300000">2300000</option>
    <option value="2600000">2600000</option>
    <option value="3200000">3200000</option>
    <option value="4000000">4000000</option>
    <option value="4100000">4100000</option>
    <option value="4800000">4800000</option>
    <option value="5100000">5100000</option>
    <option value="5400000">5400000</option>
    <option value="6500000">6500000</option>
    <option value="7300000">7300000</option>
    <option value="7500000">7500000</option>
    <option value="10000000">10000000</option>
    <option value="20000000">20000000</option>
</select>
<br>
<br><br><button type="submit" name="details" class="btn btn-primary">SUBMIT<br></button>
<br></h4></p></form>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<div class="container">
<table class="table">
<?php
include 'config.php';

if(isset($_POST['details']))
{

$type=$_POST['car'];

$shift=$_POST['choice'];

$price=$_POST['amount'];

$details=mysqli_query($conn,"select * from cars where Type='$type' and Transmission='$shift' and Price='$price'") or die( mysqli_error($conn));;
while($description=mysqli_fetch_array($details))
{
$company=$description['Company'];
echo "<tr><td><b>Company: ".$company."</b></td><td rowspan='12'>";
$imagePath=$description['Image'];
echo "<img src='/images/".$imagePath."'>";
echo "</td></tr>";
$name=$description['Name'];
echo "<tr><td><b>Name of Car: ".$name."</b></td>";
$fuel=$description['Fuel'];
echo "<tr><td>Fuel: ".$fuel."</td></tr>";
$pt=$description['PT'];
echo "<tr><td>".$pt."</b></td></tr>";
$engine=$description['Engine'];
echo "<tr><td>Engine: ".$engine."</td></tr>";
$lifetime=$description['Lifetime'];
echo "<tr><td>Lifetime: ".$lifetime."</td></tr>";
$transmission=$description['Transmission'];
echo "<tr><td>Transmission: ".$transmission."</td></tr>";
$typ=$description['Type'];
echo "<tr><td>Type: ".$typ."</td></tr>";
$cc=$description['CC'];
echo "<tr><td>CC is: ".$cc."</td></tr>";
$variant=$description['Variant'];
echo "<tr><td>Variant: ".$variant."</td></tr>";
$mielage=$description['Mielage'];
echo "<tr><td>Mileage: ".$mielage."</td></tr>";
$pri=$description['Price'];
echo "<tr><td>Price: ".$pri."</td></tr>";
$color=$description['Color'];
echo "<tr><td>Color: ".$color."</td></tr>";
$service=$description['Service'];
echo "<tr><td> ".$service."</td></tr>";
$parts=$description['Parts'];
echo "<tr><td> ".$parts."</td></tr>";

}

}

?>

</table></body></head></html>
