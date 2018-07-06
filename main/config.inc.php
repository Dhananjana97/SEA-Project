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

		$images = 'images/';
		
		$login = 'index.php';
		$home = 'index.php';
		$services = 'services.php';
		$gallery = 'gallery.php';
		$aboutus = 'aboutus.php';
		$contactus = 'contactus.php';
		$downloads = 'listdirectory.php?title=Downloads&&dir=.\Downloads';
		$profile = 'profile.php';
		
		$mainpath = explode("\\",realpath(dirname(__FILE__)));
		array_pop($mainpath);
		$SitePath = implode("/",$mainpath);
		$quiz_home = 'quiz_home.php';
?>