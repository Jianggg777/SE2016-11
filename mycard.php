<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <title>我的卡片</title>
    <script type="text/javascript" src="./js/jquery-3.1.1.min.js"></script>
    <script type="text/javascript">
        removeflipbox=()=>{
            $('#sell').addClass('hide');

            $('#turnmoney').addClass('hide');
        }
        sentbid=(a,b)=> {
                $('#sell').removeClass('hide');
                $('#sell').height( $(document).height());
                $('#data').attr('max',b);
                $('#ddd').attr("value",a);
            }
        sentmoney=(b)=> {
                $('#data2').attr('max',b);
                $('#turnmoney').height( $(document).height());
                $('#turnmoney').removeClass('hide');
              
            }

    </script>
</head>
<?php
    session_start();
    require("./php/dbconnect.php");
    $uid = mysqli_real_escape_string($conn,$_SESSION['uid']);
    $sql = "select card.cid,card.name,inventory.num from inventory,card where uid=$uid and inventory.cid=card.cid";
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
.flipbox{
    background-color: rgba(0,0,0,0.94);
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
#flipcontainer>form{
    display: flex;
    flex-direction: column;
}

#flipcontainer>form>input{
flex: 1;
}
#money{
    color: red;
}
#moneyerr{
    color: red;
}
.hide{
    display: none;
}
#vmenu a:hover {
    background-color: gray;
    color: white;
    border: 5px solid white;
    border-color: #999 white white #999;
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
    width: 50%;
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
    left: 80%;
}

</style>
<body>
    <div id="banner">
        <center>
            <h1 id="uinfo">
<?php
echo $_SESSION['name'];
?>    的卡片列表            
            </h1>
            <div id="money"></div>
            </center>
    </div>
    <a href="./mainpage.php">回首頁</a>
    <a href="./loginForm.php">登出</a>
    <div id="vmenu">
        <ul>
            <li><a href="myOrders.php" >我的交易</a></li>
            <li><a onclick=sentmoney()>我要換錢</a></li>
            <li><a href="#case">競標紀錄</a></li>
        </ul>
    </div>
    <fieldset id="content">
        <legend>卡片列表</legend>
        <table border=3 cellpadding="5">
            <tr>
                <th>卡片種類</th>
                <th>數量</th>
                <th>賣出</th>
            </tr>
<?php
while ( $rs=mysqli_fetch_assoc($result)) {
    echo "<tr><td>$rs[name]</td>";
    echo "<td>$rs[num]</td>";
    if($rs['num']>0){
        echo "<td><span id='sa' onclick=sentbid($rs[cid],$rs[num])>賣</span></td></tr>";
    }else{
        echo "<td></td></tr>";
    }
}
?>
<?php

    $sql="select min(num) minmum,max(num) maxmun from inventory where uid=$uid " ;
    $result1=mysqli_query($conn,$sql) or die("db error");
    $rs=mysqli_fetch_assoc($result1);
    
?>



        </table>
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
            <input type="submit">
            
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
            <input type="submit" value="確定"></input>
            
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
                var d="目前擁有："+res+"元";
                $("#money").html(d);
            }
    });   
}
</script>
</body>

</html>
