
<?php
	if(isset($_POST['question'])&&!empty($_POST['question'])&&isset($_POST['ans1'])&&!empty($_POST['ans1'])&&isset($_POST['ans2'])&&!empty($_POST['ans2'])&&isset($_POST['ans3'])&&!empty($_POST['ans3'])&&isset($_POST['ans4'])&&!empty($_POST['ans4'])&&isset($_POST['answer'])&&!empty($_POST['answer'])){
		$question = $_POST['question'];
		$answers = array($_POST['ans1'], $_POST['ans2'], $_POST['ans3'], $_POST['ans4']);
		$answer = $_POST['answer'];
		$questionCategory -> addQ($question, $answers, $answer);
	}
	else{
		echo '
		<div style="line-height:2;"><br><center><h3>'.$category.'</h3></center>
		<form action = "quiz_home.php?addQuestions='.$category.'" method="POST">
		Question:&nbsp;&nbsp;&nbsp;<input style="width:900px; padding:4px 3px; border:0.5px solid #999999;" type="text" name = "question"><br>
		Answer 1:&nbsp;&nbsp;&nbsp;<input style="width:900px; padding:4px 3px; border:0.5px solid #999999;" type="text" name = "ans1"><br>
		Answer 2:&nbsp;&nbsp;&nbsp;<input style="width:900px; padding:4px 3px; border:0.5px solid #999999;" type="text" name = "ans2"><br>
		Answer 3:&nbsp;&nbsp;&nbsp;<input style="width:900px; padding:4px 3px; border:0.5px solid #999999;" type="text" name = "ans3"><br>
		Answer 4:&nbsp;&nbsp;&nbsp;<input style="width:900px; padding:4px 3px; border:0.5px solid #999999;" type="text" name = "ans4"><br>
		Correct answer no:&nbsp;&nbsp;&nbsp;<input style="width:200px; padding:4px 3px; border:0.5px solid #999999;" type="text" name = "answer"><br>
		<input style="padding:4.5px 3px; font-weight:bold; float:right; margin-right:130px;" type = "submit" value = "Add Question" >
		</form>
		</div>
		';
	}
?>