<?php
require_once 'main/config.inc.php';
	$privilege;
	session_start();
	if(isset($_SESSION['user'])&&!empty($_SESSION['user'])){
		$user_name = strtolower($_SESSION['user']->id);
		header('url='.$_SESSION["user"]->type.'_home.php');
		exit();
	}
	if(isset($_POST['user_name'])&&!empty($_POST['user_name'])&&isset($_POST['password'])&&!empty($_POST['password'])){
		$user_name = strtolower($_POST['user_name']);
		$password = $_POST['password'];
		login($user_name, $password);
	}
	
	function login($user, $pass){
		global $privilege;
		$mydb = openDB();
		$user_name = $user;
		$password = $pass;
		$privilege = mysqli_fetch_array(mysqli_query($mydb, "SELECT privilege FROM user_list WHERE user_name = '$user_name' and password = '$password'"));
		
		if (!empty($privilege[0])){
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
			gotouserhome();
		}
		mysqli_close($mydb);
	}
	
	function gotouserhome(){
		global $privilege;
		header("Location:	".$_SESSION['user']->type."_home.php");
		exit;
	}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Student and Examination Department: Log in to the site</title>

	<!-- Google Fonts -->
	<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700|Lato:400,100,300,700,900' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="css/animate.css">
	<!-- Custom Stylesheet -->
	<link rel="stylesheet" href="css/style.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
</head>

<body>
<form action = "<?php echo $home;?>"	method = "post">
	<div class="container">
		<div class="top">
			<h1 id="title" class="hidden"><span id="logo"> <span>Student and Examination Department</span></span></h1>
		</div>
		<div class="login-box animated fadeInUp">
			<div class="box-header">
				<h2>Log In</h2>
			</div>
			<label for="username">Username</label>
			<br/>
			<input type="text" id="username" name="user_name">
			<br/>
			<label for="password">Password</label>
			<br/>
			<input type="password" id="password" name="password">
			<br/>
			<button class="login100-form-btn" type = "submit">Sign In</button>
			<br/>
			<a href="#"><p class="small">Forgot your password?</p></a>
		</div>
	</div>
</form>
</body>

<script>
	$(document).ready(function () {
    	$('#logo').addClass('animated fadeInDown');
    	$("input:text:visible:first").focus();
	});
	$('#username').focus(function() {
		$('label[for="username"]').addClass('selected');
	});
	$('#username').blur(function() {
		$('label[for="username"]').removeClass('selected');
	});
	$('#password').focus(function() {
		$('label[for="password"]').addClass('selected');
	});
	$('#password').blur(function() {
		$('label[for="password"]').removeClass('selected');
	});
</script>

</html>