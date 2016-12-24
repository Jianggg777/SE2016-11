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
    border-width:10px; 
    border-radius: 10px;
    width: 70%;
    border: 1px solid #ccc;
    top: 70px;
    left: 20px;
    margin: 40px 10px 10px 27px;
    text-shadow: 2px 2px rgb(192, 189, 165);
    padding: 20px;
    font-size: 20pt;
    position: absolute;
    font-family:Microsoft JhengHei;
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
body{
    font-family:Microsoft JhengHei;
    margin:0;
    padding:0;
    background: #000 url(./picture/bg3.jpg) center center fixed no-repeat;
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
var gg=0,cc,ll;
i+="！歡迎來到競標平台";
$("#uinfo").html(i);
var jsdata;
var cards= ["","白澤", "饕餮", "檮杌","畢方","精衛","水麒麟","帝江","狴犴"];
var ownmoney;

//動態顯示交易資訊
function sentbid(aa,bb,ee) { //oid price
    gg=aa;
    cc=bb;   
    ll=ee;
    $('.flipbox').height( $(document).height());
    $('.flipbox').removeClass('hide');
    $('#moneyerr').addClass('hide');
}

function loadInfo() {
    $.ajax({
        url: './php/loadOrder.php',
        dataType: 'html',
        type: 'POST',
        error: function(response) { //the call back function when ajax call fails
            //alert('Ajax request failed!');
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
                    data+=`<td><input id='buttons' class='btn yellow' type=button value=競價 onclick=sentbid(${jsdata[i].oid},${jsdata[i].price},${jsdata[i].lowprice})></td></tr>`
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
        data: { "oid": obj.oid,"num":obj.num ,"buyer":obj.buyer ,"price":obj.price ,"seller": obj.seller,"cid":obj.cid},
        error: function(response) { //the call back function when ajax call fails
                console.log(response);
                console.log("n",uid);
            },
        success: function(res) { //the call back function when ajax call succeed
                console.log("res",res);
                //處理交易
                if(obj.seller==uid||obj.buyer==uid){//是賣方或買方
                    if(obj.price!=0){
                        var info;
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
                }
            }
    });
}

sentdata=()=>{
    data=parseInt($('input#data').val());
    if(data<=cc||data<ll||data>ownmoney){
        $("#moneyerr").removeClass("hide")
    }
    console.log("own",ownmoney)
    if(typeof data==="number"&&!isNaN(data)&&data>cc&&data>=ll&&data<=ownmoney)
    {
        $.ajax({
        url: "./php/update.php",
        dataType: 'json',
        type: 'POST',
        data: { "uid": uid ,"data":data,"oid":gg}, //optional, you can send field1=10, field2='abc' to URL by this
        error: function(response) { //the call back function when ajax call fails
                console.log(response);
            },
        success: function(res) { //the call back function when ajax call succeed
                console.log(res)
                
            }
    });   
         removeflipbox();
    }
}

removeflipbox=()=>{
    $('.flipbox').addClass('hide');

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
                ownmoney=parseInt(res);
                var d="目前擁有："+"<img src='./picture/coin.png' style='width:20px;'>"+res;
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
            <h1 id="uinfo" ></h1>
            <div id="money"></div>
        </center>
    </div>
    <a id="logout" href="./loginForm.php"><img src="./picture/logout.png" style="height:50px;width:50px;"></a>
    <div class="flipbox hide">
        <div id="flipcontainer">        
            <span>請輸入價格</span>
            <input id="data" type="text"></input>
            <button onclick=sentdata()>送出</button>
            <button onclick=removeflipbox()>取消</button>
            <h5 id="moneyerr" class="hide ">請確認價格</h5>
        </div>        
    </div>
    <div id="vmenu">
        <ul>
            <li><a href="./mycard.php" class="style_prevu_kit">我的卡片</a></li>
            <li><a href="myOrders.php" class="style_prevu_kit">我的交易</a></li>
            <li><a href="./history.php" class="style_prevu_kit">交易紀錄</a></li>
        </ul>
    </div>
    <fieldset id="content" style="border-style:ridge;">
        <legend>競標平台</legend>
        <table border=3 cellpadding="5" id="board">
        </table>
    </fieldset>
</body>

</html>
