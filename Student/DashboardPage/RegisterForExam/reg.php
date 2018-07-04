<?php
$mysql_host="localhost";
$mysql_user="root";

$con=mysqli_connect($mysql_host,$mysql_user,"",	"sae");
$_query="INSERT INTO registration_info(index_no,ful_name,department,semester,other) VALUES (\"".$_GET["indexno"]."\",\"".$_GET["fname"]."\",\"".$_GET["dept"]."\",\"".$_GET["sem"]."\",\"".$_GET["onotes"]."\")";
mysqli_query($con,$_query);
echo "Registration successfully!!!";
mysqli_close($con);
?>