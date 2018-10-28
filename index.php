<?php
try {
	require_once 'pdo-connect.php';
	$sql = "SELECT * FROM mahasiswa";
	// $rows = $db->query($sql);
	$result = $db->query($sql);
	// $all = $result->fetchAll(PDO::FETCH_ASSOC);
	$all = $result->fetchAll(PDO::FETCH_NUM);
	$errorInfo = $db->errorInfo();
	if (isset($errorInfo[2])) {
		$error = $errorInfo[2];
	}
} catch (Exception $e) {
	echo $error = $e->getMessage();
}
	if (isset($error)) {
		echo 'Error: '.$error;
	}

// while ($row = $result->fetch(PDO::FETCH_OBJ)) {
//     echo $row->nama."<br>";
// }
echo '<pre>';
print_r($all);
echo '</pre>';