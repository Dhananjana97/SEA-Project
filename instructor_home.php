<?php 
	include 'header.php';
	if(!isset($_SESSION['user'])|| $_SESSION['user']->type!="instructor"){header('Location: $home'); exit();}
?>

<html>
<main>
<h1>Welcome to Instructor home</h1>
</main>
<?php require_once 'footer.php';?>