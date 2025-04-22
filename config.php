<?php
	//development localhost connection
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "students";

	//remote database connection
	// $servername = "remotemysql.com";
	// $username = "vb1uhRl1eK";
	// $password = "bM5819qIFP";
	// $dbname = "vb1uhRl1eK";

	$conn = mysqli_connect($servername, $username, $password, $dbname);

	if(!$conn){
		die("Could not connect to the database due to the following error --> ".mysqli_connect_error());
	}

?>