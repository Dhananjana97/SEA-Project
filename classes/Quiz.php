<?php

class Quiz{
	public $name;
	public $start;
	public $ends;
	public $duration;
	public $questions;
	public $participants;
	
	public function __construct($name, $start, $ends, $duration, $participants){
		$this->name = $name;
		$this->questions = array();
		$this->participants = $participants;
		$this->start = $start;
		$this->ends = $ends;
		$this->duration = $duration;
		$query = "SELECT * FROM `$name`";
		$mydb = openDB();
		$result = mysqli_query($mydb, $query);
		mysqli_close($mydb);
		if($result){
			while($question = mysqli_fetch_row($result)){
				$this->questions[] = array($question[0], array($question[1], $question[2], $question[3], $question[4]), $question[5]);
			}
		}
	}
	
	public function addQs($questions){
		$query = "INSERT INTO `".$this->name."` VALUES ";
		foreach($questions as $key => $question){
			$query = $query."('$question[0]', '$question[1]', '$question[2]', '$question[3]', '$question[4]','$question[5]')";
			if($key+1<count($questions)){$query = $query.", ";}
		}
		$query = $query.";";
		$mydb = openDB();
		$result = mysqli_query($mydb, $query);
		mysqli_close($mydb);
		if($result){return 'Questions have been added successfully!';}
		else{return 'Something went wrong. Some selected questions might have already been added. Try again.';}
		$this -> questions = array_merge($this -> questions, $questions);
	}
	
	public function schedule(){
		//mysql querry goes here
	}
	
	public function printQs(){
		$quiztxt = '';
		if(!empty($this -> questions)){
			for($i = 0; $i < sizeof($this -> questions); $i++){
				$qs = $this -> questions[$i];
			$quiztxt = $quiztxt.'<div class ="questions">'.($i+1).". ".$qs[0].'</div><div class="answers"><ul>';
				foreach($qs[1] as $key => $ans){
					$quiztxt = $quiztxt.'<li><label><input type="radio" name="'.$i.'" value="'.$key.'">&nbsp;'.$ans.'</label></li>';
				}
				$quiztxt = $quiztxt.'<ul></div>';
			}
		}
		else{
			$quiztxt = '';
		}
		return $quiztxt;
	}
}

?>