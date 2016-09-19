<?php

include 'datab/db.php';
$subject=$_GET["subject"];
$homework=$_GET["homework"];
$date=$_GET["date"];
$duedate=$_GET["duedate"];
$class=$_GET["classid"];
$section=$_GET["section"];
$help=$_GET["help"];
$teacher=$_GET["teacher"];
$sql="INSERT INTO homework (classid,section,date,subject,homework,duedate,help,teacher) VALUES ('$class','$section','$date','$subject','$homework','$duedate','$help','$teacher')";
$result = $conn->query($sql);
	if ($result === TRUE) {		
		echo "1";
	} else {
		echo "Homework Not Added. Please Try Again";
	}
	$conn->close();
	
?>