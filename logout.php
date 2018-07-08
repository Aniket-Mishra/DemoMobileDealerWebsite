<?php
	SESSION_START();
	session_destroy();
	header('location: index.php');

?>