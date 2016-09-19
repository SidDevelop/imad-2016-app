<?php
include 'datab/db.php';
$rating=$_GET["rating"];
$sql="INSERT INTO rating (rating) VALUES ('$rating')";
$result = $conn->query($sql);
	if ($result === TRUE) {		
		echo "1";
	} else {
		echo "Pls Try Again";
	}
	$conn->close();
	
?>