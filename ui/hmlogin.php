<?php
	include 'datab/db.php';
	$username=$_GET["username"];
	$password=$_GET["password"];
	$sql="SELECT * FROM user_detail WHERE username='$username' AND password='$password'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {		
		echo "1";
	} else {
		echo "Username or password wrong";
	}
	$conn->close();
	?>
