<?php
require("dbconnect.php");

function checkUser($uID, $Pwd) {
	global $conn;
	$uID =mysqli_real_escape_string($conn,$uID);
	$sql = "SELECT pwd,role FROM user WHERE name='$uID'";
	if ($result = mysqli_query($conn,$sql)) {
		if ($row=mysqli_fetch_assoc($result)) {
			if ($row['pwd'] === $Pwd) {
				//return role ID
				return $row['role'];
			} 
		}
	}
	//-1 ==> fail
	return -1;
}



?>
