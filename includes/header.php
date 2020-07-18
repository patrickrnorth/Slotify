<?php
include("includes/config.php");
include("includes/classes/Artist.php");
include("includes/classes/Album.php");

//session_destroy(); LOGOUT TEMPORARILY

if(isset($_SESSION['userLoggedIn']))
	$userLoggedIn = $_SESSION['userLoggedIn'];
else {
	header("Location: register.php");
}
?>

<html>
<head>
	<title>Welcome to Slotify!</title>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	
</head>

<body>
	
<div id="mainContainer">
		<div id="topContainer">
			<?php include("includes/navbarContainer.php"); ?>
		
			<div id="mainViewContainer">
				<div id="mainContent">