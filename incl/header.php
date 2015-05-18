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
				<div class="hamburger"></div>
				<p><a href="index.php">TOTAL EXTAS</a></p>
				<ul>
					<li><a href="#calendar">Kalender</a></li>
					<li><a href="#gallery">Galleri</a></li>
					<li><a href="#members">Medlemmar</a></li>
					<li><a href="#footer">Kontakt</a></li>
				</ul>
			</nav>
		</section>
		<section id="slideShow"></section>