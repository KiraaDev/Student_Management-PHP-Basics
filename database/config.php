<?php

$username = "KiraDev";
$password = "RT-XmW.PwkbfV(HR";
$database = "school_management";

$conn = new PDO("mysql:host=localhost; dbname=$database", $username, $password);

$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if($conn){
	
} else {
 die("cant connect to database");
}

?>