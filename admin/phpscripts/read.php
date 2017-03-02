<?php
function getAll($tbl) {
	require_once('connect.php');
	$queryAll = "SELECT * FROM {$tbl}";
	$runAll = mysqli_query($link, $queryAll);
	
	if($runAll) {
		return $runAll;
	}else{
		$error = "There is a problem with the system please contact your web admin.";
		return $error;
	}
}





?>