<div style="text-indent: 1.5em">
<?php 
	if(isset($_GET['question'])&&!empty($_GET['question'])){
		$questions = $questionCategory->removeQ($_GET['question']);
	}
	else{
		$questions = $questionCategory->getQs();
		echo '<div ><table>';
		foreach($questions as $key => $question){
			echo '<tr>
			<td>'.($key+1).')</td>
			<td>'.$question[0].'</td>
			<td><a href="?viewQuestions='.$category.'&&question='.$key.'"><text style="color:red;list-style-type: none;">Remove Question</text></a></td>
			</tr>';
			echo '<br>';
		}
		echo '</table></div>';
	}
?>
</div>