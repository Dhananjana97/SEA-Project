<?php
class Instructor{
	public $id;
	public $type;
	public $links = array('Passpapers'=>'uploadpasspaper.php',  'CAs' => 'Registered%20Modules%20For%20Instructors.php');
	function __construct($id){
		$this->id = $id;
		$this->type ="instructor";
	}
}
?>