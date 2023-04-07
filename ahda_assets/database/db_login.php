<?php
$server = 'localhost';
$username = 'myxtaomy_INFS634';
$password = 'Week10_2023';
$database = 'myxtaomy_INFS634_W23';

try{
	$conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
} catch(PDOException $e){
	die( "Connection failed: " . $e->getMessage());
}
?>