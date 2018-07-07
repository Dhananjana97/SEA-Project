<?php

require_once 'header.php';
if (!isset($_SESSION['user']) || $_SESSION['user']->type != "instructor") {
    header('Location: login.php');
    exit();
}

if (isset($_GET['module'])) $module1 = $_GET['module']; else die("you can only go with selected module");
$module_arr = explode("-", $module1);
$batch = $module_arr[0];
$module = $module_arr[1];
if (isset($_GET['ca_number'])) $CA_number = $_GET['ca_number']; else die("you can only go with selected ca number");


$query2 = "SELECT * FROM `instructor_" . $module1 . "_ca` where CA_number='{$CA_number}'";

$mydb = openDB();
$ex2 = mysqli_query($mydb, $query2);
mysqli_close($mydb);
if ($ex2) {
    $result = mysqli_fetch_assoc($ex2);
    $assignment = $result['assignment'];
    $ass_file = $result['file'];
    $closing_time = $result['valid_duration'];


} else {

}


$query = "SELECT `student_name`,`" . $CA_number . "` FROM " . $batch . $module;

$mydb = openDB();
$ex = mysqli_query($mydb, $query);
mysqli_close($mydb);
if ($ex) {
    $a = array();
    while ($G_arr = mysqli_fetch_assoc($ex)) {

        array_push($a, $G_arr);


    }


} else {
    echo "not executed";
}


?>


    <title>Grade CAs</title>
    <link rel="stylesheet" href="includes/table.css">


    <h2 style="margin-left:20px;"><?php echo "$module1  $CA_number" ?></h2>

    <div style="margin-left:20px;margin-top:40px;font-family:'Times New Roman', Times, serif;font-size:20px;">
        <LABEL>Assignment:<?php echo "$assignment"; ?></LABEL>
        <br>
        <label>Assignment File:<?php echo "<a href='$ass_file'>This File</a>:" ?></label>
        <br>
        <label>Time Remaining:</label>
        <span id="w"></span>
        <span id="u"></span>

        <span id='remain'></span>
        <span id="overdue" style="background-color:red;"></span>
    </div>

    <script>

        var closing = "<?php echo "$closing_time"; ?>";


        var date = new Date(closing);
        var now = new Date();


        if (date > now) {
            timeRemain();

        } else {
            overDue();
        }


        function overDue() {
            var my = setInterval(overDue_time_diff, 1000);

        }

        function timeRemain() {
            var my2 = setInterval(timeRemain_time_diff, 1000);
        }


        function timeRemain_time_diff() {


            var now3 = new Date();

            var diff = Math.abs(date - now3);
            var diff_d = Math.floor(diff / (1000 * 60 * 60 * 24));
            var diff_h = Math.floor((diff % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var diff_m = Math.floor((diff % (1000 * 60 * 60)) / (1000 * 60));
            var diff_s = Math.floor((diff % (1000 * 60)) / (1000));
            var time_remain = diff_d + 'days ' + diff_h + 'hours ' + diff_m + 'minutes ' + diff_s + 'seconds ';


            document.getElementById('remain').innerHTML = time_remain;

        }


        function overDue_time_diff() {


            var now2 = new Date();

            var diff = Math.abs(date - now2);
            var diff_d = Math.floor(diff / (1000 * 60 * 60 * 24));
            var diff_h = Math.floor((diff % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var diff_m = Math.floor((diff % (1000 * 60 * 60)) / (1000 * 60));
            var diff_s = Math.floor((diff % (1000 * 60)) / (1000));
            var time_over = diff_d + 'days ' + diff_h + 'hours ' + diff_m + 'minutes ' + diff_s + 'seconds ';


            document.getElementById('overdue').innerHTML = "Assignment is over due by: " + time_over;

        }


    </script>

    <table dir="ltr" width=75% border="3" style="margin-left:20px;margin-right:20px;">


        <colgroup width="25%"/>
        <colgroup id="colgroup" align="center"
                  valign="middle" title="title" width="1*"
                  span="5" style="background:#e4c99e;"/>
        <style type="text/css">
            tr:hover {
                background-color: #d5ac68;
            }

        </style>
        <thead>
        <tr>
            <th scope="col" style="background-color:#82678b;margin-top:50px; ">Name/Index No</th>
            <th scope="col">Uploaded File</th>
            <th scope="col">Message</th>
            <th scope="col">Marks</th>
            <th scope="col">Feedback</th>
            <th scope="col">Submission Status</th>
        </tr>
        </thead>


        <tbody>

        <?php


        echo "<form id='grading' action='Grade CAs process.php?module=$module1&ca_number=$CA_number' method='Post' enctype='multipart/form-date'>";

        foreach ($a as $value) {
            $student_name = $value['student_name'];
            $CA = $value[$CA_number];
            if (empty($CA)) {

                $submitted = false;
                date_default_timezone_set('Asia/Colombo');
                $now7 = date('Y-m-d H:i:s');
                $cl_t = date_create($closing_time);

                if ($now7 < $cl_t) {

                    $back_color = 'red';
                } else {
                    $back_color = 'green';
                }
                $submission_status = "Not Submitted Yet";
                $message = "";
                $uploaded_file = "";
                $file_n = "";
                $submitted_time = "";
                $submission_t = "";
                $marks = "";
                $feedback = "";


            } else {
                $submitted = true;

                $CA_a = explode("|", $CA);
                //echo "------------------------------------------------------------";
                //print_r($CA_a);
                $message = $CA_a[0];
                $uploaded_file = $CA_a[1];
                $file_a = explode("/", $uploaded_file);
                $file_n = end($file_a);
                $file_n_arr = explode(".", $file_n);
                $file_ty = end($file_n_arr);
                $marks = $CA_a[2];
                $submitted_time = $CA_a[3];
                $submission_t = $CA_a[4];
                $feedback = $CA_a[5];
                $dif_a = explode("-", $submission_t);
                $dif_t = $dif_a[0];
                $dif_st = $dif_a[1];
                $submission_status = 'Submitted ' . $dif_t . ' ' . $dif_st;
                if ($dif_st == 'late') {
                    $back_color = 'red';
                } else {
                    $back_color = 'green';
                }


                //	print($submission_t);
                //	print($uploaded_file);

            }

            echo "

	 				
	 				<tr>
						<td style='font-weight:bold;color:black'>$student_name</td>

						<td style='display:none;'><textarea name='$student_name-message' style='display:none'>$message</textarea></td>
						<td style='display:none;'><textarea name='$student_name-up_file' style='display:none'>$uploaded_file</textarea></td>

						<td name='f'><a href='$uploaded_file'>$file_n</a></td>
						<td name='message'>$message</td>
						<td><textarea rows='1' name='$student_name-marks' style='background-color:#e4c99e;background-size:100%;border:hidden;width:100%;text-align:center;' placeholder='_________________' value='$marks'>$marks</textarea>
						</td>
						<td style='display:none;'><textarea name='$student_name-submit_time' style='display:none'>$submitted_time</textarea></td>
						<td style='display:none;'><textarea name='$student_name-submission_t' style='display:none'>$submission_t</textarea></td>
						<td><textarea rows='1' name='$student_name-feedback' style='background-color:#e4c99e;background-size:100%;border:hidden;width:100%;text-align:center;' placeholder='Give Feedback' value='$feedback'>$feedback</textarea>
						</td>
						<td style='background-color:$back_color;'>$submission_status</td>

					</tr>";


        }

        echo "</table>";

        //echo "<input type='submit' name='submit'>";
        echo "<button type='submit' name='submit' class='btn btn-success' style='margin-bottom:50px;margin-top: 30px;margin-left:75%;height:60px;width:100px'>Submit</button>";

        echo "</form>";


        ?>


<?php require_once 'footer.php'; ?>