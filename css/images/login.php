<?php
session_start();

$mysql_host="localhost";
$mysql_user="root";

$con=mysqli_connect($mysql_host,$mysql_user,"",	"sae");
$indexno=$_GET["indexno"];
$pword=$_GET["password"];
$_query="SELECT * FROM login WHERE uname='$indexno'";
$is_query_run=mysqli_query($con,$_query);

$query_execute=mysqli_fetch_assoc($is_query_run);
if($query_execute[ "pword"]==$pword){
	if($query_execute["person"]=="stu"){
		$_SESSION["indexNo"]=$query_execute[ "uname"];
		$_SESSION["name"]=$query_execute[ "fname"];
	header("Location: Student/index.php");}
	else if($query_execute["person"]=="lec"){
	header("Location: Lecturer/index.php");}
	else if($query_execute["person"]=="ins"){
		header("Location: Instructor/index.php");
	}
}else{
header("Location: login_pw_inco.html");
}

mysqli_close($con);
?>