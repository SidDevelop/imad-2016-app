<?php

include 'datab/db.php';

$sql="SELECT * FROM class";
$result = $conn->query($sql);
if ($result->num_rows > 0) {		
		while($row= $result->fetch_assoc()){
			$dataArray[]=$row;
		}
		//print_r($dataArray);
		echo json_encode($dataArray);
		
	} else {
		echo "Username or password wrong";
	}
$conn->close();

?>