<?php include 'header.php';
if (!isset($_SESSION['user'])) {
    header('Location:' . $home);
    exit();
}
?>
<?php
echo '<h2>' . $title . '</h2>';
function listFolders($dir)
{
    global $SitePath;
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
        if (is_dir($dir . '/' . $ff))
            echo '<li><a class = "listing">' . $ff . '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a style="text-decoration:none; color:blue;" href="submission?uploadedto=' . $SitePath . "/" . $dir . '/' . $ff . '">Upload Files</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a style="text-decoration:none; color:blue;" href="uploadpasspaper?dir=' . $dir . "/" . $ff . '">Go</a>';
        else
            echo '<li><a class = "listing">' . $ff;
        echo '</li></a>';
    }
    echo '</ol>';
}

?>
    <div class="bordered_frame">
        <!--Downloads directory path goes here-->
        <?php if (isset($_GET['dir'])) listFolders($_GET['dir']); else listFolders("Passpapers"); ?>
    </div>
<?php require_once 'footer.php'; ?>