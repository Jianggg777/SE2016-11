<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <title>我的卡片</title>
</head>
<?php
    session_start();
    require("dbconnect.php");
    $uid = mysqli_real_escape_string($conn,$_SESSION['uid']);
    $sql = "select card.name,inventory.num from inventory,card where uid=$uid and inventory.cid=card.cid";
    $result = mysqli_query($conn,$sql) or die("db error");  
?>
<style type="text/css">
#banner {
    left: 40px;
}

ul {
    list-style-type: none;
}

#vmenu li a {
    display: block;
    margin: 10px 0px 0px 10px;
    text-decoration: none;
    background-color: white;
    height: 36px;
    width: 150px;
    text-indent: 20px;
    color: black;
    font-size: 15pt;
    line-height: 36px;
    border: 5px solid white;
    border-color: white #999 #999 white;
}

#vmenu li a {
    font-size: 16pt;
    font-family: 標楷體;
}

#vmenu a:hover {
    background-color: gray;
    color: white;
    border: 5px solid white;
    border-color: #999 white white #999;
}

#content {
    border-radius: 10px;
    width: 1000px;
    border: 1px solid #ccc;
    top: 40px;
    left: 20px;
    margin: 40px 10px 10px 27px;
    padding: 20px;
    font-size: 20pt;
    position: absolute;
    font-family: 標楷體;
}

#vmenu {
    position: absolute;
    top: 60px;
    left: 1350px;
}
</style>
<body>
    <div id="banner">
        <center>
            <h1 id="uinfo">
<?php
echo $_SESSION['name'];
?>    的卡片列表            
            </h1></center>
    </div>
    <div id="vmenu">
        <ul>
            <li><a href="#member">即時競標</a></li>
            <li><a href="#ppt">我要換錢</a></li>
            <li><a href="#case">競標紀錄</a></li>
        </ul>
    </div>
    <fieldset id="content">
        <legend>競標平台</legend>
        <table border=3 cellpadding="5">
            <tr>
                <th>卡片種類</th>
                <th>數量</th>
                <th>賣出</th>
            </tr>
<?php
while ( $rs=mysqli_fetch_assoc($result)) {
    echo "<tr><td>$rs[name]</td>";
    echo "<td>$rs[name]</td>";
    echo "<td><a href='hire.php?account=" . $rs['account'] . "'>雇用</a></td></tr>";
    }
?>
            <tr>
                <td>A</td>
                <td>10</td>
                <td><a href>賣出</a></td>
            </tr>
            <tr>
                <td>A</td>
                <td>10</td>
                <td><a href>賣出</a></td>
            </tr>
            <tr>
                <td>A</td>
                <td>10</td>
                <td><a href>賣出</a></td>
            </tr>
        </table>
    </fieldset>
</body>

</html>
