<script type"text/javascript">
function validate_form(){
	var valid = true;
	
	var question = $('#question').val();
	var ans1 = $('#ans1').val();
	var ans2 = $('#ans2').val();
	var ans3 = $('#ans3').val();
	var ans4 = $('#ans4').val();
	var answer = $('#answer').val();

	if(question==""||ans1==""||ans2==""||ans3==""||ans4==""||answer==""){
		alert("All the fields are mandotary");
		valid = false;
	}
	if(isNaN(answer)||parseInt(answer)<1||4<parseInt(answer)){
		alert("Correct answer must be a number 1-4");
		valid = false;
	}
	if(valid){
		$('#add_question').submit();
	}
	
}
</script>
<style>
.input_field{
	width:800px;
	padding:4px 3px;
	border:0.5px solid #999999;
}
</style>
<?php
	if(isset($_POST['question'])&&!empty($_POST['question'])&&isset($_POST['ans1'])&&!empty($_POST['ans1'])&&isset($_POST['ans2'])&&!empty($_POST['ans2'])&&isset($_POST['ans3'])&&!empty($_POST['ans3'])&&isset($_POST['ans4'])&&!empty($_POST['ans4'])&&isset($_POST['answer'])&&!empty($_POST['answer'])){
		$question = $_POST['question'];
		$answers = array($_POST['ans1'], $_POST['ans2'], $_POST['ans3'], $_POST['ans4']);
		$answer = $_POST['answer'];
		$questionCategory -> addQ($question, $answers, $answer);
	}
	else{
	?>
		<div style="line-height:2; width:910px"><br><center><h3>Category name: <?php echo $category;?></h3></center>
		<form action = "" method="POST" id="add_question">
		Question:&nbsp;&nbsp;&nbsp;
		<input class ="input_field" type="text" name = "question" id="question"><br>
		Answer 1:&nbsp;&nbsp;&nbsp;
		<input class ="input_field" type="text" name = "ans1" id="ans1"><br>
		Answer 2:&nbsp;&nbsp;&nbsp;
		<input class ="input_field" type="text" name = "ans2" id="ans2"><br>
		Answer 3:&nbsp;&nbsp;&nbsp;
		<input class ="input_field" type="text" name = "ans3" id="ans3"><br>
		Answer 4:&nbsp;&nbsp;&nbsp;
		<input class ="input_field" type="text" name = "ans4" id="ans4"><br>
		Correct answer no:&nbsp;&nbsp;&nbsp;
		<input style="width:200px; padding:4px 3px; border:0.5px solid #999999;" type="text" name = "answer" id="answer"><br>
		</form>
		<button style="padding:4.5px 3px; font-weight:bold; float:right;" type = "submit" onclick="validate_form()">Add Question</button>
		</div>
<?php }?>