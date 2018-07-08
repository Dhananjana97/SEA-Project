<?php
ob_start();

	require_once 'header.php';
	if(!isset($_SESSION['user'])|| $_SESSION['user']->type!="instructor"){header('Location: '.$home); exit();}


    echo "<h1 style='margin-top:40px;'></h1>";
    
    $errors='';
    $file_uploaded=false;
    $ft;
    if (isset($_POST['submit'])) {

        
        print_r($_POST);
        
        $message=$_POST['message'];
        $assignment_name=$_GET['CA_number'];
        $closing_time=$_POST['closing_time'];

        if(isset($_GET['module']))$CA_module=$_GET['module']; else die("you should select module");
        $module1=$_GET['module'];
        $submitted_file=$_GET['submitted_file'];
        $ar=explode("-",$module1);
        print_r($ar);
        $batch=$ar[0];
        $module=$ar[1];
       

        date_default_timezone_set('Asia/Colombo');
         echo "<br>";
        $now=new DateTime();
        $date=new DateTime($closing_time);

        echo "<br>";
       // print($d);
       // print(new DateTime());
       //echo $d->format('Y-m-d h:i:sa');
        //echo "<br>";
        //print(time());
        //print($d-$date_a);

       if($now>$date){
            echo "passed";
            $errors="Invalid Deadline";
        }else{
            echo "not";
        }




       print_r($_FILES);

        $File_name=$_FILES['file']['name'];
        $File_type=$_FILES['file']['type'];
        $File_tmp_name=$_FILES['file']['tmp_name'];
        $File_size=$_FILES['file']['size'];

        $upload_to="uploaded files/Instructor/".$batch."/".$module."/";
       // echo "$File_type";
        
       // echo "$File_size";

        if ($File_size > "5048576") {

            $errors="File Size is too large";

          //  echo "File Size is too large";
            
        }else{
          echo "11111111111111111";
        
        if ($File_type =="application/vnd.openxmlformats-officedocument.wordprocessingml.document" or $File_type=="application/msword") {
            $ft="doc";
            $file_uploaded = move_uploaded_file($File_tmp_name,$upload_to.$File_name);
            //$submit_st="Submiited";
        }elseif($File_type == "application/x-zip-compressed"){
            $ft="zip";
            $file_uploaded = move_uploaded_file($File_tmp_name,$upload_to.$File_name);
            // $submit_st="Submiited";
        
        }elseif($File_type == "application/pdf"){
          echo "222222222222";
            $ft="pdf";
            $file_uploaded = move_uploaded_file($File_tmp_name,$upload_to.$File_name);
            // $submit_st="Submiited";
            
        }elseif($File_type == "image/jpeg"){
            $ft="jpg";
            $file_uploaded = move_uploaded_file($File_tmp_name,$upload_to.$File_name);
            // $submit_st="Submiited";
        }elseif($File_type=="text/plain" ){
            $ft="txt";
            $file_uploaded = move_uploaded_file($File_tmp_name,$upload_to.$File_name);
            // $submit_st="Submiited";
        }
        else{

            if (!empty($File_type)) {
              $errors="File type is incorrect"; 
            }
            
            
           // echo "<h3 style='color:red;'>File type is incorrect</h3> ";
        }

        if (!empty($message) && empty($errors)) {
            $file_uploaded = true;
        }


        }
       
    }

    
        
    
?>

<?php 

   // $CA_module=$_GET['module'];
   // $CA_number=$_GET['ca_number'];
   // $submitted_file=$_GET['submitted_file'];

    




    if ($file_uploaded) {
      echo "333333333333333333";
      if (empty($errors)) {
        echo "44444444444444444444444";
      	if (empty($File_name)) {
          echo "5555555555555555555";

            echo "oooooooooooooooooooooo";

             $query2="UPDATE `instructor_{$module1}_ca` SET `assignment`='{$message}',`file`='{$submitted_file}',`valid_duration`='{$closing_time}' WHERE `CA_number`='{$assignment_name}'";
            
        
        }else{

            echo "pppppppppppppppppppppppppp";

            $query2="UPDATE `instructor_{$module1}_ca` SET `assignment`='{$message}',`file`='{$upload_to}{$File_name}',`valid_duration`='{$closing_time}' WHERE `CA_number`='{$assignment_name}'";
        }



        
      

        

      

        $conn=openDB();

        $ex=mysqli_query($conn,$query2);
        mysqli_close($conn);

        if ($ex) {
            echo "kkkkkkkkkkkkk";
            $CA_submitted=true;
                                            
        }else{
            $errors['database_added']="Not Uploaded Successfully";
            echo "Query not executed Successfully";
        }

      }

    }

    print($errors);

     header("Location:edit CA.php?module={$module1}&ca_number={$assignment_name}&errors={$errors}");

	require_once 'footer.php';
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
