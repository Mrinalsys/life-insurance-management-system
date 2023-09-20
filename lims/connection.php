<?php
$servername = "localhost";
$username   = "root";
$password   = "";
$dbname     = "lims";

$conn = mysqli_connect($servername, $username, $password, $dbname) or die("User/password is wrong");

if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
}
?>