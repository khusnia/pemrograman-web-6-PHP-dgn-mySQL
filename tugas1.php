<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";

//create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// check connecttion
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}

$sql = "CREATE TABLE buku_tamu (
id_bt INT(10)  UNSIGNED AUTO_INCREMENT PRIMARY KEY,
nama VARCHAR(200) NOT NULL,
email VARCHAR(50) NOT NULL,
isi text)";

if(mysqli_query($conn, $sql)) {
	echo "New Record created succesfully";
} else {
	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>