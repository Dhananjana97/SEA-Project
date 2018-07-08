<?php include 'header.php';
if (!isset($_SESSION['user'])) {logout();}
?>
<html>
<?php
    echo '<h2>' . $title . '</h2>';
    function listFolders($dir)
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
            echo 
			'<li>'
			.'<span style="color:#000" class = "listing">' . $ff . '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>'
			.'<a style="text-decoration:none; color:blue;" href="listdirectory?title=' . $ff . '&&dir=' . $dir . '/' . $ff . '">Go</a>';
            echo '</li>';
        }
        echo '</ol>';
    }

    ?>
    <div class="bordered_frame">
        <!--Downloads directory path goes here-->
        <?php listFolders("Passpapers"); ?>
    </div>
    <?php require_once '/footer.php'; ?>
