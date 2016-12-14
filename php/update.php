<?php
	require "dbconnect.php";
	$uid = mysqli_real_escape_string($conn,$_POST["uid"]);
	$money= mysqli_real_escape_string($conn,$_POST["data"]);
	$oid=mysqli_real_escape_string($conn,$_POST["oid"]);
	$sql="update orders set now_uid=$uid,now_price=$money where oid=$oid";
	$result1=mysqli_query($conn,$sql) or die("db error");
	//寫進bid
    //是否曾出過價
    $sql="SELECT price from bid where `oid`=$oid and `uid`=$uid";
    $result1=mysqli_query($conn,$sql) or die("db error2");
    $rs=mysqli_fetch_assoc($result1);
    $datetime = date ("Y-m-d H:i:s" , mktime(date('H')+7, date('i'), date('s'), date('m'), date('d'), date('Y'))); 
    echo "$rs[price]"; 
    if($rs['price']>0){//曾出過價--->update
        $sql="UPDATE `bid` SET `price`=$money,`time`='$datetime' WHERE `oid`=$oid and `uid`=$uid";
    }else{//沒出過價--->insert
		$sql="insert into bid(oid, uid, price, time) VALUES ($oid,$uid,$money,'$datetime')";//寫進bid
    }
	$result1=mysqli_query($conn,$sql) or die("  db erro1111r");
?>
