<?php

	$db = mysqli_connect('localhost','root','','medical');

	$query = $db->query("SELECT * FROM analysis_info");
	$result = array();

	while ($rowData = $query->fetch_assoc()) {
		$result[] = $rowData;
	}

	echo json_encode($result);
