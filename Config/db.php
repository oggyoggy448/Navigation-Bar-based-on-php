<?php
$host = 'localhost';
$db = 'admin';
$username = 'root';
$password = '';
try 
{
	$conn = new pdo("mysql:host=$host; dbname=$db;" , $username , $password);
	//echo "connect successfully:";
}
catch (PDOException $z)
{
	die("coul not connect to the databeast $db: " . $z->getMessage());
}
?>