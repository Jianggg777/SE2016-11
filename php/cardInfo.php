<?php
require "dbconnect.php";
$cid=$_POST['cid'];
$sql="select info from card where cid=$cid";
$result=mysqli_query($conn,$sql) or die("db error");
$rs=mysqli_fetch_assoc($result);
echo json_encode($rs['info']);
?>