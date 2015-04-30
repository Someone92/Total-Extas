<?php
	include("db/db_setup.php");
	$database = "total_extas";

	$conn = mysql_connect("localhost", "root", "password");
	mysql_select_db($database) or die("Error". mysql_error() );
	$info = "SELECT * FROM gallery";
	$result = mysql_query($info) or die (mysql_error());
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Total Extas</title>

		<!-- Meta Tags -->
		<meta charset="utf-8">
		<meta name="author" content="Jens Andersson">
		<meta name="description" content="">
		<meta name="keywords" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- og:protocol - Facebook/Twitter links -->
		<meta property="og:title" content="Total Extas">
		<meta property="og:type" content="Drifting">
		<meta property="og:url" content="totalextas.se">
		<meta property="og:image" content="img/gallery/1.jpg">

		<!-- CSS -->
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/font-awesome.css">
		<link rel="stylesheet" href="css/normalize-3.0.2.css">
		
		<!-- JavaScript -->
		<script src="js/jquery-2.1.3.js"></script>

	</head>
	<body>
		<section id="header" class="">
			<nav>
				<h1><a href="#">TOTAL EXTAS</a></h1>
				<ul>
					<li><a href="#">Event</a></li>
					<li><a href="#">Galleri</a></li>
					<li><a href="#">Medlemmar</a></li>
					<li><a href="#">Kontakt</a></li>
				</ul>
			</nav>
		</section>
		<section id="slideShow"></section>