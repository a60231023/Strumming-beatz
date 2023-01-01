<?php 

$server = "localhost";
$user = "root";
$pass = "";
$database = "logininformation";



    echo("<pre>"); 
	$first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$cpassword = $_POST['confirmpassword'];

	//hashing the password
	$password = password_hash($password, PASSWORD_DEFAULT);

	$conn = mysqli_connect($server, $user, $pass, $database);
	$sql = "SELECT * FROM users WHERE username = '{$username}'";
 	$res = $conn->query($sql);
 	if($res->num_rows != 0){
 		echo("User with same username already exists on database");
 		die();
 	}

 	
 	$sql_1 = "INSERT INTO users (first_name,last_name,username,password) VALUES ('{$first_name}','{$last_name}','{$username}','{$password}')";
 	if($conn->query($sql_1)){
 		echo("suucess");
		 header("Location: http://localhost/final/music/login.php");
			die();
 	}else{
 		echo("failed....");
 	}
 ?>