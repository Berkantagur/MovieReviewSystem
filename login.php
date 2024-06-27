<?php 
session_start(); 
include "db_demo_connection.php";

if (isset($_POST['uname']) && isset($_POST['password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['uname']);
	$pass = validate($_POST['password']);

	if (empty($uname)) {
		header("Location: index.php?error=Username is required!");
	    exit();
	}else if(empty($pass)){
        header("Location: index.php?error=Password is required!");
	    exit();
	}else{

		// Password Hashing
        $pass = md5($pass);

		$sql = "SELECT * FROM accounts WHERE username='$uname' AND password='$pass'";
		$result = mysqli_query($connection, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['username'] === $uname && $row['password'] === $pass) {
            	$_SESSION['username'] = $row['username'];
            	$_SESSION['name'] = $row['name'];
            	$_SESSION['id'] = $row['id'];
            	header("Location: index.html");
		        exit();
            }else{
				header("Location: index.php?error=Incorect Username or password!");
		        exit();
			}
		}else{
			header("Location: index.php?error=Incorect Username or password!");
	        exit();
		}
	}
	
}else{
	header("Location: index.php");
	exit();
}