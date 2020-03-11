<?php

include 'koneksi.php';

$sql = "INSERT INTO buku_tamu (nama,email,isi)
VALUES('Khusnia', 'khusnianur.07@gmail.com', 'menemui client')";

if (mysqli_query($conn, $sql)) {
	echo "New record created succesfully";
} else {
	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>