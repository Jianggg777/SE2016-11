<?php
$host = 'localhost';
$user = 'yuan';
$pass = 'yuan30902';
$db = 'finaltest';
$db = mysqli_connect($host, $user, $pass, $db) or die('Error with MySQL connection'); //跟MyMSQL連線並登入
mysqli_query($db,"SET NAMES utf8"); //選擇編碼
?>