<?php

include 'datab/db.php';
$classid=$_GET["classid"];
$sql="SELECT * FROM homework WHERE classid='$classid'";
$result = $conn->query($sql);
$dataArray=array();
while($row= $result->fetch_assoc()){
	$dataArray[]=$row;
}
echo json_encode($dataArray);	
$conn->close();
?>