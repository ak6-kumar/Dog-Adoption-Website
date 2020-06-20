<?php
    $host="localhost";
	$username="root";
	$password="usbw";
	$database="test";
$mysqli = new mysqli($host,$username,$password,$database);
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
?>