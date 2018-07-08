<?php include 'header.php';
if (!isset($_SESSION['user']) || $_SESSION['user']->type != "lecturer") {
    header('Location: ' . $home);
    exit();
}
?>





<?php require_once 'footer.php'; ?>