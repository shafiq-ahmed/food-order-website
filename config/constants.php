<?php 
//constant.php is included in menu.php
//and menu.php is added to all the pages
session_start();

define('SITEURL','http://localhost/food-order-website/');
define('DB_HOST','localhost');
define('DB_USERNAME','root');
define('DB_PASSWORD','');
define('DB_NAME','food-order');
define('CATEGORY_IMAGE_SOURCE','http://localhost/food-order-website/images/category/');


$con=mysqli_connect(DB_HOST,DB_USERNAME,DB_PASSWORD,DB_NAME) ;
//$db_select=mysqli_select_db($con,'food-order') or die(mysqli_error());

?>