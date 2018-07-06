<?php
class Student{
	public $id;
	public $type;
	public $batch;
	public $links = array('Passpapers'=>'listpasspapers.php', 'Conn. Assignments' => 'Registered%20Modules.php', 'Register Exams' => 'register.php', 'Recorrection' => 'recorrection.php', 'QUIZ' => 'quiz_home.php', 'Result' => 'resultsview.php?results=show');
	function __construct($id){
		$this->id = $id;
		$this->batch = "20".substr($id,0,-5);
		$this->type ="student";
	}


	
}
?>