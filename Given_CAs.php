<?php
	require_once 'header.php';
	if(!isset($_SESSION['user'])|| $_SESSION['user']->type!="student"){header('Location: login.php'); exit();}

    $batch=$_SESSION['user']->batch;
	if(isset($_GET['module']))$CA_module=$_GET['module']; else die("you can only go with selected module");

 ?>
	<title>Given Assignments For <?php echo "$CA_module";  ?></title>
	<link rel="stylesheet" type="text/css" href="includes/list_style.css">





	<?php 
		
		

		$query="SELECT * FROM `instructor_".$batch."-".$CA_module."_ca`"; 
	
		$mydb = openDB();
		$execute_object=mysqli_query($mydb,$query);
		mysqli_close($mydb);
		

		if ($execute_object){

			$a = array();

			while ($result_set=mysqli_fetch_assoc($execute_object)) {


				
				array_push($a,$result_set);
				

				//print_r($a);
				
				
			
			}

			

		}else{
			echo "Not executed";
		}

		

		$query2="select * from ".$batch.$CA_module." where student_name='".$user->id."'";
		$mydb = openDB();
		$execute_object2=mysqli_query($mydb,$query2);
		mysqli_close($mydb);
		

		if ($execute_object2){

			

			$record=mysqli_fetch_assoc($execute_object2);
		

				$a2=array();
				
				//print_r($record);
			if (!empty($record)) {
				foreach ($record as $x=>$x_value) {

				array_push($a2,$x_value);
				//echo "<br>";
				//print_r(array_slice($a2,4));


				}
			}
			


		}else{

			echo "Query not executed Successfully!!!!!!!";
			
	
		}


	function f($a,$count){
		if(!empty($a[$count])) {



			return "submitted";

					
		}else{
			return "Not Submitted";
		}


	}

	?>

	<h2 style="color:black;font-style:all;font-family:sans-serif;margin-left:40px;">Select CA</h2>

 	
 	

	 
 


<ul class="a" style="margin-left:20px;">
	<?php 

	//print_r($a2);

		$count=-1;
		foreach ($a as $ca) {
			++$count;
			$number=$ca['CA_number'];
			$task=$ca['assignment'];
			$closing_time=$ca['valid_duration'];
			$full_task_file=$ca['file'];
			$full_task_file_arr=explode("/",$full_task_file);
			$task_file=end($full_task_file_arr);
			$validity=date_create($ca['valid_duration']);

			


			/*date_default_timezone_set('Asia/Colombo');
	        // echo "<br>";
	        $now=new DateTime();
	        $date=new DateTime($closing_time);

	        $diff=date_diff($now,$date);

	       

	        if ($now>$date) {
	        	 $diff_str=$diff->format("%m months %d days %h hours %i minutes %s seconds");
	        	 $diff_str2="Assignment is overdue by:$diff_str";
	        }else{
	        	$diff_str2="";
	        }*/


	       

			
		
			echo "<li class='a';>

			<a href='CA Upload.php?module=$CA_module&ca_number=$number&task=$task&task_file=$full_task_file&closing_time=$closing_time'><h2 style='color:#ffffff;opacity:1;'>".$number."</h2></a>
			
            
        	




			
			
			

			<br>Download<a href='".$full_task_file."'>This File</a><br>Assignment:-".$task."<br>Valid Duration".date_format($validity,"Y-m-d H:i:s")."

			






			</li><br>";  
			
		}

	 ?>

	
	
	</ul>

<?php require_once 'footer.php';?>