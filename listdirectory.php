<?php include 'header.php';
if (!isset($_SESSION['user'])) {logout();}
if (isset($_GET['title']) && isset($_GET['dir'])) {
    $title = $_GET['title'];
    $dir = $_GET['dir'];
} else {
    die('Please give correct path...');
}
?>
<?php
echo '<h2>' . $title . '</h2>';
function listFolderFiles($dir)
{
    $path = parse_url($dir, PHP_URL_PATH);
    $segments = explode('/', rtrim($path, '/'));
    $path = '/' . join("/", array_slice($segments, 3)) . '/';
    $ffs = scandir($dir);

    unset($ffs[array_search('.', $ffs, true)]);
    unset($ffs[array_search('..', $ffs, true)]);
    // prevent empty ordered elements
    if (count($ffs) < 1)
        return;

    echo '<ol style="font-size:x-large">';
    foreach ($ffs as $ff) {
        $path1 = $path . $ff . '/';

        if (!is_dir($dir . '/' . $ff)) {
            echo '<li><a class = "listing" href="' . $dir . $path . $ff . '">' . $ff;
        } else {
            echo '<li><a class = "listing">' . $ff.'</a>';
            listFolderFiles($dir . '/' . $ff, $path1);
        }
        echo '</li>';
    }
    echo '</ol>';
}

?>
    <div class="bordered_frame">
        <!--Downloads directory path goes here-->
        <?php listFolderFiles($dir); ?>
    </div>
<?php require_once 'footer.php'; ?>