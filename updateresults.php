<?php require 'header.php';
if(!isset($_SESSION['user'])){header('Location: '.$home); exit();}
?>

<html>
<main>
<style>
.internal table, th, td {
    border-collapse: collapse;
}
.internal th, td{
	height:30px;
    text-align: center;
	text-indent:8px;
	min-width:170px;
}
#container{
	padding-left: 20px;
}
</style>
<?php
	if(isset($_GET['module_name'])){
		$module_name = $_GET['module_name'];
		if(isset($_POST['submit_result'])){
			$result_text = $_POST['result'];
			try{
				$result_array = explode(',', $result_text);
				$query = "INSERT INTO `results` (`id`, `$module_name`)VALUES ";
				foreach($result_array as $key => $unit_result){
					$temp = explode(' ', trim($unit_result));
					$id_ = $temp[0];
					$result_ = $temp[1];
					$query = "INSERT INTO `results` (`id`, `$module_name`)VALUES ('$id_', '$result_');";
					$query1 = "UPDATE `results` SET `$module_name`='$result_' WHERE `ID` = '$id_';";
					$mydb = openDB();
					$result = mysqli_query($mydb, $query) or mysqli_query($mydb, $query1);
					mysqli_close($mydb);
					if($result){echo 'Results for '.$id_.' updated successfully!<br>';}else{echo 'failed to update result of '.$id_.' try again...<br>';}
				}
			}
			catch(Exception $e){
				die("Try again with correct format...");
			}
			
		}
		else{
?>

<br>
<div style="position:relative; width:900px; margin: 40px 40px;">
	<form method="POST" action="#" id="result">
		<textarea style = "padding:10px; color:#999; font-size:32px; width:900px; height:650px;" name="result" form="result">Enter Results separated by commas...
Eg:&#13;&nbsp;&nbsp;160xxxX A+,&#13;&nbsp;&nbsp;160xxxX A,&#13;&nbsp;&nbsp;160xxxX A+&#13;
		</textarea>
		<br><br>
		<input type="submit" value="submit result" style="font-size:25px; float:right; "name="submit_result" disabled/>
</form>
</div>
				
<?php
		}
	}
	else{
		$query = "SELECT `MODULES` FROM `MODULES`";
		$mydb = openDB();
		$result = mysqli_query($mydb, $query);
		mysqli_close($mydb);
		echo '<div style="width:900px; margin:40px 40px;">';
		while($module = mysqli_fetch_row($result)[0]){
			echo '<table class="internal"><tr><td width="800px">'.$module.'</td><td><center><a href="?module_name='.$module.'">Update results</a></center></td></tr></table>';
		}
		echo '</div>';
	}
?>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/formandinput.js"></script>
</main>
<?php require_once 'footer.php';?>
