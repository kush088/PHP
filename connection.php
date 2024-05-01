<?php
	$username = 'root';
	$password = '';
	$conn = new PDO( 'mysql:host=localhost;dbname=project', $username, $password );
	if(!$conn){
		die("Fatal Error: Connection Failed!");
	}
?>