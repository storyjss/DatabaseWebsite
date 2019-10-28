<?php
$servername = "localhost";
$username = "storyjs";
$password = "900678425";
$dbname = "191_3430_102_t9";

// Create connection
$mysqli_conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($mysqli_conn->connect_error) {
    die("Connection failed: " . $mysqli_conn->connect_error);
} 
