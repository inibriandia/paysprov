<?php
	if (isset($_GET['pays'])){
		$pays = $_GET['pays'];

		require_once 'dbconfig.inc.php';
		$conn = mysqli_connect($host, $user, $password, $dbResidence);
		mysqli_set_charset($conn, "utf8");
		$query = "SELECT * from provinces WHERE pays_id={$pays}";

		$result = mysqli_query($conn, $query);

		// Vérifier si la base de donnee retourne au moins un enregistrement avec l'ID donne
		if(mysqli_num_rows($result)>0){
			while($row = mysqli_fetch_assoc($result))
			{
				$provid = $row['id'];
				$provnom = $row['name'];

				$arrayProv[ ] = array("id" => $provid, "province" => $provnom);
			}
			
		}else{
			$arrayProv[ ] = array("id" => 'N/A', "province" => 'N/A');
		}

		echo json_encode($arrayProv);

		mysqli_close($conn);
	}
?>