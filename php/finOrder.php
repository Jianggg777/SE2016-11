<?php
require "dbconnect.php";
$oid = $_POST["oid"];

//將該筆交易狀態改成完成
$sql="update orders set status='end' where oid='$oid'";
$result1=mysqli_query($conn,$sql) or die("db error");
echo "$result1";
?>
