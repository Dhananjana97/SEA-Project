<?php
	require_once 'header.php';
	if(!isset($_SESSION['user'])){header('Location: $home'); exit();}
	$user = $_SESSION['user'];
	$id = strtolower($user->id);
?>

<html>
<style>
table, th, td {
    border-collapse: collapse;
}
th, td {
    padding: 8px 20px;
    text-align: left;
}
.inlink a{
	text-decoration: none;
    font-size: 22px;
	padding: 8px 35px;
    display: block;
	text-align: center;
	float:left;
}
.questions{}
.answers ul{list-style-type:decimal;}

</style>
<main>
<h3>Have a nice day <?php echo strtoupper($id); ?></h3>
<?php
	$students = array(); //need to be from db or main page.
	$lectures = array();
	$qCategories = array();  //will be eretrieved from db

function createQCategory($name){
	global $qCategories;
	$qCategories[$name] = new QuestionCategory($name);
}

function removeQCategory($name){
	$mydb = openDB();
	global $dbname;
	$query1 = "DROP TABLE `$name`;";
	$query0 = "DELETE FROM question_categories WHERE category_names = '$name';";

	$result1 = mysqli_query($mydb, $query0);
	$result2 = mysqli_query($mydb, $query1);
	mysqli_close($mydb);
	if($result1 && $result2){echo '<br><center>Deletion of '.$name.' is success</center>';}
}

function createQuiz($name, $start, $ends, $duration, $participants){
	global $quizs;
	if(!isset($quizs[$name])){
		$quiz = new Quiz($name, $start, $ends, $duration, $participants);
		$quizs[$name] = $quiz;
	}
}

function removeQuiz($name){
	global $quizs;
	unset($quizs[$name]);
}

function viewQuizs(){
	foreach($quizs as $quiz){
		//sql querry to store marks goes here.
		echo 'Your Score is:'.$quiz -> name."<br>";
	}
}

function attemptQuiz($quiz_name){
	global $id, $session, $quiz_home;
	$quizs = $_SESSION['quizs'];
	$quiz = $quizs[$quiz_name];
	
	if(in_array($id, $quiz -> participants) or in_array('*', $quiz -> participants)){
		$session = new QuizSession($quiz);
		$_SESSION['session'] = $session;
		$_SESSION['quiz'] = $quiz;
		echo '<form method="POST" action="quiz_home.php?submit=\"TRUE\"">';
		$printed_quiz = $quiz -> printQs();
		if($printed_quiz=='')die('This quiz is not available now. Try again later!&nbsp;&nbsp;&nbsp;<a href="'.$quiz_home.'">back</a>');
		echo $printed_quiz;
		echo '<button type="submit" name="submit" value="TRUE">Submit all and finish</button></form>';
	}
}

function submitQuiz(){
	$session = $_SESSION['session'];
	$quiz = $session->quiz;
	$no_of_q = count($quiz->questions);
	for($i=0; $i<=$no_of_q; $i++){
		if (isset($_POST[$i]))$session->answerQ($i, $_POST[$i]+1);
	}
	$session = $_SESSION['session'];
	$session -> terminateSession();
	echo 'Your marks is '.$session -> marks.'<br>';
	//unset($sessions[$id]);
}


if($user->type == 'student'&&isset($_GET['quiz'])){	attemptQuiz($_GET['quiz']);	}
if($user->type == 'student'&&isset($_GET['submit'])){	submitQuiz();	}

if($user->type == 'student'&&!isset($_GET['quiz'])){
	$mydb = openDB();
	$query = "SELECT * FROM `quizs`";
	$quiz_query = mysqli_query($mydb, $query);
	$quizs = array();
	while($quiz_row = mysqli_fetch_row($quiz_query)){
		$participants = explode(',', $quiz_row[4]);
		$quiz = new Quiz($quiz_row[0], $quiz_row[1], $quiz_row[2], $quiz_row[3], $participants);
		if(in_array($id, $quiz -> participants) or in_array('*', $quiz -> participants)){
			$quizs[$quiz->name] = $quiz;
			echo '<form method="post" action="quiz_home.php?quiz='.$quiz->name.'">'.$quiz->name.'&nbsp;&nbsp;<input type="submit" value="Attempt Now" /></form>';
		}
		$_SESSION['quizs'] = $quizs;
	}
	mysqli_close($mydb);
}
elseif($user->type == 'lecturer'){
	echo '<div class="inlink"><center><a href="?content=QC">Question Category</a>&nbsp;<a href="?content=Questions">Question</a>&nbsp;<a href="?content=Quizs">Quiz</a></center></div>';
	

	if(isset($_POST['categoryname'])&&!empty($_POST['categoryname'])){
		$cate_name = $_POST['categoryname'];
		$query = "CREATE TABLE IF NOT EXISTS `".$cate_name."` (question TEXT , ans1 VARCHAR(500) , ans2 VARCHAR(500) , ans3 VARCHAR(500) , ans4 VARCHAR(500) , answer VARCHAR(500))";
		$query1 = "INSERT INTO `question_categories` (`category_names`) VALUES ('".$cate_name."')";
		$mydb = openDB();
		$query_result1 = mysqli_query($mydb, $query);
		$query_result2 = mysqli_query($mydb, $query1);
		mysqli_close($mydb);
		if($query_result1&&$query_result2){
			echo '<br><br><center>Category '.$cate_name.' has been created successfully!</center>';
		}
		else{echo 'Something went wrong. Try again.';}
	}
	
	if(isset($_GET['deletecategory'])&&!empty($_GET['deletecategory'])){
		removeQCategory($_GET['deletecategory']);
	}
	
	if(isset($_GET['addQuestions'])&&!empty($_GET['addQuestions'])){
		$category = $_GET['addQuestions'];
		
		if(isset($qCategories[$category])){
			$questionCategory = $qCategories[$category];
		}
		else{
			$questionCategory = new QuestionCategory($category);
			$qCategories[$category] = $questionCategory;
		}
		
		include 'quiz/addquestions.php';
	}
	
	if(isset($_GET['viewQuestions'])&&!empty($_GET['viewQuestions'])){
		$category = $_GET['viewQuestions'];
		
		if(isset($qCategories[$category])){
			$questionCategory = $qCategories[$category];
		}
		else{
			$questionCategory = new QuestionCategory($category);
			$qCategories[$category] = $questionCategory;
		}
		
		include 'quiz/questionsview.php';
	}

	
	if(isset($_GET['content'])){
		switch(strtolower($_GET['content'])){
			case 'qc':
				include 'quiz/categorycreation.php';
			break;
			case 'questions':
				include 'quiz/categories.php';
			break;
			case 'quizs':
				include 'quiz/setquiz.php';
			break;
		}
	}
}
?>
</main>
<?php require_once 'footer.php';?>