<?php
error_reporting(0);
$servername = 'database';
$username = 'shellmates';
$password = 'My_Sup3r_Secr3t_P@$$word';
$dbname = 'wargame';
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error){
	die("Connection to database failed");
}
?>
