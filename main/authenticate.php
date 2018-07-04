<?php
require_once 'config.inc.php';
session();
if(isset($user_name)&&isset($password)){
	login($user_name, $password);
}
else if(!isset($_SERVER['PHP_AUTH_USER'])||!isset($_SERVER['PHP_AUTH_PW'])){
	header('HTTP/1.1 401 Unauthorized');
	header('WWW-Authenticate:Basic realm:"SEA_SYS"');
	die('Access denied!');
}
else{
	$user_name = $_SERVER['PHP_AUTH_USER'];
	$password = $_SERVER['PHP_AUTH_PW'];
	login($user_name, $password);
}


function login($user, $pass){
	global $privilege;
	global $mydb;
	$user_name = $user;
	$password = $pass;
	$privilege = mysqli_fetch_array(mysqli_query($mydb, "SELECT privilege FROM user_list WHERE user_name = '$user_name' and password = '$password'"));
	
	if (!empty($privilege[0])){
		setcookie('user', $user_name, time() + (86400 * 30), "/");
		setcookie('pass', $password, time() + (86400 * 30), "/");
		switch(strtolower($privilege[0])){
			case 'student':
				$_SESSION['user'] = new Student($user_name);
			break;
			case 'instructor':
				$_SESSION['user'] = new Instructor($user_name);
			break;
			case 'lecturer':	
				$_SESSION['user'] = new Lecturer($user_name);
			break;
			case 'admin':
				$_SESSION['user'] = new Admin($user_name);
			break;
		}
	}
	else{
		echo '<br><center>Wrong login username or password!</center><br>';
	}
}
?>