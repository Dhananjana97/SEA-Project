<?php include 'header.php';
if (!isset($_SESSION['user']) || $_SESSION['user']->type != "lecturer") {
    header('Location: ' . $home);
    exit();
}
$user = $_SESSION['user'];
$id = strtolower($user->id);
?>
<html>
<style>
    table, th, td {
        border-collapse: collapse;
    }

    .internal table, th, td {
        border-collapse: collapse;
    }

    .internal th, td {
        height: 30px;
        text-align: center;
        text-indent: 8px;
    }

    .inlink a {
        text-decoration: none;
        font-size: 22px;
        padding: 8px 35px;
        display: block;
        text-align: center;
        float: left;
    }

    .questions {
    }

    .answers ul {
        list-style-type: decimal;
    }

    #container {
        padding-left: 20px;
    }
</style>

<main>

<div id="container">
    <h3>Have a nice day <?php
        echo strtoupper($id);
        ?></h3>
    <?php
    $students = array(); //need to be from db or main page.
    $lectures = array();
    $qCategories = array(); //will be eretrieved from db


    function deleteRequest($name)
    {
        $mydb = openDB();
        global $dbname;
        
        $query0 = "DELETE FROM recorrection_requests WHERE index_no = '$name';";

        $result1 = mysqli_query($mydb, $query0);
        
        mysqli_close($mydb);
        if ($result1) {
            echo '<br><center>Deletion of ' . $name . ' is success</center>';
        }
    }

    function approveRequest($name)
    {
        $mydb = openDB();
        global $dbname;

        $query0 = "DELETE FROM recorrection_requests WHERE index_no = '$name';";
        
        $query1 ="INSERT INTO approved_recorrections(index_no,module_code,reason) VALUES (\"".$_GET["approverequest"]."\",\"".$_GET["mcode"]."\",\"".$_GET["reason"]."\")";

        $result1 = mysqli_query($mydb, $query1);
        $result2 = mysqli_query($mydb, $query0);
        
        mysqli_close($mydb);
        if ($result1 && $result2) {
            echo '<br><center>Approval of ' . $name . ' is success</center>';
        }
    }


    
    

    if ($user->type == 'lecturer') {
        echo '<div class="inlink"><center><a href="?content=show">Show Requests</a>&nbsp;</center></div>';



        if (isset($_GET['deleterequest']) && !empty($_GET['deleterequest'])) {
            deleteRequest($_GET['deleterequest']);
        }

        if (isset($_GET['approverequest']) && !empty($_GET['approverequest'])) {
            approveRequest($_GET['approverequest']);
            deleteRequest($_GET['approverequest']);
        }

            

        if (isset($_GET['content'])) {
            switch (strtolower($_GET['content'])) {
                case 'show':
                    include 'Recorrections/show_requests.php';
                    break;
                
            }
        }
    }
    ?>
</div>
</main>
</html>

<?php require_once 'footer.php'; ?>