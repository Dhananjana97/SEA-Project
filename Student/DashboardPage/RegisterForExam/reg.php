<?php
$mysql_host="localhost";
$mysql_user="root";
$con=mysqli_connect($mysql_host,$mysql_user,"",	"sae");

$indexno=$_GET["indexno"];
$fname=$_GET["fname"];
$dept=$_GET["dept"];
$sem=$_GET["sem"];
$onotes=$_GET["onotes"];

$_query="INSERT INTO registration_info(index_no,ful_name,department,semester,other) VALUES (\"".$indexno."\",\"".$fname."\",\"".$dept."\",\"".$sem."\",\"".$onotes."\")";
mysqli_query($con,$_query);
echo "Registration successfully!!!";
mysqli_close($con);



?>