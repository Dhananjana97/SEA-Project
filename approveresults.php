<?php require_once 'header.php';
require_once './main/config.inc.php';
if (!isset($_SESSION['user']) || $_SESSION['user']->type != "admin") {logout();}
?>
<div class="bordered_frame" style="padding-bottom:55px;">
	<?php
		$mydb = openDB();
		$query = "SELECT column_name FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_NAME = N'results'";
		$query1 ="SELECT * FROM RESULTS";
		$result = mysqli_fetch_assoc(mysqli_query($mydb,$query1));
		$result1 = mysqli_query($mydb,$query1);
		mysqli_close($mydb);
		echo "<div style='margin: 50px auto auto 70px;'><table border='1' class='results_table'><tr>";
		foreach ($result as $th=> $value)echo "<th>".$th."</th>";
		echo "</tr>";
		while($row = mysqli_fetch_row($result1))
		{
			echo "<tr>";
			foreach($row as $key=> $value) echo "<td>$value</td>";
			echo "</tr>";
		}
		echo "</table></div>";

	if (isset($_GET['approve'])&&$_GET['approve']=="true") {
		$mydb =openDB();
		$query="UPDATE `RESULTS` SET `APPROVED`=1 WHERE 1;";
		$result = mysqli_query($mydb,$query);
		mysqli_close($mydb);
		if($result){echo "Results are successfully approved.";}
	}
	?>
	<a href="?approve=true" class="button">Approve Results</a>	
</div>
<?php require_once 'footer.php'; ?>