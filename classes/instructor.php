<?php
class Instructor{
	public $id;
	public $type;
	public $links = array('Passpapers'=>'uploadpasspaper.php');
	public $registered_modules;
	function __construct($id){
		$this->id = $id;
		$this->type ="instructor";
	}

	public function getRegisteredModules($user){

		$query="SELECT  modules from instructor_modules where instructor_name='$user->id'";
		$mydb = openDB();
		try {
			$execute_object=mysqli_query($mydb,$query);
		} catch (Exception $e) {
			echo "Query not executed successfully!!!";
		}
		
		mysqli_close($mydb);

		if ($execute_object) {
			$result_set=mysqli_fetch_assoc($execute_object);
			$registered_modules=explode(",",$result_set['modules']);
			

		}

		return $registered_modules;

	}
}
?>