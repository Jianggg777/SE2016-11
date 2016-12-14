<?php
require "dbconnect.php";
$oid = $_POST["oid"];
//將該筆交易狀態改成完成
$sql="update orders set status='end' where oid='$oid'";
$result1=mysqli_query($conn,$sql) or die("db error");
//交易沒完成--->price和now_uid=0時，退還卡片給賣家
$sql="SELECT now_price,cid,num,uid from orders where `oid`=$oid";
$result1=mysqli_query($conn,$sql) or die("db error2");
$rs=mysqli_fetch_assoc($result1);
if($rs['now_price']==0){//退還卡片
    $sql="update `inventory` SET `num`=$rs[num] WHERE `uid`=$rs[uid] and `cid`=$rs[cid]";
    $result1=mysqli_query($conn,$sql) or die("db error2333");
}
echo "$result1";
?>
