<?php include 'header.php';
if(!isset($_SESSION['user'])|| $_SESSION['user']->type!="admin"){header('Location: $home'); exit();}
?>
<html>
<main>
<h1>Welcome to the Student and Examination Department Official WebSite.</h1>
<h1>Welcome to Admin home</h1>
</main>
<?php require_once 'footer.php';?>