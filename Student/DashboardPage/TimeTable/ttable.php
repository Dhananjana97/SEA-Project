<?php
$mysql_host="localhost";
$mysql_user="root";

$con=mysqli_connect($mysql_host,$mysql_user,"",	"sae");


$_query="SELECT module,date,venue FROM time_table WHERE dep='cse'&&sem='2'";
$is_query_run=mysqli_query($con,$_query);

echo"<table border='1' style='width:300px'><tr><th>Module</th><th>Date and Time</th><th>Venue</th></tr>";
while($query_execute=mysqli_fetch_assoc($is_query_run)){
	echo"<tr><td>".$query_execute["module"]."</td><td>".$query_execute["date"]."</td><td>".$query_execute["venue"]."</td></tr>";		
}
echo"</table>";

mysqli_close($con);


?>