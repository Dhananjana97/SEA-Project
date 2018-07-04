<?php
$mysql_host = "localhost";
$mysql_user = "root";
$con = mysqli_connect($mysql_host, $mysql_user, "", "sae");
$del=$_GET["delrow"];

$_queryselect = "DELETE FROM time_table WHERE module=\"$del\"";
mysqli_query($con,$_queryselect);
mysqli_close($con);
header("Location: ../../time_table.php");
?>
?>