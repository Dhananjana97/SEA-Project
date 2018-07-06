<?php 
ob_start();
require_once 'header.php';
    // require_once 'includes/Header_Selecter.php';
     require_once 'includes/Connection.php';

     
 ?>
 <?php 

 	$module1=$_GET['module'];
 	$module_arr=explode("-", $module1);
 	$batch=$module_arr[0];
 	$module=$module_arr[1];
 	$CA_number=$_GET['ca_number'];







  ?>



<?php 
	
	if (isset($_POST['submit'])) {
		print_r($_POST);
		echo "<br>";

		$p_count=count($_POST);
		$n=($p_count-1)/6;

		$nmb=0;
		while ($nmb<$n) {
			$a=array_slice($_POST,$nmb*6,6);
			echo "<br>";
			print_r($a);
			echo "$nmb";
			$feed=end($a);
			$feed_key=key($a);
			$key_arr=explode("-",$feed_key);
			$student_name=$key_arr[0];

			$a2=array();
			
			foreach ($a as $e) {
				array_push($a2, $e);
			}

			print_r($a2);
				
				$message=$a2[0];
				$uploaded_file=$a2[1];
				$marks=$a2[2];
				$submitted_time=$a2[3];
				$submission_t=$a2[4];
				$feedback=$a2[5];
			
			if (empty($submitted_time)) {
				$query="update {$batch}{$module} set {$CA_number}='' where student_name='{$student_name}'";
			echo "update {$batch}{$module} set {$CA_number}='' where student_name='{$student_name}'";
			
				
			}else{
				$query="update {$batch}{$module} set {$CA_number}='{$message}|{$uploaded_file}|{$marks}|{$submitted_time}|{$submission_t}|{$feedback}' where student_name='{$student_name}'";
			echo "update {$batch}{$module} set {$CA_number}='{$message}|{$uploaded_file}|{$marks}|{$submitted_time}|{$submission_t}|{$feedback}' where student_name='{$student_name}'";
			}
			
			$ex=mysqli_query($conn,$query);

			if ($ex) {
				echo "okkkkkkkkk";
				header("Location:Given_CAs from instructor.php?module=2016-oop&task=2");
			}else{
				echo "not executed";
			}
			$nmb++;


			

			
		}
		
	}
	

require_once 'footer.php';

 ?>