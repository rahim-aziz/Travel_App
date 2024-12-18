<html>
<head>
<title></title>
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="home_style.css">
</head>
<style>
</style>
<body>
<?php
	$_COOKIE["travel_country"] = "Malaysia";
	setcookie("travel_country","Malaysia",time() + (86400 * 30), "/");
?>
<?php include('./header.php') ?>
<div class="paddingrl">
	<h1>Welcome to Malaysia!</h1>
</div>
<?php include('./tools.php') ?>
</body>
</html>