<?php 
	require_once 'header.php';
	if(!isset($_SESSION['user'])|| $_SESSION['user']->type!="instructor"){header('Location: login.php'); exit();}

	
	if(!isset($_GET['task']))
		echo '<main><h3><a href="?task=1">Edit CAs</a><h3>'.
		'<h3><a href="?task=2">Evaluate CAs</a><h3></main>';
	else{
		$task=$_GET['task'];

  ?>



	<h2 style="margin-left:10px;">Select a Module</h2>
	<?php 

		$query="select modules from instructor_modules where instructor_name='$user->id'";
		$mydb = openDB();
		$execute_object=mysqli_query($mydb,$query);
		mysqli_close($mydb);

		if ($execute_object) {
			$result_set=mysqli_fetch_assoc($execute_object);
			$registered_modules=explode(",",$result_set['modules']);
			

		}

		





	 ?>

<ul class="b">
	<?php 

		foreach ($registered_modules as $m) {

			if ($task=='1') {
				echo "<li class='b' style='font-size:35px;'><a href='Given_CAs from instructor.php?module=$m&task=$task'>".$m."</a></li>"; 
			}elseif ($task=='2') {
				echo "<li class='b' style='font-size:35px;'><a href='Given CAs for grading.php?module=$m&task=$task'>".$m."</a></li>"; 
			}

			
			
		}

	 ?>
	
	



</ul>




<footer>
	<?php include 'includes/Footer.php'; ?>
</footer>


<?php } require_once 'footer.php';?>



