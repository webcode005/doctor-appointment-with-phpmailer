<?php
session_start();
$servername = "localhost";
$username = "carbonre_CarBon_DAta";
$password = "CarBon_DAta@9585!@#";
$dbname = "carbonre_CarBon_DAta";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}



?>