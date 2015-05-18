<?php
	$servername = "localhost";
	$username = "root";
	$password = "password";
	$database = "total_extas";

	// Create connection
	$conn = mysqli_connect($servername, $username, $password);

	/* check connection */
	if (mysqli_connect_errno()) {
	    printf("Connect failed: %s\n", mysqli_connect_error());
	    exit();
	}

	// Make my_db the current database
	$db_selected = mysqli_select_db($conn, $database);

	if (!$db_selected) {
	  // If we couldn't, then it either doesn't exist, or we can't see it.
	  $sql = 'CREATE DATABASE' + $database;

	  if (mysqli_query($conn, $sql)) {
	      echo "Database" + $database + "created successfully\n";
	  } else {
	      echo 'Error creating database: ' . mysqli_error() . "\n";
	  }
	}

	// Create table
	$sqlTable = "CREATE TABLE gallery (
			id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
			year INT(6) NOT NULL,
			location VARCHAR(50) NOT NULL,
			galleryImages TEXT NOT NULL,
			galleryText VARCHAR(300) NOT NULL
			)";

	$conn->query($sqlTable)
?>