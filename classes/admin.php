<?php
class Admin{
	public $id;
	public $type;
	public $links = array('Register Exams' => 'register.php', 'Recorrection' => 'recorrection.php', 'Accept Result'=>'approveresults.php');
	function __construct($id){
		$this->id = $id;
		$this->type ="admin";
	}
}
?>