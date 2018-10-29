<?php
try {
	require_once 'pdo-connect.php';
	$sql = "SELECT * FROM mahasiswa";
	$result = $db->query($sql);
	$count 	= $result->rowCount();

	$errorInfo = $db->errorInfo();
	if (isset($errorInfo[2])) {
		$error = $errorInfo[2];
	}
} catch (Exception $e) {
	echo $error = $e->getMessage();
}
	if (isset($error)) {echo 'Error: '.$error;}

echo 'Jumlah Row dalam table mahasiswa adalah: '. $count;