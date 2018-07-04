<?php include 'header.php';
if(!isset($_SESSION['user'])|| $_SESSION['user']->type!="lecturer"){header('Location: login.php'); exit();}
?>

<html>
<main>
<h1>Welcome to Lecturer home</h1>
Lecturer wants to provide QUIZ
Lecturer wants to set homework submission link
Lecturer wants to update results
Lecturer wants to see students’ attendance
Lecture wants approve re-correction request

</main>
<?php require_once 'footer.php';?>
