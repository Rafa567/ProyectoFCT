<?php


$servername   = "den1.mysql6.gear.host";
$database = "tenisclub";
$username = "tenisclub";
$password = "@basetenis";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);
// Check connection
if ($conn->connect_error) {
   die("Error de conexión: " . $conn->connect_error);
}
  echo "Enviado correctamente";