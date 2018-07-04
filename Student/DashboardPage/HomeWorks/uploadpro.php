<?php
if(isset($_FILES['fileToUpload'])){
      $errors= array();
      $file_name = $_FILES['fileToUpload']['name'];
      $file_size =$_FILES['fileToUpload']['size'];
      $file_tmp =$_FILES['fileToUpload']['tmp_name'];
      $file_type=$_FILES['fileToUpload']['type'];
      
      
      if($file_size > 2097152){
         $errors[]='File size must be excately 2 MB';
      }
      
	  $filep=$_POST["homeworkname"];
	  
      if(empty($errors)==true){
		 
         move_uploaded_file($file_tmp,"hws/$filep/".$file_name);
		 
		header("Location: ../../HWSub.php");
      }else{
         print_r($errors);
      }
   }
?>