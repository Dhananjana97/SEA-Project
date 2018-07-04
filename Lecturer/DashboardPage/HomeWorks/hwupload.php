<?php
			$mysql_host="localhost";
			$mysql_user="root";

			$con=mysqli_connect($mysql_host,$mysql_user,"",	"sae");
			$_query="INSERT INTO hw_submitions(hw_description) VALUES (\"".$_GET["info"]."\")";
			mysqli_query($con,$_query);
			mysqli_close($con);
			header("Location: ../../HWSub.php")
?>