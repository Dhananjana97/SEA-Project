<?php
ob_start();
	require_once 'header.php';
	if(!isset($_SESSION['user'])|| $_SESSION['user']->type!="student"){header('Location: '.$home); exit();}
?>


<?php
    $errors="";
    $file_uploaded=false;
    $batch=$user->batch;
	if(isset($_GET['module']))$CA_module=$_GET['module']; else die("you can only go with selected module");
    if(isset($_GET['ca_number']))$CA_number=$_GET['ca_number']; else die("you can only go with selected ca number");

    
    $ft="";
    if (isset($_POST['submit'])){

        echo "@@@@@@@@@@@@@##########$$$$$$$$$$$";

        
        print_r($_POST);
        
        $message=$_POST['message'];




       

        $File_name=$_FILES['file']['name'];
        $File_type=$_FILES['file']['type'];
        $File_tmp_name=$_FILES['file']['tmp_name'];
        $File_size=$_FILES['file']['size'];


        $upload_to="uploaded files/Students/".$batch."/".$CA_module."/".$CA_number."/";
       // echo "$File_type";
        if (file_exists("uploaded files/Students/".$batch."/".$CA_module."/".$CA_number)) {
            echo "zzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzz";
        }else{
            mkdir($upload_to);
        }

        if (file_exists("uploaded files/Students/".$batch."/".$CA_module."/".$CA_number."/".$File_name)) {


           $t=date("Ymdhis-");
           echo "33333333333333";
           
           

           echo "$File_name";

            //echo "33333333333333";
            //echo "{$t}";

        }
        

        
        echo "$File_size";
        echo "<pre>";
        print_r($_FILES);
        echo "<pre>";
        echo "$File_name";
        if ($File_size > "12582912") {

            echo "@@@@@@@@@@@@";

            $errors="File Size is too large";

           

          //  echo "File Size is too large";
            
        }else{
        
        if ($File_type =="application/vnd.openxmlformats-officedocument.wordprocessingml.document" or $File_type=="application/msword") {
            $ft="doc";
            $file_uploaded = move_uploaded_file($File_tmp_name,$upload_to.$File_name);
            //$submit_st="Submiited";
        }elseif($File_type == "application/x-zip-compressed"){
            $ft="zip";
            $file_uploaded = move_uploaded_file($File_tmp_name,$upload_to.$File_name);
            // $submit_st="Submiited";
        
        }elseif($File_type == "application/pdf"){
            $ft="pdf";
            $file_uploaded = move_uploaded_file($File_tmp_name,$upload_to.$File_name);
            // $submit_st="Submiited";
            
        }elseif($File_type == "image/jpeg" or $File_type=="image/png"){
            $ft="jpg";
            $file_uploaded = move_uploaded_file($File_tmp_name,$upload_to.$File_name);
            // $submit_st="Submiited";
        }elseif ($File_type=="text/plain" ) {
            $ft="txt";
            $file_uploaded = move_uploaded_file($File_tmp_name,$upload_to.$File_name);

        }


        
        else{

            if (!empty($File_type)) {
                $errors="File type is incorrect"; 
            //header("Location:CA Upload.php?module={$CA_module}&ca_number={$CA_number}&submitted_file={$_GET['submitted_file']}&errors={$errors}&task=$task&task_file=$task_file&closing_time=$closing_time");
            //echo "ttttttttttttt";
            //die();
            }

            
            
            
           // echo "<h3 style='color:red;'>File type is incorrect</h3> ";
        }
    

        if (!empty($message) or !empty($_GET['submitted_file']) ) {
            $file_uploaded = true;
        }


        }
        echo "$ft";
       
    }

    
        
    
?>

<?php 

    date_default_timezone_set('Asia/Colombo');
    $task=$_GET['task'];
    $task_file=$_GET['task_file'];
    $closing_time=$_GET['closing_time'];
    $submitted_file=$_GET['submitted_file'];
    $submitted_time_ob=new DateTime();
    $closing_time_ob=new DateTime($closing_time);
    $diff_of_submission=$submitted_time_ob->diff($closing_time_ob);
    echo "eeeeeeeeeeeeeeeeeeee";
    echo "<br>";
    
    $diff_of_submission_str=$diff_of_submission->format('%mmonths %ddays %Hhours %iminutes %sseconds');
    print(gettype($diff_of_submission_str));
    echo $diff_of_submission_str;
    $submitted_time=$submitted_time_ob->format('Y-m-d H:i:s');

    if ($submitted_time_ob>$closing_time_ob) {
        echo "late";
        $submit_t="late";
    }else{
        echo "not late";
        $submit_t="not late";
    }


    




    if ($file_uploaded) {

        if (empty($errors)) {
            if (empty($File_name)) {

                $query2="update `{$batch}{$CA_module}` set `{$CA_number}`='{$message}|".$_GET['submitted_file']."||{$submitted_time}|{$diff_of_submission_str}-{$submit_t}'where `{$batch}{$CA_module}`.`student_name`='{$_SESSION['user']->id}' ";
                print("update {$batch}{$CA_module} set {$CA_number}='{$message}|".$_GET['submitted_file']."||{$submitted_time}|{$diff_of_submission_str}-{$submit_t}'where student_name='{$_SESSION['user']->id}' ");
            
        
            }else{

                $query2="update `{$batch}{$CA_module}` set `{$CA_number}`='{$message}|{$upload_to}{$File_name}||{$submitted_time}|{$diff_of_submission_str}-{$submit_t}|'where `{$batch}{$CA_module}`.`student_name`='{$_SESSION['user']->id}' ";

             


            



            echo "11111111111111111111";
            print("update '{$batch}{$CA_module}' set {$CA_number}='{$message}|{$upload_to}{$File_name}||{$submitted_time}|{$diff_of_submission_str}-{$submit_t}|'where student_name='{$_SESSION['user']->id}' ");
        }

        
        $conn=openDB();
        $ex=mysqli_query($conn,$query2);
        mysqli_close($conn);

        if ($ex) {
            header("Location:CA Upload.php?module={$CA_module}&ca_number={$CA_number}&submitted_file={$submitted_file}&errors={$errors}&task=$task&task_file=$task_file&closing_time=$closing_time");
                                            
        }else{
            $errors['database_added']="Not Uploaded Successfully";
            echo "Query not executed Successfully";
        }

        }else{
            header("Location:CA Upload.php?module={$CA_module}&ca_number={$CA_number}&submitted_file={$submitted_file}&errors={$errors}&task=$task&task_file=$task_file&closing_time=$closing_time");
        }

        
    }

     header("Location:CA Upload.php?module={$CA_module}&ca_number={$CA_number}&submitted_file={$submitted_file}&errors={$errors}&task=$task&task_file=$task_file&closing_time=$closing_time");


	require_once 'footer.php';
    echo "111111111111111111111111111111";
  


 ?>

 <?php 

 /* $query="SELECT `".$CA_number."` FROM `".$CA_module."` WHERE student_name='".$_SESSION['user']."' ";
    $ex_ob=mysqli_query($conn,$query);

    if ($ex_ob) {
        $submission=mysqli_fetch_assoc($ex_ob);

         $g=explode("|",$submission[$CA_number]);

     }else{
        $errors['select_CA']="CA not selected Successfully";
        //echo "Query not excecuted Successfully";
    }

    

  


    header("Location:CA Upload.php?module={$CA_module}&ca_number={$CA_number}&submitted_file={$submitted_file}&file_uploaded");

   */ 
        
  ?>  