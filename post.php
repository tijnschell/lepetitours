<?php
$tnow = time();

$tz = "UTC";
date_default_timezone_set($tz);
$tz_offset = floatval(date("Z"))/3600.;
$tz_offset_str = sprintf("UTC%+.1f",$tz_offset);
$tz_offset_str = preg_replace("/\.0$/","",$tz_offset_str);

$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>
