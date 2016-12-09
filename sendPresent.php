<?php
require "dbconnect.php";
//隨機時間
$datetime = date ("Y-m-d H:i:s" , mktime(date('H')+7, date('i'), date('s'), date('m'), date('d'), date('Y'))) ; 
$m=rand(5,20);
$time = date("Y-m-d H:i:s",strtotime("$datetime   +$m   minutes"));
//日期天数相加函数
//隨機底價
$price=rand(50,200);
$sql="insert into orders(uid, cid, num, lowprice, time, status, now_price, now_uid) values (0,9,1,$price,'$time','ing',0,0)";
$result=mysqli_query($db,$sql) or die("db error");
echo "$result";
?>