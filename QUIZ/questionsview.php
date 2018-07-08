<div style="text-indent: 1.5em">
<?php 
	if(isset($_GET['question'])&&!empty($_GET['question'])){
		$questions = $questionCategory->removeQ($_GET['question']);
	}
	else{
		$questions = $questionCategory->getQs();
		echo '<div><table>';
		foreach($questions as $key => $question){
			echo
			'<tr>'
				.'<td style="vertical-align:top;">('.($key+1).')</td>'
				.'<td style="text-indent:0;width:720px">'.$question[0].'</td>'
				.'<td width="80px"><a href="?viewQuestions='.$category.'&&question='.$key.'">'
					.'<text style="color:red;list-style-type: none;">Remove</text>'
				.'</a></td>
			</tr>';
			echo '<br>';
		}
		echo '</table></div>';
	}
?>
</div>