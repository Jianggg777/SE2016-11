<?php
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
		$role=checkUser($loginName, $password);
		if ( $role='player') {
			//set login session mark
			$_SESSION['uID'] = $loginName;
			$_SESSION['role'] = $role;
			echo "<script>"; 
    		echo "window.alert('successful')"; 
    		echo "</script>"; 
    		echo "<script>"; 
    		echo "location.href='mainpage.html'"; 
    		echo "</script>"; 
			// echo "<script>alert('successful');</script>";
			// header("Location: index.php");
		} else {
			//set login mark to empty
			$_SESSION['uID'] = "";
			$_SESSION['role'] = -1;
			echo "<script>"; 
    		echo "window.alert('login failed!')"; 
    		echo "</script>"; 
    		echo "<script>"; 
    		echo "location.href='loginForm.php'"; 
    		echo "</script>"; 
		}
	default:
}
?>

