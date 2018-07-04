<?php
class QuizSession{
	public $startedTime;
	public $duration;
	public $blowUpTime;
	public $quiz;
	public $questions;
	public $answers;
	public $sessionFlag;
	public $marks;
	
	public function __construct($quiz){
		$this->startedTime = time(); //current time
		$this->duration = $quiz -> duration;
		$this->blowUpTime = $quiz -> ends;
		$this->quiz = $quiz;
		$this->questions = $quiz -> questions;
		$this->sessionFlag = TRUE;
		$this -> marks = 0;
	}
	
	public function terminateSession(){
		$this ->markQuestions();
		$this -> sessionFlag = FALSE;
	}
	
	public function answerQ($qIndex, $ansIndex){
		$this -> questions[$qIndex][3] = $ansIndex;
	}
	
	public function markQuestions(){
		if($this ->sessionFlag){
			foreach($this -> questions as $key => $question){
				$ans = end($question);
				$cAns = prev($question);
				if($ans == $cAns){
					$this -> marks ++;
				}
			}
		}
	}
}
?>