<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
<title>登入</title>
</head>
<?php
session_start();
//set the login mark to empty
$_SESSION['uID'] = "";
?>
<style type="text/css">


#login{
  position:relative; 
  top:200px;
  left:300px;
  width:500px;
  
  clear: both;
  background: rgba(1000%,10000%,1000%,0.3);
  position:relative;
  padding: 0px 30px 20px 10px;
  border-radius:10px;
}
body {
    margin:0;
    padding:0;
    background: #000 url(001.jpg) center center fixed no-repeat;
    -moz-background-size: cover;
    background-size: cover;
    font-size:20pt;
}
</style>
<body>
<div id="login">
<h1>WELCOME</h1>
    <fieldset>
        <legend>登入</legend>

        <form method="post" action="controller.php">
        <input type="hidden" name="act" value="login">
        username:
        <input type="text" name="id"><br>
        password:
        <input type="password" name="pwd"> 
        <input type="submit" value="登入">
        </form>
       
    </fieldset>
</div>
</body>
</html>