<?php 
session_start(); 
$server = "localhost";
$user = "root";
$pass = "";
$database = "logininformation";
$conn = mysqli_connect($server, $user, $pass, $database);

if (isset($_POST['username']) && isset($_POST['password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['username']);
	$pass = validate($_POST['password']);

	}else{
		$sql = "SELECT * FROM users WHERE username='$uname' AND password='$pass'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['username'] === $uname && $row['password'] === $pass) {
            	$_SESSION['user_name'] = $row['user_name'];
            	$_SESSION['name'] = $row['name'];
            	$_SESSION['id'] = $row['id'];
            	header("Location: C:\xampp\htdocs\final\Music\explore.html");
		        exit();
            }else{
                echo("hi");
				header("Location: index.php?error=Incorect User name or password");
		        exit();
			}
		}else{
            echo("bye");
			header("Location: index.php?error=Incorect User name or password");
	        exit();
		}
	}
	
