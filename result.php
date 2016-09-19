<?php
include 'datab/db.php';
$result=$_GET["result"];
$reason=$_GET["reason"];
$sql="INSERT INTO result (result,reason) VALUES ('$result','$reason')";
$result = $conn->query($sql);
	if ($result === TRUE) {		
		echo "1";
	} else {
		echo "Server error. Pls try again later.";
	}
	$conn->close();
?>