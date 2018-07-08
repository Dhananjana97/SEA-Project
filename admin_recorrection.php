<?php include 'header.php';
if (!isset($_SESSION['user']) || $_SESSION['user']->type != "admin") {
    header('Location: ' . $home);
    exit();
}
?>





<?php require_once 'footer.php'; ?>