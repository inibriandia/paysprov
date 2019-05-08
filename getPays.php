<?php
	require_once 'dbconfig.inc.php';
	$conn = mysqli_connect($host, $user, $password, $dbResidence);
	mysqli_set_charset($conn, "utf8");
	$query = "SELECT * from pays";

	$result = mysqli_query($conn, $query);

	while($row = mysqli_fetch_assoc($result))
	{
		$paysid = $row['id'];
		$paysNom = $row['name'];

		$arrayPays[ ] = array("id" => $paysid, "pays" => $paysNom);
	}

	echo json_encode($arrayPays);

	mysqli_close($conn);
?>