


<?php




$servername = 'mysql-78952-0.cloudclusters.net';
$username = 'admin';
$password = 'FVmO5y4E';
$dbname   = 'ocas';
$dbServerPort = '16898';

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname, $dbServerPort,);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

