<?php
	require "dbconnect.php";
	$uid = mysqli_real_escape_string($conn,$_POST["name"]);
    $pwd = mysqli_real_escape_string($conn,$_POST["pwd"]);
   
	$sql="INSERT INTO `user`( `name`, `pwd`, `money`, `role`) VALUES ('$uid','$pwd',1000,'player')";
	$result1=mysqli_query($conn,$sql) or die("db error");
    $sql="select uid from user where name='$uid' " ;
    $result1=mysqli_query($conn,$sql) or die("db error23");
    $rs=mysqli_fetch_assoc($result1);
    $a=(int)$rs['uid'];
    // echo $a;
    $sql="INSERT INTO `inventory`( `uid`, `cid`,`num`) VALUES ($a,1,0)";
    $result1=mysqli_query($conn,$sql) or die("db error");
    $sql="INSERT INTO `inventory`( `uid`, `cid`,`num`) VALUES ($a,2,0)";
    $result1=mysqli_query($conn,$sql) or die("db error");
    $sql="INSERT INTO `inventory`( `uid`, `cid`,`num`) VALUES ($a,3,0)";
    $result1=mysqli_query($conn,$sql) or die("db error");
    $sql="INSERT INTO `inventory`( `uid`, `cid`,`num`) VALUES ($a,4,0)";
    $result1=mysqli_query($conn,$sql) or die("db error");
    $sql="INSERT INTO `inventory`( `uid`, `cid`,`num`) VALUES ($a,5,0)";
    $result1=mysqli_query($conn,$sql) or die("db error");
    $sql="INSERT INTO `inventory`( `uid`, `cid`,`num`) VALUES ($a,6,0)";
    $result1=mysqli_query($conn,$sql) or die("db error");
    $sql="INSERT INTO `inventory`( `uid`, `cid`,`num`) VALUES ($a,7,0)";
    $result1=mysqli_query($conn,$sql) or die("db error");
    $sql="INSERT INTO `inventory`( `uid`, `cid`,`num`) VALUES ($a,8,0)";
    $result1=mysqli_query($conn,$sql) or die("db error8");

	echo"恭喜註冊成功!";
    echo "<a href='../loginForm.php'>首頁</a>";

?>