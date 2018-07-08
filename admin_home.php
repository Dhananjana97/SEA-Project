<?php include 'header.php';
if (!isset($_SESSION['user']) || $_SESSION['user']->type != "admin") {
    header('Location: ' . $home);
    exit();
}
?>
    <h1>Welcome to Student and Examination Department</h1>
    <h1>Have a nice day, <?php echo strtoupper($_SESSION['user']->id); ?></h1>
<?php require_once 'footer.php'; ?>