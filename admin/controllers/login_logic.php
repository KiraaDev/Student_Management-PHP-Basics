<?php

session_start();

include_once("../../database/config.php");

if(isset($_POST["login"])){
	if( !empty($_POST["email"] ) && !empty($_POST["password"])){
		
		$email = $_POST["email"];
		$password = $_POST["password"];
		
		$query = "SELECT * FROM admin WHERE email = :email";
		
		$stmt = $conn->prepare($query);
		
		$stmt->bindParam(":email", $email, PDO::PARAM_STR);
		
		$stmt->execute();
		
		$result = $stmt->fetch();
		
		if($result && password_verify($password, $result["password"])){
			
			$_SESSION["auth"] = true;
			$_SESSION["username"] = $result["username"];
			$_SESSION["id"] = $result["id"];
			
			header("Location: ../pages/dashboard.php");
			
		} else {
			$error_msg = "<h4 style='color: red'>Invalid Login! </h4>";
			$_SESSION["message"] = $error_msg;
			header("Location: ../pages/login.php");
			exit();
		}
		
	} else {
			$error_msg = "<h4 style='color: red'>All credentials are needed</h4>";
			$_SESSION["message"] = $error_msg;
			header("Location: ../pages/login.php");
			exit(); 
	}
	
}
	
?>