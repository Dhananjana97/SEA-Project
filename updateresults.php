<?php require 'header.php';
if(!isset($_SESSION['user'])||$_SESSION['user']->type != "lecturer"){logout();}
?>


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
	if(isset($_GET['module_name'])&&isset($_GET['update'])){
		$module_name = $_GET['module_name'];
		if(isset($_POST['submit_result'])&& !empty($_POST['result'])){
			$result_text = $_POST['result'];
			try{
				$result_array = array_values(array_filter(explode(PHP_EOL, $result_text)));
				foreach($result_array as $key => $unit_result){
					$temp = explode(' ', trim($unit_result));
					$id_ = $temp[0];
					@$result_ = trim($temp[1]);
					if(strlen($id_)!=7 || !ctype_digit(substr($id_,0,6))||!ctype_alpha(substr($id_,6))){
					    echo 'Wrong id format '.$id_.'<br>';
					    continue;
					}

                    if(strlen($result_)>2 || (strlen($result_)==2&&!preg_match('/[+-]/', substr($result_,1)))||!ctype_alpha(substr($result_,0,1))){
					    echo 'Results format is wrong for id '.$id_.'<br>';
					    continue;
					}
                    if(empty($result_))header("Location: #");
					$query = "INSERT INTO `results` (`id`, `$module_name`)VALUES ('$id_', '$result_');";
					$query1 = "UPDATE `results` SET `$module_name`='$result_' WHERE `ID` = '$id_';";
					$mydb = openDB();
					$result = mysqli_query($mydb, $query) or mysqli_query($mydb, $query1);
					mysqli_close($mydb);
					if($result){
						echo 'Results for '.$id_.' updated successfully!<br>';
						}else{
						echo 'failed to update result of '.$id_.' try again... It may be same as on DB.<br>';
					}
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
		<textarea style = "padding:10px; color:#999; font-size:32px; width:900px; height:650px;" name="result"  form="result">Enter results in separate lines...
Eg:
&#13;&nbsp;&nbsp;160xxxX A+
&#13;&nbsp;&nbsp;160xxxX A
&#13;&nbsp;&nbsp;160xxxX A+&#13;
		</textarea>
		<br><br>
		<input type="submit" value="submit result" style="font-size:25px; float:right; "name="submit_result" disabled/>
</form>
</div>

<?php
		}
	}
	else if(isset($_GET['module_name'])&&isset($_GET['view'])){
			$module_name = $_GET['module_name'];
			$query = "SELECT `id`, $module_name from results";
			$mydb = openDB();
			$result_to_view = mysqli_query($mydb, $query);
			mysqli_close($mydb);
			echo '<div style="width:500px; margin:80px 300px;">'.
			'<table class="internal"><tr><th>ID</th><th>Results</th></tr>';
		while($i = mysqli_fetch_row($result_to_view)){
			echo '<tr><td>'.$i[0].'</td><td style="text-indent:80px;">'.$i[1].'</td></tr>';
		}
		echo '</table></div>';
		}
	else{
		$query = "SELECT `MODULES` FROM `MODULES`";
		$mydb = openDB();
		$result = mysqli_query($mydb, $query);
		mysqli_close($mydb);
		echo '<div class="bordered_frame">';
		while($module = mysqli_fetch_row($result)[0]){
			echo
			'<table class="internal">'
				.'<tr>'
					.'<td width="700px">'.$module.'</td>'
					.'<td><center><a class="int_button" href="?module_name='.$module.'&update=true">Update results</a></center></td>'
					.'<td><center><a class="int_button" href="?module_name='.$module.'&view=true">View results</a></center></td>'
				.'</tr>'
			.'</table>';
		}
		echo '</div>';
	}
?>
<script type="text/javascript" src="./main/scripts/formandinput.js"></script>
<?php require_once 'footer.php';?>
