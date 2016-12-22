<?php
	require "./dbconnect.php";
	// $num = mysqli_real_escape_string($conn,$_POST["num"]);
	$num2=mysqli_real_escape_string($conn,$_POST["num2"]);
	$uid=mysqli_real_escape_string($conn,$_POST["uid"]);
	$sql="select num ,min(num) aa from inventory where uid=$uid " ;
	$result1=mysqli_query($conn,$sql) or die("db 4");
	$rs=mysqli_fetch_assoc($result1);
	if($rs['aa']>=$num2 && (int)$num2!=0) 
	{
		$sql="UPDATE `inventory` SET `num`=(num-$num2)WHERE `uid`=$uid " ;
		$result1=mysqli_query($conn,$sql) or die("db 44");
		$sql="select money from user where uid=$uid " ;
		$result1=mysqli_query($conn,$sql) or die("db error");
		$rs=mysqli_fetch_assoc($result1);
		$mm=800*$num2;
		$sql="UPDATE `user` SET `money`=($rs[money]+$mm)WHERE `uid`=$uid " ;
		$result1=mysqli_query($conn,$sql) or die("db error");
	}
	else{
		echo"無法兌換這個數量!";
	}
	header("Location: ../mycard.php"); 
	echo "$result1";
?>