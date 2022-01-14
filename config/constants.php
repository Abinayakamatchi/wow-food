<?php  
session_start();
//create constants for non-repeating values
define('SITEURL','http://localhost/food-order/');
define('LOCALHOST','localhost');
define('DB_USERNAME','root');
define('DB_PASSWORD','lingabairavi662');
define('DB_NAME','food-order');
$conn=mysqli_connect(LOCALHOST,DB_USERNAME,DB_PASSWORD,)or die(mysqli_error());

$db_select=mysqli_select_db($conn,'food-order')  or die(mysqli_error());


?>