<?php


$mysql_host = "localhost";
$mysql_user = "root";
$con = mysqli_connect($mysql_host, $mysql_user, "", "sae");


$_queryselect = "SELECT module,date,venue FROM time_table WHERE dep='cse'&&sem='2'";
$is_query_run = mysqli_query($con, $_queryselect);
$i=1;
while ($query_execute = mysqli_fetch_assoc($is_query_run)) {
    $monew=$_GET["mo$i"];
    $moold=$query_execute["module"];
    $danew=$_GET["da$i"];
    $daold=$query_execute["date"];
    $venew=$_GET["ve$i"];
    $veold=$query_execute["venue"];

    $_querym = "UPDATE time_table SET module=\"$monew\" WHERE module=\"$moold\"";//editing about upadating
    mysqli_query($con,$_querym);

    $_queryd = "UPDATE time_table SET date=\"$danew\" WHERE date=\"$daold\"";//editing about upadating
    mysqli_query($con,$_queryd);

    $_queryv = "UPDATE time_table SET venue=\"$venew\" WHERE venue=\"$veold\"";//editing about upadating
    mysqli_query($con,$_queryv);


    $i++;

}

mysqli_close($con);
header("Location: ../../time_table.php");
?>
