<?php
class Admin{
	public $id;
	public $type;
	public $links = array('Passpapers'=>'passpaper.php', 'Assignments' => 'assignment.php', 'Register Exams' => 'register.php', 'Recorrection' => 'recorrection.php', 'QUIZ' => 'quiz_home.php', 'Result' => 'resultsview.php?results=show');
	function __construct($id){
		$this->id = $id;
		$this->type ="admin";
	}
}
?>