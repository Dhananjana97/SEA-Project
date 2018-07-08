<?php require_once 'header.php';
require_once './main/config.inc.php';
if (!isset($_SESSION['user']) || $_SESSION['user']->type != "student") {
    header('Location: ' . $home);
    exit();
}
?>

    <html>
<style>
    table, th, td {
        border: 5px solid black;
        border-collapse: collapse;
        padding: 5px;
        text-align: left;
    }

    th, td {

    }

    .inlink a {
        text-decoration: none;
        font-size: 22px;
        padding: 8px 35px;
        display: block;
        text-align: center;
        float: left;
    }
</style>
<main>
    <?php
    if (isset($_SESSION['user'])) {
        $user = $_SESSION['user'];
    } else {
        die('You must login to see this page!');
    }
    if ($user->type != 'student') die('only student can access this page!');
    echo '<div class="inlink">
				<center><a href="?results=show">View Results</a>&nbsp;<a href="?overallGPA=show">View Overall GPA</a></center>
			</div>';
    $id = $user->id;
    $mydb = openDB();
    $results = mysqli_query($mydb, "SELECT * FROM RESULTS WHERE id = '$id'");
    $gpa_chart = mysqli_query($mydb, "SELECT * FROM GPA_CHART");
    $module_credit = mysqli_query($mydb, "SELECT * FROM Modules");
    mysqli_close($mydb);
    $result_column = mysqli_fetch_fields($results);
    $result_row = mysqli_fetch_row($results);
    $approved = array_pop($result_row);
    if (!$approved) {
        die('<center>Results not released yet, Try again later!</center>');
    }
    if (isset($_GET['results']) && $_GET['results'] == "show") {
        echo '<center><table style="margin-top:-20px;">';
        foreach ($result_row as $key => $field) {
            if ($field != NULL) {
                echo '<tr><td style="width:300px">' . strtoupper($result_column[$key]->name) . '</td>' . '<td><center>' . $field . '</center></td></tr>';
                echo '<br>';
            }
        }
        echo '</table></center>';
    }

    if (isset($_GET['overallGPA']) && $_GET['overallGPA'] == "show") {
        $gpalist = array();
        while ($row = $gpa_chart->fetch_assoc()) {
            $gpalist[$row['GRADE']] = $row['GPA'];
        }

        $credits = array();
        while ($row = mysqli_fetch_row($module_credit)) {
            $credits[$row[0]] = $row[1];
        }

        $GPA = 0;
        $credit = 0;
        for ($i = 1; $i < count($result_row); $i++) {
            if ($result_row[$i] == NULL) {
                die('<br><center>Results for some modules have not been released yet, Try again later!</center>');
            }
            $cur_credit = $credits[strtoupper($result_column[$i]->name)];
            $GPA += $gpalist[$result_row[$i]] * $cur_credit;
            $credit += $cur_credit;
        }
        echo '<br><br><br><center><table><tr><td><center><text style="font-size:20px; font-weight: bold">You Current Overall GPA:  ' . $GPA / $credit . '</text></td></tr></table></center>';
    }
    ?>

</main>
<?php require_once 'footer.php'; ?>