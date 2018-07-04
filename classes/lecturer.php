<?php
class Lecturer{
	public $id;
	public $type;
	public $links = array('Set 'Assignments' => 'assignment.php', 'Recorrection' => 'recorrection.php', 'Set QUIZ' => 'quiz_home.php?content=QC', 'Result' => 'updateresults.php');
	function __construct($id){
		$this->id = $id;
		$this->type ='lecturer';
	}
}
?>