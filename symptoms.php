<?php

$db = mysqli_connect("localhost", "root", "", "medical");



	$diseases_Name = $_POST['diseases_Name'];

	$query = $db->query("SELECT * FROM symptoms where diseases_Name = '".$diseases_Name."'");
	$result = array();

	while ($rowData = $query->fetch_assoc()) {
		$result[] = $rowData;
	}

	echo json_encode($result);
