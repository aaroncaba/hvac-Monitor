<?php
// Use as:  
// http://hvac-monitor/addReading.php?signal_id=9&state=off

$hostname = "hvac-monitor";
$username = "arduino";
$password = "nml0vOeQW3WmzxqY";
$db = "hvac";

$dbconnect = mysqli_connect($hostname, $username, $password, $db);

if ($dbconnect->connect_error) {
	die("Database connection failed: " . $dbconnect->connect_error);
}

$signal_id = $_GET['signal_id'];
$state = $_GET['state'];

$query = "INSERT INTO states (signal_id, state) VALUES ('$signal_id', '$state')";

if (!mysqli_query($dbconnect, $query)) {
	die('An error occurred when submitting your review.');
} else {
	echo "Thanks for your review.";
}