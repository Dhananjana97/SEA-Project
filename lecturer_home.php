<?php include 'header.php';
if(!isset($_SESSION['user'])|| $_SESSION['user']->type!="lecturer"){header('Location: '.$home); exit();}
?>

<html>
<main>
<h1>Welcome to Student and Examination Department</h1>

</main>
<?php require_once 'footer.php';?>
