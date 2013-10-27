<?php

	session_start();
	
	$_SESSION['logged_in'] = null;
	unset($_SESSION['logged_in']);
	session_destroy();
	header("location: index.html");

?>
