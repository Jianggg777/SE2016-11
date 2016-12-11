<?php
require "dbconnect.php";
function checkUser($uID, $Pwd) {
	global $conn;
	$uID =mysqli_real_escape_string($conn,$uID);
	$sql = "select pwd,role,uid from user where name='$uID'";
	if ($result = mysqli_query($conn,$sql)) {
		if ($row=mysqli_fetch_assoc($result)) {
			if ($row['pwd'] === $Pwd) {
				json_encode($row);
				return $row;
			} 
		}
		return 99;
	}else{
		return -1;
	}
	
}



?>
