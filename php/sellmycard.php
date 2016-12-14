<?php
	require "dbconnect.php";
	$num = mysqli_real_escape_string($conn,$_POST["num"]);
	$money= mysqli_real_escape_string($conn,$_POST["money"]);
	$cid=mysqli_real_escape_string($conn,$_POST["cid"]);
	$uid=mysqli_real_escape_string($conn,$_POST["uid"]);
	$date1=mysqli_real_escape_string($conn,$_POST["date"]);
	$date="'".date('Y-m-d-H:i', strtotime(str_replace('-', '/', $_POST['date'])))."'";
	$sql="insert into orders ( uid, cid, num, lowprice, time, status, now_price, now_uid)VALUES(
		$uid,$cid,$num,$money,$date,'ing',0,0
		)" ;
		
	$result1=mysqli_query($conn,$sql) or die("db error");
	$sql="select num from inventory where uid=$uid and`cid`=$cid " ;
	$result1=mysqli_query($conn,$sql) or die("db error");
	$rs=mysqli_fetch_assoc($result1);

	$sql="UPDATE `inventory` SET `num`=($rs[num]-$num)WHERE `uid`=$uid and`cid`=$cid" ;
	$result1=mysqli_query($conn,$sql) or die("db error1111");

	header("Location: ../mycard.php"); 
	//echo "$result1";
?>
