<?php
require "dbconnect.php";
$uid=$_POST['uid'];
$sql="select orders.now_uid as buyer,orders.uid as seller,card.cid,orders.oid,card.name as cname,orders.num,orders.lowprice,orders.time,orders.now_price as price,user.name
from bid,orders,card,user
where orders.status='ing' and bid.oid=orders.oid and bid.uid=1 and card.cid=orders.cid and user.uid=orders.now_uid
ORDER BY orders.time ASC,TIME DESC
";
$result=mysqli_query($conn,$sql) or die("db error");
$rows = array();
$i=0;
while($r = mysqli_fetch_assoc($result)) {
    $rows[$i] = $r;
    $i++;
}
echo json_encode($rows);
?>
