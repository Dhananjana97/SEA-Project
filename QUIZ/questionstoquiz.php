<div style="text-indent: 1.5em;">
<?php
	header('Location: index.php');
	if(isset($_POST['addselectedquestions'])&&!empty($_POST['addselectedquestions'])){
		if(!empty($_POST['selected_qs'])){
			$selectedquestions = array();
			foreach($_POST['selected_qs'] as $key){
				$selectedquestions[] = $questions[$key];
			}
			$printmessage = '<br><center>'.$quiz->addQs($selectedquestions).'</center>';
			echo'<script type="text/javascript">
				window.location.href = "?content=Quizs&&addquestion='.$quizname.'&&printmessage='.$printmessage.'";
			</script>';
		}
	}
	else{
		$questions = $questionCategory->getQs();
		echo '<FORM action="#" method = "POST"><table>';
		if (empty($questions))die('<br><center>no question in this category. <a href="quiz_home.php?content=Quizs&&addquestion=?'.$quizname.'">back</a></center>');
		foreach($questions as $key => $question){
			echo '<tr>
			<td>'.($key+1).')</td>
			<td>'.$question[0].'</td>
			<td><input type="checkbox" name="selected_qs[]" value="'.$key.'"/></td>
			</tr>';
			echo '<br>';
		}
		echo '</table>
		<input style="float:right; margin-right:120px;" type="submit"  name = "addselectedquestions" value="Add selected questions"></FORM>
		';
	}
	//?content=Quizs&&addquestion='.$quizname.'
?>
</div>