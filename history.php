<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <title>我的競價紀錄</title>
    <script type="text/javascript" src="./js/jquery-3.1.1.min.js"></script>
    <script type="text/javascript">
    </script>
</head>
<?php
    session_start();
    require("./php/dbconnect.php");
    $uid = mysqli_real_escape_string($conn,$_SESSION['uid']);
    $sql = "select orders.now_uid,user.name,orders.num,price,orders.cid,bid.time from bid,orders,user where bid.uid=$uid and bid.oid=orders.oid and user.uid=orders.uid and orders.status='end'";
    $result = mysqli_query($conn,$sql) or die("db error");  
?>
<style type="text/css">
/*----vmenu-style-start1-----*/
#vmenu li a {
    display: block;
    margin: 10px 0px 0px 10px;
    text-decoration: none;
    background-color: rgb(242, 237, 218);
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
#vmenu {
    position: absolute;
    top: 110px;
    left: 80%;
}
/*----vmenu-style-start2-----*/
.fond{position:absolute;padding-top:85px;top:10px;left:10px; right:10px;bottom:10px;
 background-color:#00506b;}

.style_prevu_kit
{
    font-size:20pt;
    display:inline-block;
    border:20px;
    text-align: center;
    line-height:100px;
    border-radius:20%;
    width:120px;
    height:70px;
    position: relative;
    -webkit-transition: all 200ms ease-in;
    -webkit-transform: scale(1); 
    -ms-transition: all 200ms ease-in;
    -ms-transform: scale(1); 
    -moz-transition: all 200ms ease-in;
    -moz-transform: scale(1);
    transition: all 200ms ease-in;
    transform: scale(1);   

}
.style_prevu_kit:hover
{
    box-shadow: 0px 0px 150px #000000;
    z-index: 2;
    -webkit-transition: all 200ms ease-in;
    -webkit-transform: scale(1.5);
    -ms-transition: all 200ms ease-in;
    -ms-transform: scale(1.5);   
    -moz-transition: all 200ms ease-in;
    -moz-transform: scale(1.5);
    transition: all 200ms ease-in;
    transform: scale(1.5);
}
/*----vmenu-style-end-------*/
/*----table-style-start------*/
table a:link {
    color: #666;
    font-weight: bold;
    text-decoration:none;
}
table a:visited {
    color: #999999;
    font-weight:bold;
    text-decoration:none;
}
table a:active,
table a:hover {
    color: #bd5a35;
    text-decoration:underline;
}
table {
    font-family:Microsoft JhengHei;
    color:#666;
    font-size:20px;
    text-shadow: 1px 1px 0px #fff;
    background:#eaebec;
    margin:20px;
    border:#ccc 1px solid;

    -moz-border-radius:3px;
    -webkit-border-radius:3px;
    border-radius:3px;

    -moz-box-shadow: 0 1px 2px #d1d1d1;
    -webkit-box-shadow: 0 1px 2px #d1d1d1;
    box-shadow: 0 1px 2px #d1d1d1;
}
table th {
    padding:21px 25px 22px 25px;
    border-top:1px solid #fafafa;
    border-bottom:1px solid #e0e0e0;

    background: #ededed;
    background: -webkit-gradient(linear, left top, left bottom, from(#ededed), to(#ebebeb));
    background: -moz-linear-gradient(top,  #ededed,  #ebebeb);
}
table th:first-child{
    text-align: left;
    padding-left:20px;
}
table tr:first-child th:first-child{
    -moz-border-radius-topleft:3px;
    -webkit-border-top-left-radius:3px;
    border-top-left-radius:3px;
}
table tr:first-child th:last-child{
    -moz-border-radius-topright:3px;
    -webkit-border-top-right-radius:3px;
    border-top-right-radius:3px;
}
table tr{
    text-align: center;
    padding-left:20px;
}
table tr td:first-child{
    text-align: left;
    padding-left:20px;
    border-left: 0;
}
table tr td {
    padding:18px;
    border-top: 1px solid #ffffff;
    border-bottom:1px solid #e0e0e0;
    border-left: 1px solid #e0e0e0;
    
    background: #fafafa;
    background: -webkit-gradient(linear, left top, left bottom, from(#fbfbfb), to(#fafafa));
    background: -moz-linear-gradient(top,  #fbfbfb,  #fafafa);
}
table tr.even td{
    background: #f6f6f6;
    background: -webkit-gradient(linear, left top, left bottom, from(#f8f8f8), to(#f6f6f6));
    background: -moz-linear-gradient(top,  #f8f8f8,  #f6f6f6);
}
table tr:last-child td{
    border-bottom:0;
}
table tr:last-child td:first-child{
    -moz-border-radius-bottomleft:3px;
    -webkit-border-bottom-left-radius:3px;
    border-bottom-left-radius:3px;
}
table tr:last-child td:last-child{
    -moz-border-radius-bottomright:3px;
    -webkit-border-bottom-right-radius:3px;
    border-bottom-right-radius:3px;
}
table tr:hover td{
    background: #f2f2f2;
    background: -webkit-gradient(linear, left top, left bottom, from(#f2f2f2), to(#f0f0f0));
    background: -moz-linear-gradient(top,  #f2f2f2,  #f0f0f0);  
}
/*----table-style-end------*/
/*----button-style-start------*/
.hot-container p { margin-top: 10px; }
a { text-decoration: none; margin: 0 10px; }

.hot-container {
    min-height: 100px;
    margin-top: 100px;
    width: 100%;
    text-align: center;
}

a.btn {
    display: inline-block;
    color: #666;
    background-color: #eee;
    text-transform: uppercase;
    letter-spacing: 2px;
    font-size: 12px;
    padding: 10px 30px;
    border-radius: 5px;
    -moz-border-radius: 5px;
    -webkit-border-radius: 5px;
    border: 1px solid rgba(0,0,0,0.3);
    border-bottom-width: 3px;
}

    a.btn:hover {
        background-color: #e3e3e3;
        border-color: rgba(0,0,0,0.5);
    }
    
    a.btn:active {
        background-color: #CCC;
        border-color: rgba(0,0,0,0.9);
    }
/*----button-style-end------*/
#banner {
    left: 40px;
}

ul {
    list-style-type: none;
}
#sa{
     display: block;
    /*margin: 10px 0px 0px 10px;*/
    /*text-decoration: none;*/
    background-color: #ace;
    height: 36px;
    width: 150px;
    text-indent: 20px;
    color: black;
    font-size: 15pt;
    line-height: 36px;
    border: 5px solid white;
    border-color: white #999 #999 white;
}
#sa:hover {
    cursor: pointer;
    background-color: #cae;
    color: white;
    border: 5px solid white;
    border-color: #999 white white #999;
}
#content {
    border-radius: 10px;
    width: 70%;
    border: 1px solid #ccc;
    left: 20px;
    margin: 40px 10px 10px 27px;
    padding: 20px;
    color:black;
    font-size: 20pt;
    font-family: Microsoft JhengHei;
}
#content2 {
    border-radius: 10px;
    width: 70%;
    border: 1px solid #ccc;
    left: 20px;
    margin: 40px 10px 10px 27px;
    padding: 20px;
    color:black;
    font-size: 20pt;
    font-family: Microsoft JhengHei;
}
.flipbox{
    background-color: rgba(0,0,0,0.6);
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    position: absolute;
    z-index: 1;
}
#flipcontainer{
    position: absolute;
    text-align: center;
    padding: 10px;
    width: 50%;
    height: 50%;
    top: 25%;
    right: 25%;
    border-radius: 10px;
    z-index: 2;
    background-color:rgba(255,255,255,1);
}
#moneyerr{
    color: red;
}
.hide{
    display: none;
}
#logout{
  position:absolute;
  font-size:20pt;
  font-family:Microsoft JhengHei;
  top:3%;
  left:90%;
}
#logout:hover
{
    box-shadow: 0px 0px 150px #000000;
    z-index: 2;
    -webkit-transition: all 200ms ease-in;
    -webkit-transform: scale(1.5);
    -ms-transition: all 200ms ease-in;
    -ms-transform: scale(1.5);   
    -moz-transition: all 200ms ease-in;
    -moz-transform: scale(1.5);
    transition: all 200ms ease-in;
    transform: scale(1.5);
}
#mainpage{
  position:absolute;
  font-size:20pt;
  font-family:Microsoft JhengHei;
  top:3%;
  left:85%;
}
#mainpage:hover
{
    box-shadow: 0px 0px 150px #000000;
    z-index: 2;
    -webkit-transition: all 200ms ease-in;
    -webkit-transform: scale(1.5);
    -ms-transition: all 200ms ease-in;
    -ms-transform: scale(1.5);   
    -moz-transition: all 200ms ease-in;
    -moz-transform: scale(1.5);
    transition: all 200ms ease-in;
    transform: scale(1.5);
}
body{
    font-family:Microsoft JhengHei;
    margin:0;
    padding:0;
    background: #000 url(./picture/bg1_1.jpg) center center fixed no-repeat;
    -moz-background-size: cover;
    background-size: cover;
}
/*---------btn_style_start---------*/
#buttons {
  padding-top: 10px;
  text-align: center;
  font-family:Microsoft JhengHei;
  text-shadow: 1px 1px #A9A9A9;
}
.btn {
  border-radius: 5px;
  padding: 15px 25px;
  font-size: 22px;
  text-decoration: none;
  margin: 5px;
  color: #fff;
  position: relative;
  display: inline-block;
}
.btn:active {
  transform: translate(0px, 5px);
  -webkit-transform: translate(0px, 5px);
  box-shadow: 0px 1px 0px 0px;
}
.yellow {
  background-color: #f1c40f;
  box-shadow: 0px 5px 0px 0px #D8AB00;
}
.yellow:hover {
  background-color: #FFDE29;
}
/*---------btn_style_end---------*/
</style>
<body>
    <div id="banner">
        <center>
            <h1 id="uinfo" >
<?php
echo $_SESSION['name'];
?>    的競價紀錄            
            </h1>
            <div id="money"></div>
            </center>
    </div>
    <a id="mainpage" href="./mainpage.php"><img src="./picture/home1.png" style="height:50px;width:50px;"></a>
    <a id="logout" href="./loginForm.php"><img src="./picture/logout.png" style="height:50px;width:50px;"></a>
    <div id="vmenu">
        <ul>
            <li><a href="./mycard.php" class="style_prevu_kit">我的卡片</a></li>
            <li><a href="myOrders.php" class="style_prevu_kit" >我的交易</a></li>
            <li><a onclick=sentmoney() class="style_prevu_kit">我要換錢</a></li>
        </ul>
    </div>
    <fieldset id="content" style="border-style:ridge;">
        <legend>競價紀錄</legend>
        <table border=3 cellpadding="5" align="left">
            <tr>
                <th>賣方</th>
                <th>卡片</th>
                <th>數量</th>
                <th>出價金額</th>
                <th>出價時間</th>
                <th>得標</th>
            </tr>
<?php
$i=0;
$cards= ["","白澤", "饕餮", "檮杌","畢方","精衛","水麒麟","帝江","狴犴","卡片禮包"];
while ( $rs=mysqli_fetch_assoc($result)) { 
    if($rs['name']=='-'){
        echo "<td>系統</td>";
    }else{
        echo "<td>$rs[name]</td>";
    }
    $cid=$rs['cid'];
    echo "<td>$cards[$cid]</td>";
    echo "<td>$rs[num]</td>";
    echo "<td>$rs[price]</td>";
    echo "<td>$rs[time]</td>";
    if($rs['now_uid']==$uid){
        echo "<td>得標</td></tr>";
    }else{
        echo "<td>未得標</td></tr>";
    }
    $i++;
}
?>
<?php

    $sql="select min(num) minmum,max(num) maxmun from inventory where uid=$uid " ;
    $result1=mysqli_query($conn,$sql) or die("db error");
    $rs=mysqli_fetch_assoc($result1);
    
?>
        </table>
        <div id="d" style="display:none">
            <img id="pic" align="left" style="position:relative;left:20px;">
            <span id="infomation" style="position:relative;left:20px;"></span>
        </div>
    </fieldset>
    <div class="flipbox hide" id='sell'>
        <div id="flipcontainer">
            
            <span >請輸入數量   </span>
            <form action="./php/sellmycard.php"  method="post" id="atable">
            <input id="data"  type="number" name="num" min="1"value=1 required="required" >
            <span >底價  </span>
            <input id="money" name="money" type="number" required="required">            
            <span>截止時間  </span>
            <input type="datetime-local" name="date" required="required">
            
            <input class="hide" name="cid" id="ddd" value=""></input>
            <input class="hide" name="uid" value="<?php echo  $uid ; ?>"></input>
            <div><input type="submit"></div>
            
            </form>
            <button onclick=removeflipbox()>取消</button>
            <h5 id="moneyerr" class="hide ">請確認價格</h5>
        </div>        


    </div>

        <div class="flipbox hide" id='turnmoney'>
        <div id="flipcontainer">
            
            <span >請輸入數量   </span>
            <form action="./turn.php"  method="post" id="btable">
            <input id="data2" type="number" name="num2" max=<?php echo $rs['minmum'] ?> min=0 value=0 required="required" >
            <input class="hide" name="uid" value="<?php echo $uid ; ?>"></input>
            <div><input type="submit" value="確定"></input></div>
            
            </form>
            <button onclick=removeflipbox()>取消</button>
            <h5 id="turnmoney" class="hide ">請確認數量</h5>
        </div>        


    </div>
<script language="javascript">
<?php 
echo 'var uid = "'.$_SESSION['uid'].'";';
echo 'var name = "'.$_SESSION['name'].'";';
?>
mymoney();
function mymoney(){
    $.ajax({
        url: "./php/money.php",
        dataType: 'html',
        type: 'POST',
        data: { "uid": uid }, //optional, you can send field1=10, field2='abc' to URL by this
        error: function(response) { //the call back function when ajax call fails
                console.log(response);
            },
        success: function(res) { //the call back function when ajax call succeed
                var d="目前擁有："+"<img src='./picture/coin.png' style='width:20px;'>"+res;
                $("#money").html(d);
            }
    });   
}
</script>
</body>

</html>
