<?php
try {
	require_once 'pdo-connect.php';
	$sql = "SELECT * FROM mahasiswa";
	$rs = $db->query($sql);
	$errorInfo = $db->errorInfo();

	if (isset($errorInfo[2])) {
		$error = $errorInfo[2];
	}

} catch (Exception $e) {
	echo $error = $e->getMessage();
}

while ($column = $rs->fetchColumn(4)) {
    echo '<table border="0" cellspacing="10" cellpadding="9">';
    echo '<tr>';
    echo '<th></th>';
    echo '</tr>';
    echo '<tr>';
    echo '<td>Emails: '.$column.'</td>';
    echo '</tr>';
    echo '</table>';
}