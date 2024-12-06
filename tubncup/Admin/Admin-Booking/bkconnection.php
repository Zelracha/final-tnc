<?php
  $servername = "localhost"; 
  $username = "u480658920_root";  
  $password = "Dx9ih4vt";       
  $dbname = "u480658920_tncdb";  

$conn = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
