<?php
require "dbconnect.php";
$uid=$_POST['uid'];
$sql="select card.name as cname,orders.lowprice,orders.num,orders.now_uid as buyer,orders.time,user.name,orders.now_price as price,orders.uid as seller ,orders.oid,orders.cid from card,orders,user where card.cid=orders.cid and user.uid=orders.now_uid and orders.status='ing' and orders.uid=$uid ORDER BY orders.time ASC,TIME DESC";
$result=mysqli_query($conn,$sql) or die("db error");
$rows = array();
$i=0;
while($r = mysqli_fetch_assoc($result)) {
    $rows[$i] = $r;
    $i++;
}
echo json_encode($rows);
?>
