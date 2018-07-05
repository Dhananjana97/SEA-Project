<h1>Welcome to the Student and Examination Department Official WebSite.</h1>
<?php include 'header.php';
if(!isset($_SESSION['user'])|| $_SESSION['user']->type!="student"){header('Location: $home'); exit();}
?>
<style type = "text/css">
.formSub{
	position:relative;
	width: auto;
	min-height: 500px;
    padding: 12px 10px;
    margin: 8px 10px 0 0 ;
    box-sizing: border-box;
	border: 2px solid #007799;
    border-radius: 4px;
}

</style>
	<br>
		<h3 style="color:#ff0000;">Announcement:</h3>
		<div class ="formSub">
		  No anouncement there for you now
		  <br><br><br>
		</div>
<?php include 'footer.php';?>