<?php

$sname= "localhost"; // The name of the database server
$uname= "root";  // The MySQL username
$password = "";  // The MySQL user password

$db_name = "demo_db";

$connection = mysqli_connect($sname, $uname, $password, $db_name);

if (!$connection) {
	echo "Connection failed!";
}