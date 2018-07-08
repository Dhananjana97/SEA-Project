<style>
#setquiz table{
	border-collapse: collapse;

}
#quiz_list th{
    text-align: center;
}
</style>
<div style="line-height:2; margin-left:20px;">
<?php
	if(isset($_GET['printmessage'])) {   echo $_GET['printmessage']; }
	if(isset($_POST['quizname'])&&!empty($_POST['quizname'])&&isset($_POST['starttime'])
        &&!empty($_POST['starttime'])&&isset($_POST['endtime'])&&!empty($_POST['endtime'])
        &&isset($_POST['duration'])&&!empty($_POST['duration'])&&isset($_POST['participants'])
        &&!empty($_POST['participants'])){
	    
		$quizname = $_POST['quizname'];
		$starttime = $_POST['starttime'];
		$endtime = $_POST['endtime'];
		$duration = $_POST['duration'];
		$participants = $_POST['participants'];
		createQuiz($quizname, $starttime, $endtime, $duration, $participants);

		$query = "INSERT INTO `quizs` (`quizname`, `starttime`, `endtime`, `duration`, `participants`)"
                ."VALUES('$quizname','$starttime', '$endtime', '$duration','$participants')";
		$query1 = "CREATE TABLE IF NOT EXISTS `".$quizname."` (question VARCHAR(1000) , ans1 VARCHAR(500),"
					."ans2 VARCHAR(500) , ans3 VARCHAR(500) , ans4 VARCHAR(500) , answer VARCHAR(500), UNIQUE(`question`))";
		$mydb = openDB();
		$result = mysqli_query($mydb, $query);
		$result1 = mysqli_query($mydb, $query1);
		mysqli_close($mydb);
		if($result&&$result1){
			echo '<br><br>'
				.'<center>Quiz '.$quizname.' successfully created!</center>';
			}
		else{
			echo '<br><br>'
				.'<center>Something went wrong. Try again.</center>';
			}
	}
	else if(isset($_GET['deletequiz'])&&!empty($_GET['deletequiz'])){
		$quizname = $_GET['deletequiz'];
		$query = "DELETE FROM `quizs` WHERE quizname = '$quizname'";
		$mydb = openDB();
		$result = mysqli_query($mydb, $query);
		$query1 = "DROP TABLE `$quizname`";
		$result1 = mysqli_query($mydb, $query);
		mysqli_close($mydb);
		if($result&&$result1){
			echo '<br><br>'
				.'<div style="text-align: center;">Quiz ' .$quizname. ' successfully deleted!</div>';
		}
		else{
			echo '<br><br>'
				.'<center>Something went wrong. Try again.</center>';
			}
	}
	else if(isset($_GET['addquestion'])&&!empty($_GET['addquestion'])){
		$quizname = $_GET['addquestion'];
		if(isset($quizs[$quizname])){
				$quiz = $quizs[$quizname];
			}
			else{
				$mydb = openDB();
				$Quizs = mysqli_fetch_row(mysqli_query($mydb, "SELECT * FROM `quizs` WHERE `quizname`='$quizname'"));
				mysqli_close($mydb);
				$quiz = new Quiz($Quizs[0], $Quizs[1], $Quizs[2], $Quizs[3], $Quizs[4]);
				$quizs[$quizname] = $quiz;
		}
		if(isset($_GET['category'])&&!empty($_GET['category'])){
			$category = $_GET['category'];
			if(isset($qCategories[$category])){
			$questionCategory = $qCategories[$category];
			}
			else{
				$questionCategory = new QuestionCategory($category);
				$qCategories[$category] = $questionCategory;
			}
			$questions = $questionCategory->getQs();
			include 'questionstoquiz.php';
		}
		else{
			$mydb = openDB();
			$categories = mysqli_query($mydb, "SELECT category_names FROM `question_categories`");
			mysqli_close($mydb);
				echo '<h3>Select Questions from </h3><table>';
				while($category = mysqli_fetch_row($categories)[0]){
					echo '<tr>'
                            .'<td>'.$category.'</td>'
					        .'<td>'
                                .'<a href="?content=Quizs&&addquestion='.$quizname.'&&category='.$category.'">'
                                     .'<text style="color:red;list-style-type: none;font-weight:bold;">V</text>'
                                .'</a>'
                            .'</td>'
					    .'</tr>';

				}
				echo '</table>';
		}
	}
	else{
	    ?>
<br><br>
        <form action="#" method="POST" id="set_quiz">
            <table id="setquiz">
                <tr>
                    <td>Quiz Title:&nbsp;&nbsp;&nbsp;</td>
                    <td><input style="width:670px;margin-right:5px; padding:4px 3px; border:1px solid #999999;"
                               type="text" name="quizname" id="quizname"></td>
                </tr>
                <tr>
                    <td>
                        Start Time:&nbsp;&nbsp;
                    </td>
                    <td><input style="padding:3px 3px; border:1px solid #999999;" type="datetime-local"
                               name="starttime" id = "starttime">
							   <span class="notice" id="start_notice"></span></td>
                </tr>
                <tr>
                    <td>
                        End Time:&nbsp;&nbsp;&nbsp;
                    </td>
                    <td>
					<input style="padding:3px 3px; border:1px solid #999999;" type="datetime-local" name="endtime" id = "endtime">
                    <span class="notice" id="end_notice"></span>
					</td>
                </tr>
                <tr>
                    <td>
                        Duration:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    </td>
                    <td><input style="padding:4px 3px; border:1px solid #999999;" type="text" name="duration" id="duration"> (in
                        seconds)
						<span class="notice" id="duration_notice"></span>
                    </td>
                </tr>
                <tr>
                    <td>
                        Particpants:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    </td>
                    <td><input style="padding:4px 3px; border:1px solid #999999;" type="text" name="participants" id="participants">
                        (Enter group of participants. i.e: *, 2016, 2015 etc.)
                    </td>
                </tr>
            </table>
        </form>
		<button onclick="validate_form()" style="padding:4.5px 3px; font-weight:bold; float:right;">Create QUIZ</button>
    <?php
		$mydb = openDB();
		$Quizs = mysqli_query($mydb, "SELECT * FROM `quizs`");
		mysqli_close($mydb);
		echo '<div>'
		.'<table id="quiz_list" style="margin:-20px -50px 20px -50px;">'
            .'<tr>'
                .'<th>Quiz Name</th>'
                .'<th>Start Time</th>'
                .'<th>End Time</th>'
                .'<th>Duration</th>'
                .'<th>Particpants</th>'
                .'<th></th>'
                .'<th></th>'
		    .'</tr>';
		while($quiz = mysqli_fetch_row($Quizs)){
			echo '<tr>'
			.'<td>'.$quiz[0].'</td>'
			.'<td>'.$quiz[1].'</td>'
			.'<td>'.$quiz[2].'</td>'
			.'<td style="padding:0 10px;">'.$quiz[3].'</td>'
			.'<td>'.$quiz[4].'</td>'
			.'<td><a href="?content=Quizs&&deletequiz='.$quiz[0].'">'
                .'<text style="color:red;list-style-type: none;">Delete</text>'
                .'</a>'
                .'</td>'
			.'<td style="padding:0 10px;">'
                .'<a href="?content=Quizs&&addquestion='.$quiz[0].'">'
                .'<text style="color:red;list-style-type: none;">Add Questions</text>'
                .'</a>'
                .'</td>'
			.'</tr>'
            .'<br>';
		}
		echo '</table></div>';
	}
?>

<script type="text/javascript" src="main/scripts/setquiz_validation.js"></script>
</div>