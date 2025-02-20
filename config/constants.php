<?php
ob_start();
session_start();

define("SITEURL", "http://localhost/backend20/");

define("LOCALHOST","localhost");
define("DB_USERNAME","root");
define("DB_PASSWORD","");
define("DB_NAME","food_order");

 $conn=mysqli_connect(LOCALHOST,DB_USERNAME, DB_PASSWORD)or die(mysqli_error($conn));
 $db_select=mysqli_select_db($conn,'food_order')or die(mysqli_error($conn));


?>