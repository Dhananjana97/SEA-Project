<?php 

		$host="localhost";
		$dbusername="root";
		$dbpassword="";
		$dbname="sea";

		$conn=mysqli_connect($host,$dbusername,$dbpassword,$dbname);

		if (mysqli_connect_errno()){
			die("Connection failed(".mysqli_connect_error().")");
		}else{
			 //echo "Connection Successful";
		}




 ?>