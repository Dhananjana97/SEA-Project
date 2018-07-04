<?php

$mysql_host = "localhost";
$mysql_user = "root";
$con = mysqli_connect($mysql_host, $mysql_user, "", "sae");

$_queryinsert = "INSERT INTO time_table(dep,sem) VALUES (\"cse\",\"2\")";
mysqli_query($con,$_queryinsert);
mysqli_close($con);
header("Location: ../../time_table.php");
?>
?>