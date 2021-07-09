<?php
	include 'database.php';
	$boyname=$_POST['boyname'];
	$girlname=$_POST['girlname'];
    $persentage=$_POST['persentage'];
	$sql = "INSERT INTO `lovers`( `boyname`, `girlname`,`persentage`) 
	VALUES ('$boyname','$girlname','$persentage')";
	if (mysqli_query($conn, $sql)) {
		echo json_encode(array("statusCode"=>200));
	} 
	else {
		echo json_encode(array("statusCode"=>201));
	}
	mysqli_close($conn);
?>