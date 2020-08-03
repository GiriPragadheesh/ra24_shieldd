<?php
// $conn = mysqli_connect("localhost", "root", "");
// mysqli_select_db($conn,"carsvekki");

$db_host = 'localhost';
$db_user = 'root';
$db_password = '';
$db_database = 'carsvekki';

if (isset($_SERVER) and $_SERVER['HTTP_HOST'] == 'shieldsix.epizy.com') {
    $db_host = 'sql306.epizy.com';
    $db_user = 'epiz_26406011';
    $db_password = 'mWMZ2XVbvh3XgB';
    $db_database = 'epiz_26406011_carsvekki';
}

$conn = mysqli_connect($db_host, $db_user, $db_password);
mysqli_select_db($conn, $db_database);

?>