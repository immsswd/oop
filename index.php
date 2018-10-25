<?php
try {
	require_once 'pdo-connect.php';
	$sql = "SELECT * FROM mahasiswa";
} catch (Exception $e) {
	echo $error = $e->getMessage();
}

foreach ($db->query($sql) as $row) {
	echo '<pre>';
	echo $row['email'];
	echo '</pre>';
}