<?php include 'header.php';
if(!isset($_SESSION['user'])|| $_SESSION['user']->type!="admin"){header('Location: login.php'); exit();}
?>
<html>
<main>
<h1>Welcome to Admin home</h1>
</main>
<?php require_once 'footer.php';?>