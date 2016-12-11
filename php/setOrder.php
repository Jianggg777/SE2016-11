<?php
require "dbconnect.php";
$buyer = $_POST["buyer"];
$price = $_POST["price"];
$cid = $_POST["cid"];
$num = $_POST["num"];
$seller = $_POST["seller"];
//增減與此交易有關的買賣家的金錢/倉庫
if($cid==9){//禮包
	$c1=rand(1,8);
	$c2=rand(1,8);
	$c3=rand(1,8);
	$sql="update user,inventory set user.money=user.money-$price,inventory.num=inventory.num+1  where user.uid=inventory.uid and user.uid=$buyer and inventory.cid=$c1";
	$result=mysqli_query($conn,$sql) or die("db error");  
	$sql="update user,inventory set inventory.num=inventory.num+1  where user.uid=inventory.uid and user.uid=$buyer and inventory.cid=$c2";
	$result2=mysqli_query($conn,$sql) or die("db error");    
	$sql="update user,inventory set inventory.num=inventory.num+1  where user.uid=inventory.uid and user.uid=$buyer and inventory.cid=$c3";
	$result3=mysqli_query($conn,$sql) or die("db error");  
	$result="$c1$c2$c3";
}else{
	$sql="update user,inventory set user.money=user.money-$price,inventory.num=inventory.num+$num  where user.uid=inventory.uid and user.uid=$buyer and inventory.cid=$cid";//買家
	$result4=mysqli_query($conn,$sql) or die("db error");
	$sql="update user,inventory set user.money=user.money+$price,inventory.num=inventory.num-$num  where user.uid=inventory.uid and user.uid=$seller and inventory.cid=$cid";//賣家
	$result=mysqli_query($conn,$sql) or die("db error");
}
echo "$result";
?>
