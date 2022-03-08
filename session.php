<?php
session_start();
	if($_SESSION["auth"] == 1) {	// header('location:frame1.php'); 
		}
	else
	{	echo "Unauthorise access.";		header('location:index.html');
		}
?>

