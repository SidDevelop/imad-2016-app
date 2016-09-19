<?php
include 'datab/db.php';
$sql="SELECT * FROM homework";
$dataArray=array();
$result = $conn->query($sql);
while($row= $result->fetch_assoc()){
	$dataArray[]=$row;
}
//print_r($dataArray);
echo json_encode($dataArray);
$conn->close();
?>