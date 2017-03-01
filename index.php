<?php
	ini_set('display_errrors', 1);
	error_reporting(E_All);
//imgallery PHP Class
include("imgallery.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<!-- <link rel="stylesheet" href="css/styles.css"> -->
	<link rel="stylesheet" type="text/css" href="css/imgallery.css">
	<link rel="stylesheet" href="css/lightbox.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
	<script type="text/javascript" src="js/jquery.lightbox.js"></script>
	<script type="text/javascript" src="js/imgallery.js"></script>
	<title>Custom Gallery</title>
</head>
<body>
	ImgGallery::getPublicSide();
	
</body>
</html>