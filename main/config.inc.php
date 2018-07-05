<?php 
	function __autoload($className) {
		$file = 'classes/'.strtolower($className).'.php';
		if(file_exists($file)) {
			require_once $file;
		}
		if(file_exists('../'.$file)) {
			require_once '../'.$file;
		}
	}

	$host="localhost";
	$dbusername="root";
	$dbpassword="";
	$dbname="sea";

	function openDB(){
		global $host;
		global $dbusername;
		global $dbpassword;
		global $dbname;
		$mydb = mysqli_connect($host,$dbusername,$dbpassword,$dbname);
		return $mydb;
	}
	
		if (mysqli_connect_errno()){
			die("Connection failed(".mysqli_connect_error().")");
		}
		$login = 'login.php';
		$images = 'images/';
		
		
		$home = 'index.php';
		$services = 'services.php';
		$gallery = 'gallery.php';
		$aboutus = 'aboutus.php';
		$contactus = 'contactus.php';
		$downloads = 'listdirectory.php?title=Downloads&&dir=.\Downloads';
		$profile = 'profile.php';

		
		$quiz_home = 'quiz_home.php';
?>