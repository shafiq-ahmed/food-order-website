<?php 
//constant.php is included in menu.php
//and menu.php is added to all the pages
session_start();

define('SITEURL','http://localhost/food-order-website/');
define('DB_HOST','localhost');
define('DB_USERNAME','root');
define('DB_PASSWORD','');
define('DB_NAME','food-order');


$con=mysqli_connect('localhost','root','','food-order') or die(mysqli_error());
//$db_select=mysqli_select_db($con,'food-order') or die(mysqli_error());

?>