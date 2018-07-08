<?php require_once 'header.php';
require_once './main/config.inc.php';
if (!isset($_SESSION['user']) || $_SESSION['user']->type != "admin") {
    header('Location: ' . $home);
    exit();
}
?>
<style>
    .results_table table tr th, table tr td
    { background: #333333;
        color: #FFF;
        margin: 7px 5px;
        padding: 7px 5px;
        text-align: left;
    }

    .results_table td {
        min-width: 80px;
        padding-left: 15px;
    }
    .button{
        color: blue;
        float: right;
        margin-right: 100px;
        border: 2px solid;
        font-size: large;
        text-align: center;
        width: 160px;
        height: 30px;
    }
    #table_section{
        margin: 50px auto auto 100px;
    }
</style>
    <?php
        $mydb = openDB();
        $query = "SELECT column_name FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_NAME = N'results'";
        $query1 ="SELECT * FROM RESULTS";
        $result = mysqli_query($mydb,$query);
        $result1 = mysqli_query($mydb,$query1);
        mysqli_close($mydb);
        echo "<div id='table_section'><table border='1' class='results_table'><tr>";
        while ($th=mysqli_fetch_row($result))echo "<th>".$th[0]."</th>";
        echo "</tr>";
        while($row = mysqli_fetch_row($result1))
        {
            echo "<tr>";
            foreach($row as $key=> $value) echo "<td>$value</td>";
            echo "</tr>";
        }
        echo "</table></div>";

    if (isset($_GET['approve'])&&$_GET['approve']=="true") {
        $mydb =openDB();
        $query="UPDATE `RESULTS` SET `APPROVED`=1 WHERE 1;";
        $result = mysqli_query($mydb,$query);
        mysqli_close($mydb);
        if($result){echo "Results are successfully approved.";}
    }
    ?>
        <a href="?approve=true" class="button">Approve Results</a>

<?php require_once 'footer.php'; ?>