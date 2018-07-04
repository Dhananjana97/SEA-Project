<div style="text-indent: 1.5em;">
<?php 
	$mydb = openDB();
	$categories = mysqli_query($mydb, "SELECT category_names FROM `question_categories`");
	mysqli_close($mydb);
	echo '<br><br><table>';
	while($category = mysqli_fetch_row($categories)[0]){
		echo '<tr><td>'.$category.'</td>
		<td><a href="?addQuestions='.$category.'"><text style="color:red;list-style-type: none;">Add Questions</text></a></td>
		<td><a href="?viewQuestions='.$category.'"><text style="color:red;list-style-type: none;">View Questions</text></a></td>
		</tr>';
	}
	echo '</table>';
	

?>
</div>