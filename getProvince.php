<?php
	$pays = $_GET['pays'];

	require_once 'dbconfig.inc.php';
	$conn = mysqli_connect($host, $user, $password, $dbResidence);
	mysqli_set_charset($conn, "utf8");
	$query = "SELECT * from provinces WHERE pays_id={$pays}";

	$result = mysqli_query($conn, $query);

	while($row = mysqli_fetch_assoc($result))
	{
		$provid = $row['id'];
		$provnom = $row['name'];

		$arrayProv[ ] = array("id" => $provid, "province" => $provnom);
	}

	echo json_encode($arrayProv);

	mysqli_close($conn);
?>