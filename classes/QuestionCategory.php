<?php
class QuestionCategory{
	public $selectedQs;
	public $questions;
	public function __construct($name){
		$this -> name = $name;
		$this -> selectedQs = array();
		$this -> questions = array();
		error_reporting(E_ERROR | E_PARSE);
		$mydb = openDB();
		$query = mysqli_query($mydb, "SELECT * FROM `$name`");
		mysqli_close($mydb);
		while($question = mysqli_fetch_row($query)){
			$this -> questions[] = $question;
		}
	}

	public function addQ($question, $answers, $correct){
		$query = "INSERT INTO `$this->name` values('$question','$answers[0]','$answers[1]','$answers[2]','$answers[3]','$correct')";
		$mydb = openDB();
		$result = mysqli_query($mydb, $query);
		mysqli_close($mydb);
		if($result){echo '<br><center>Question successfully added into '.$this->name.'</center>';}
	}

	public function removeQ($index){
		$query = "DELETE FROM `$this->name` WHERE question = '".$this->questions[$index]."'";
		$mydb = openDB();
		$result = mysqli_query($mydb, $query);
		mysqli_close($mydb);
		unset($this->questions[$index]);
		if($result){echo 'Question successfully deleted';}
		else{echo 'Something went wrong. Try again...';}
	}

	public function selectQ($index){
		echo $this->questions[$index].'<br><br>';
		//$this->selectedQs[$index] = $this->questions[$index];
	}

	public function deselectQ($index){
		unset($this->selectedQs[$index]);
	}

	public function getQs(){

		return $this -> questions;
	}
}
?>