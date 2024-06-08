<?php

session_start();

if(!isset($_SESSION["auth"]) && $_SESSION["auth"] === true){
	 echo "Not Admin!";
} else {
	echo "Hello " . $_SESSION["username"];
}

?>

