<?php include 'header.php';
if(!isset($_SESSION['user'])|| $_SESSION['user']->type!="student"){header('Location: $home'); exit();}
?>
<style type = "text/css">
.formSub{
	position:relative;
	width: auto;
	min-height: 500px;
	left:50%;
    padding: 12px 10px;
    margin: 8px 10px 0 0 ;
    box-sizing: border-box;
	border: 2px solid #007799;
    border-radius: 4px;
	transform: translate(-50%, 0%);
}

</style>
	<br>
		<h3 style="margin-left:2ex;color:#ff0000;">Announcement:</h3>
		<div class ="formSub">
		  No anouncement there for you now
		  <br><br><br>
		</div>
<?php include 'footer.php';?>