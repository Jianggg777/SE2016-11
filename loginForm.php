<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
<title>登入</title>
<script type="text/javascript" src="./js/jquery-3.1.1.min.js"></script>
<script>
        removeflipbox=()=>{
            $('#sign').addClass('hide');
        }
        sign=()=> {
                $('#sign').height( $(document).height());
                $('#sign').removeClass('hide');
              
            }
</script>
</head>
<?php
session_start();
//set the login mark to empty
$_SESSION['uid'] = "";
?>
<!-- <?php
    // require("./php/dbconnect.php");
    // $sql="select name from user  " ;
    // $result1=mysqli_query($conn,$sql) or die("db error");
    // // $rs=mysqli_fetch_assoc($result1);
    // while ( $rs=mysqli_fetch_assoc($result)) {
    // echo $rs['name'];}
?> -->
<style type="text/css">
@import url('https://fonts.googleapis.com/css?family=Permanent+Marker');
@import url(http://fonts.googleapis.com/earlyaccess/cwtexyen.css);
@import url('https://fonts.googleapis.com/css?family=Amatic+SC');
@import url('https://fonts.googleapis.com/css?family=Kaushan+Script');
#login{
  position:relative; 
  top:200px;
  left:320px;
  width:550px;
  
  clear: both;
  background: rgba(1000%,10000%,1000%,0.3);
  position:relative;
  padding: 0px 30px 20px 10px;
  border-radius:10px;
}
body {
    margin:0;
    padding:0;
    background: #000 url(./picture/001.jpg) center center fixed no-repeat;
    -moz-background-size: cover;
    background-size: cover;
    font-size:20pt;
    font-family:'Kaushan Script', cursive;
}
#loginbtn{
    position:relative;
    padding:10px 10px;
    font-size:20pt;
    left:60%;
    border-radius:50%;
}
#register{
    position:relative;
    padding:10px 10px;
    font-family: 'cwTeXYen', sans-serif;
    font-size:20pt;
    left:60%;
    border-radius:50%;
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
#flipcontainer>form{
    display: flex;
    flex-direction: column;
}

#flipcontainer>form>input{
flex: 1;
}
.hide{
    display: none;
}
#leg_title{
    font-family:'cwTeXYen', sans-serif;
}
</style>
<body>

<div id="login">
<h1>WELCOME</h1>
    <fieldset>
        <legend id="leg_title">登入</legend>
        <form method="post" action="./php/controller.php">
        <input type="hidden" name="act" value="login">
        username:
        <input type="text" name="id"><br>
        password:
        <input type="password" name="pwd"> <br>
        <input id="register"type="button"  onclick=sign() value="註冊"></span>
        <input id="loginbtn" style="font-family: 'cwTeXYen', sans-serif;"type="submit" value="登入">
        </form>
    </fieldset>  
</div>
<div class="flipbox hide" id='sign'>
    <div id="flipcontainer">
        <span >請輸入帳號  </span>
        <form action="./php/sign.php"  method="post" id="atable">
            <input id="data2" type="text" name="name"  required="required" >
            <span >請輸入密碼  </span>
            <input type="password" name="pwd" required="required"></input>
            <div><input type="submit"value="確定"></input></div>
        </form>
        <button onclick=removeflipbox()>取消</button>
    </div>    
</div>
</body>
</html>