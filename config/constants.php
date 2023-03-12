<?php 

define('DB_HOST','localhost');
define('DB_USERNAME','root');
define('DB_PASSWORD','');
define('DB_NAME','food-order');


$con=mysqli_connect('localhost','root','') or die(mysqli_error());
$db_select=mysqli_select_db($con,'food-order') or die(mysqli_error());

?>