<?php
$servername = "fdb1034.awardspace.net"; 
$username   = "4727807_kinder";          
$password   = "123456789abcd";          
$dbname     = "4727807_kinder";          

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}
?>