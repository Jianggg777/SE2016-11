<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <title>歡迎來到競標網站</title>
</head>
<?php
    session_start();
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
<script type="text/javascript" src="./js/jquery-3.1.1.min.js"></script>
<script language="javascript">
//php session 給 js使用
<?php 
echo 'var uid = "'.$_SESSION['uid'].'";';
echo 'var name = "'.$_SESSION['name'].'";';
?>
console.log(uid)
loadInfo();
mymoney();
var i=name;
i+="！歡迎來到競標平台";
$("#uinfo").html(i);
var jsdata;
var cards= ["白澤", "饕餮", "檮杌","畢方","精衛","水麒麟","帝江","狴犴"];
//動態顯示交易資訊
function loadInfo() {
    $.ajax({
        url: './php/loadOrder.php',
        dataType: 'html',
        type: 'POST',
        error: function(response) { //the call back function when ajax call fails
            alert('Ajax request failed!');
        },
        success: function(json) { //the call back function when ajax call succeed
            //board
            jsdata = jQuery.parseJSON(json);//轉成js能用的
            var data="<tr><th>卡片</th><th>數量</th><th>底價</th><th>剩餘時間(sec)</th><th>目前得標者</th><th>目前得標金額</th><th>競標</th></tr><tr>"
            for(var i=0;i<jsdata.length;i++){
                data+="<td>"+jsdata[i].cname+"</td><td>"+jsdata[i].num+"</td><td>"+jsdata[i].lowprice+"</td>";
                now= new Date();
                tday=new Date(jsdata[i]['time']);
                time=Math.floor((tday-now)/1000)
                if(time<=0){
                    checkSale(jsdata[i]);
                    data+="<td>0</td>";
                }else{
                    data+="<td>"+time+"</td>";
                }
                data+="<td>"+jsdata[i].name+"</td><td>"+jsdata[i].price+"</td>";
                if(uid==jsdata[i].seller){
                    data+="<td></td></tr>"
                }else{
                    data+="<td><a href='bid.php?uid="+uid+"'>競價</a></td></tr>"
                }
            }
            $("#board").html(data);
            //userinfo
            var userinfo="";
            userinfo=name+"！歡迎來到競標平台";
            $("#uinfo").html(userinfo);
        }
    });
}
//檢查交易
function checkSale(obj){
    //交易完成
    $.ajax({
        url: "./php/finOrder.php",
        dataType: 'json',
        type: 'POST',
        data: { "oid": obj.oid }, //optional, you can send field1=10, field2='abc' to URL by this
        error: function(response) { //the call back function when ajax call fails
                console.log(response);
                console.log("n",uid);
            },
        success: function(res) { //the call back function when ajax call succeed
                console.log(res);
                console.log("y",sessionStorage['uid']);
            }
    });
    //處理交易
    if(obj.seller==uid||obj.buyer==uid){//是賣方或買方
        if(Number(obj.lowprice)<=Number(obj.price)){//有人出價
            console.log(obj)
            var info;
            $.ajax({
                url: "./php/setOrder.php",
                dataType: 'json',
                type: 'POST',
                data: { "num":obj.num ,"buyer":obj.buyer ,"price":obj.price ,"seller": obj.seller,"cid":obj.cid},
                error: function(response) { //the call back function when ajax call fails
                        console.log(response);
                    },
                success: function(res) { //the call back function when ajax call succeed
                        var info="恭喜您，";
                        if(obj.seller==uid){//賣方
                            info+="賣掉"+obj.cname+"卡"+obj.num+"張，共獲得"+obj.price+"元";
                        }else if(obj.buyer==uid){//買方
                            if(Number(obj.cid)==9){
　                              var c = res.toString().split("");
                                info+="得標到卡片禮包(*3)，內含："+cards[c[0]]+" "+cards[c[1]]+" "+cards[c[2]];
                            }else{
                                info+="得標到"+obj.cname+"卡"+obj.num+"張，總共"+obj.price+"元";
                            }
                        }
                        alert(info);
                        mymoney();
                    }
            });
        }
    }
}
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
window.onload = function () {
    //每秒檢查
    setInterval(function () {
        loadInfo();
    }, 1000);
};

</script>

<body>
    <div id="banner">
        <center>
            <h1 id="uinfo"></h1>
            <div id="money"></div>
        </center>
    </div>
    <div id="vmenu">
        <ul>
            <li><a href="./mycard.php">我的卡片</a></li>
            <li><a href="#ppt">我要換錢</a></li>
            <li><a href="#case">競標紀錄</a></li>
        </ul>
    </div>
    <fieldset id="content">
        <legend>競標平台</legend>
        <table border=3 cellpadding="5" id="board">
        </table>
    </fieldset>
</body>

</html>
