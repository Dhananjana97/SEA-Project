<?php include 'header.php';
if (!isset($_SESSION['user'])) {
    header('Location:' . $home);
    exit();
}
if (isset($_GET['title']) && isset($_GET['dir'])) {
    $title = $_GET['title'];
    $dir = $_GET['dir'];
} else {
    die('Please give correct path...');
}
?>
    <html>
    <style>
        .DirList {
            margin: 0 10px 0 0;

            padding: 12px 40px;
            border: 1px solid #090909;
            width: auto;
        }

        a[class="listing"] {
            font-weight: regular;
            text-decoration: none;
            color: Black;
            text-transform: capitalize;
            text-shadow: .2px .2px black;
            line-height: 1.7;
        }
    </style>
<main>
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
            echo '<li><a class = "listing">' . $ff;
            listFolderFiles($dir . '/' . $ff, $path1);
        }
        echo '</li></a>';
    }
    echo '</ol>';
}

?>
    <div class="DirList">
        <!--Downloads directory path goes here-->
        <?php listFolderFiles($dir); ?>
    </div>
<?php require_once 'footer.php'; ?>