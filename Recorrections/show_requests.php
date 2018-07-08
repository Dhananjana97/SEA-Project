<div style="text-indent: 1.5em;">
<br><br>

<?php 
	$mydb = openDB();
	$indexes = mysqli_query($mydb, "SELECT index_no, module_code, reason FROM `recorrection_requests`");
	mysqli_close($mydb);
	echo '<br><table>';
	while($index = mysqli_fetch_row($indexes)){
		echo '<tr><td width="210px">'.$index[0].'</td><td width="210px">'.$index[1].'</td><td width="405px">'.$index[2].'</td><td style="padding:0 15px;"><a href="?approverequest='.$index[0].'&mcode='.$index[1].'&reason='.$index[2].'"><text style="color:green;list-style-type: none;">Approve</text></a></td><td style="padding:0 15px;"><a href="?deleterequest='.$index[0].'"><text style="color:red;list-style-type: none;">Delete</text></a></td></tr>';
	}
	echo '</table></div>';
?>
</div>