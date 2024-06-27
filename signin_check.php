<?php 
session_start(); 
include "db_demo_connection.php";

if (isset($_POST['name']) && isset($_POST['uname']) && isset($_POST['password']) && isset($_POST['r_password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

    $name = validate($_POST['name']);
	$uname = validate($_POST['uname']);
	$pass = validate($_POST['password']);
    $rpass = validate($_POST['r_password']);

    $user_data = 'name='. $name. '&uname='. $uname;

	if (empty($name)) {
		header("Location: signin.php?error=Name is required!&$user_data");
	    exit();

	}else if(empty($uname)){
        header("Location: signin.php?error=Username is required!&$user_data");
	    exit();
        
	}else if (empty($pass)) {
		header("Location: signin.php?error=Password is required!&$user_data");
	    exit();

	}else if(empty($rpass)){
        header("Location: signin.php?error=Password Again is required!&$user_data");
	    exit();

    }else if($pass !== $rpass){
        header("Location: signin.php?error=Passwords do not match!&$user_data");
	    exit();

	}else{

        // Password Hashing
        $pass = md5($pass);

		$sql = "SELECT * FROM accounts WHERE username='$uname' ";
		$result = mysqli_query($connection, $sql);

		if (mysqli_num_rows($result) > 0){
            header("Location: signin.php?error=An account with this username already exists!&$user_data");
            exit();
        }else{
            $sql1= "INSERT INTO accounts(username, password, name) VALUES('$uname', '$pass', '$name')";
            $result1 = mysqli_query($connection, $sql1);

            if($result1){
                header("Location: signin.php?success=Your account has been created successfully...&$user_data");
                exit();
            }else{
                header("Location: signin.php?error=Something went wrong!&$user_data");
                exit();
            }
	    }
    }
	
}else{
	header("Location: signin.php");
	exit();
}