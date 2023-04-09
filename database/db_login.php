<?php
$server = 'localhost';
$username = 'root';
$password = 'root';
$database = 'INFS634-AHDA-Project';

try{
	$conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
} catch(PDOException $e){
	die( "Connection failed: " . $e->getMessage());
}
?>