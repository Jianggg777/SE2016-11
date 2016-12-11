<?php
	require "dbconnect.php";
	$uid = mysqli_real_escape_string($conn,$_POST["uid"]);
	$sql="select money from user where uid=$uid";
	$result=mysqli_query($conn,$sql) or die("db error");
	if($rs=mysqli_fetch_assoc($result)){
		$money=$rs['money'];
	}
	echo $money;
?>
