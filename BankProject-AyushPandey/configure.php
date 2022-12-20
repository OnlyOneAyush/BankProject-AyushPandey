<?php

	$servername = "localhost";
	$username = "root";
	$password = "";
	 $dbname = "ap_bank";

	$conn = mysqli_connect($servername, $username, $password, $dbname);

	if(!$conn){
		die("Could not connect with the database  ".mysqli_connect_error());
	}

?>