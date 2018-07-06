<div style="text-indent: 1.5em;">
<br><br>
<form action = "quiz_home.php" method="POST">
<center>Category Name:&nbsp;&nbsp;&nbsp;<input style="width:420px; padding:4px 3px; border:2px solid" type="text" name = "categoryname">
<input style="padding:4.5px 3px; font-weight:bold;" type = "submit" value = "Create Category" ></center>
</form>
<?php 
	$mydb = openDB();
	$categories = mysqli_query($mydb, "SELECT category_names FROM `question_categories`");
	mysqli_close($mydb);
	echo '<br><table>';
	while($category = mysqli_fetch_row($categories)[0]){
		echo '<tr><td width="840px">'.$category.'</td><td style="padding:0 15px;"><a href="?deletecategory='.$category.'"><text style="color:red;list-style-type: none;">Delete</text></a></td></tr>';
	}
	echo '</table></div>';
?>
</div>