<?php
require "dbconnect.php";
session_start();
require("User.php");
if(! isset($_POST["act"])) {
	exit(0);
}

$act =$_POST["act"];
switch($act) {
	case "login":
		$loginName = $_POST['id'];
		$password = $_POST['pwd'];
		$arr=checkUser($loginName, $password);
		if ($arr['role']=='player') {
			//set login session mark
			$_SESSION['name'] = $loginName;
			$_SESSION['role'] = $arr['role'];
			$_SESSION['uid']=$arr['uid'];
			echo "<script>"; 
    		echo "window.alert('登入成功！')"; 
    		echo "</script>"; 
    		echo "<script>"; 
    		echo "location.href='../mainpage.php'"; 
    		echo "</script>"; 
			// header("Location: index.php");
		} else if($arr['role']=='npc'){
			$_SESSION['name'] = $loginName;
			$_SESSION['role'] = $arr['role'];
			echo "<script>"; 
    		echo "window.alert('you are npc')"; 
    		echo "</script>"; 
    		echo "<script>"; 
    		echo "location.href='../platform.html'"; 
    		echo "</script>"; 		
	    } else {
			//set login mark to empty
			$_SESSION['uid'] = "";
			$_SESSION['name'] = "";
			$_SESSION['role'] = -1;
			echo "<script>"; 
    		echo "window.alert('login failed!')"; 
    		echo "</script>"; 
    		echo "<script>"; 
    		echo "location.href='../loginForm.php'"; 
    		echo "</script>"; 
		}
		
		
	default:
}
?>

