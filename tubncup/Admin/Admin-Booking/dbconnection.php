<?php
$servername = "localhost";
$username = "u480658920_root";
$password = "Dx9ih4vt";
$dbname = "u480658920_tncdb";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection Failed: " . mysqli_connect_error());
}
?>
