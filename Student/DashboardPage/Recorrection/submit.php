<?php
$mysql_host="localhost";
$mysql_user="root";


$con=mysqli_connect($mysql_host,$mysql_user,"",	"sea");
$_query="INSERT INTO recorrection_requests(index_no,module_code,department,reason) VALUES (\"".$_GET["indexno"]."\",\"".$_GET["mcode"]."\",\"".$_GET["dept"]."\",\"".$_GET["reason"]."\")";
mysqli_query($con,$_query);
echo "Submitted successfully!!!";
mysqli_close($con);
?>