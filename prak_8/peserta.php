// Nur Hikmah Juliyanti
// 121140137 RC

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "prak_8";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
