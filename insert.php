<?php
try {
	require_once 'pdo-connect.php';
	$sql = "INSERT INTO mahasiswa (nama, username, jk, alamat) VALUES ('Dina', 'dina23', 'dina@mail.com', 'Jl. Asparaga No.32')";
	// $exec = $db->query($sql);

	$errorInfo = $db->errorInfo();
	if (isset($errorInfo[2])) {
		$error = $errorInfo[2];
	}
} catch (Exception $e) {
	echo $error = $e->getMessage();
}
	if (isset($error)) {echo 'Error: '.$error;}

	var_dump($errorInfo);