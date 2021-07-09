<?php
	include 'database.php';
	
    $sql = "SELECT `id`, `boyname`, `girlname`,`persentage` FROM `lovers`";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // output data of each row
     while($row = mysqli_fetch_assoc($result)) {
        echo "id: " . $row["id"]. " " . $row["boyname"]. " " . $row["girlname"]. " " . $row["persentage"]."<br>";
    }
    } else {
        echo "0 results";
    }

	// if (mysqli_query($conn, $sql)) {
	// 	echo json_encode(array("statusCode"=>200));
	// } 
	// else {
	// 	echo json_encode(array("statusCode"=>201));
	// }
	mysqli_close($conn);
?>