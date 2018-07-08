<?php include 'header.php';
if (!isset($_SESSION['user']) || $_SESSION['user']->type != "admin") {logout();}
?>
    <h1>Welcome to Student and Examination Department</h1>
    <div class="announcement">
	</div>
<?php require_once 'footer.php'; ?>