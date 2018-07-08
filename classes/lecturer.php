<?php
class Lecturer{
	public $id;
	public $type;
	public $links = array('Assignments' => 'assignment.php', 'Recorrection' => 'lec_recorrection.php', 'Set QUIZ' => 'quiz_home.php?content=QC', 'Result' => 'updateresults.php', 'Passpapers'=>'uploadpasspaper.php');
	function __construct($id){
		$this->id = $id;
		$this->type ='lecturer';
	}
}
?>