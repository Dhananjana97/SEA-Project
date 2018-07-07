  
<?php 

	require_once 'header.php';
	if(!isset($_SESSION['user'])|| $_SESSION['user']->type!="student"){header('Location: '.$home); exit();}
	

    /* $file_uploaded=false;
    $vari=false;
    
    $ft;
    if (isset($_POST['submit'])) {

        echo "string";

        $vari=true;
        $message=$_POST['message'];




       

        $File_name=$_FILES['file']['name'];
        $File_type=$_FILES['file']['type'];
        $File_tmp_name=$_FILES['file']['tmp_name'];
        $File_size=$_FILES['file']['size'];

        $upload_to='js/';
       // echo "$File_type";
        
        echo "$File_size";

        if ($File_size > "5048576") {

            echo "File Size is too large";
            
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
            
        }elseif($File_type == "image/jpeg"){
            $ft="jpg";
            $file_uploaded = move_uploaded_file($File_tmp_name,$upload_to.$File_name);
            // $submit_st="Submiited";
        }elseif (!empty($message)) {
            $file_uploaded = true;
        }
        else{
            echo "<h3 style='color:red;'>File type is incorrect</h3> ";
        }


        }
       
    }*/

    
        
    
?>

<?php 
	if(isset($_GET['module']))$CA_module=$_GET['module']; else die("you can only go with selected module");
	if(isset($_GET['ca_number']))$CA_number=$_GET['ca_number']; else die("you can only go with selected ca number");
    $GLOBALS['conn'] =$conn;
    $batch=$_SESSION['user']->batch;
	if(isset($_GET['task']))$task=$_GET['task']; else die("you can only go with selected task");
	if(isset($_GET['task_file']))$task_file=$_GET['task_file']; else die("you can only go with selected task");
    $closing_time=$_GET['closing_time'];

    




   /* if ($file_uploaded) {

        if (empty($File_name)) {

             $query2="update {$CA_module} set {$CA_number}='{$message}|".$_GET['submitted_file']."|'where student_name='{$_SESSION['user']}' ";
            
        
        }else{

            $query2="update {$CA_module} set {$CA_number}='{$message}|{$upload_to}{$File_name}|'where student_name='{$_SESSION['user']}' ";
        }

        

        $ex=mysqli_query($conn,$query2);

        if ($ex) {
                                            
        }else{
            echo "Query not executed Successfully";
        }

    }*/


 ?>

 <?php 

  if (!empty($_GET['errors'])) {
    $error=$_GET['errors'];
  }
  
  

  $query="SELECT `".$CA_number."` FROM `".$batch.$CA_module."` WHERE student_name='".$_SESSION['user']->id."' ";
	$mydb = openDB();
    $ex_ob=mysqli_query($mydb,$query);
	mysqli_close($mydb);
	
    $submit_stat;

    if ($ex_ob) {
      
        $submission=mysqli_fetch_assoc($ex_ob);
      //  print_r($submission);

         $g=explode("|",$submission[$CA_number]);
         
         print_r($g);
         print(count($g));
         

         
         if (count($g)==1 && empty($g[0])) {
            
             $g[1]="";
             $g[2]="";
             $g[3]=""; 
            
            
         }
         

     }else{
        echo "Query not excecuted Successfully";
    }

    

  ?>

 

 




<!DOCTYPE html>
<html lang="en">
    <head>

        
       
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>CA Upload</title>
        <!-- Latest compiled and minified CSS 
        <link rel="stylesheet" href="includes/vendor/bootstrap/css/bootstrap.min.css" >
        <Optional theme 
        <link rel="stylesheet" href="css/bootstrap-theme.min.css" >-->
        
        <link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.min.css">
       <!-- <link rel="stylesheet" href="css/form.css" >-->
        <link rel="stylesheet" href="includes/css/fileUploadSubmit.css">
       <!-- <script src="js/form.js"></script>-->
    </head>
    
        <div class="container">
            <!-- Form Started -->
            <div class="container form-top">
                <h3 style="font-weight:bold;font-size:40px;"><?php echo "$CA_module  $CA_number"; ?></h3>
                <br>
                <div class="row">
                    

                    <div class="">
                        <div class="panel panel-danger">
                            <div class="panel-body">

                        
                                <form id="reused_form"  style="border:2px;" action=<?php echo "'CA Upload Process.php?module=$CA_module&ca_number=$CA_number&submitted_file=$g[1]&task=$task&task_file=$task_file&closing_time=$closing_time'"; ?> method="Post" enctype="multipart/form-data" >


                                 <p style="font-weight:bold;font-size:20px;"> <?php echo "Download"; ?><a href="<?php echo "$task_file" ?> ">This File</a>
                                      <?php echo "$task"; ?>

                                </p>

                                  
                                   
                                    <div class="form-group">
                                         <label><i class="fa fa-envelope" aria-hidden="true" name="sub"></i> Submission Status :</label>

                                         <?php 
                                            

                                               
                                                    
                                                    
                                                    if ($submission) {
                                                        
                                                        if (empty($submission[$CA_number])) {
                                                            $submit_stat=false;
                                                            echo "<span style='font-size:x-large;'>Not Submitted</span>";
                                                        }else{
                                                          $submit_stat=true;
                                                           echo "<span style='font-size:x-large;'>Submitted</span>"; 
                                                        }
                                                    }
                                               




                                             ?>

                                             <br>

                                            <label><i class="fa fa-envelope" aria-hidden="true"></i> Grade :</label>

                                            <?php 

                                               

                                                
                                                

                                                if (empty($g[2])) {
                                                    echo "<span style='font-size:x-large;'>Not Graded</span>";
                                                
                                                }else{
                                                    echo "<span style='font-size:x-large;'>$g[2]</span>";                                              
                                                }
                                             ?>
                                             <br>

                                              <label><i class="fa fa-envelope" aria-hidden="true"></i> Feedback :</label>

                                              <?php 

                                                if (empty($g[5])) {
                                                    echo "<span style='font-size:x-large;'></span>";
                                                
                                                }else{
                                                    echo "<span style='font-size:x-large;'>$g[5]</span>";                                              
                                                }




                                               ?>

                                        
                                    </div>
                                    
                                    <?php 

                                    $sub=$g[3];
                                    



                                     ?>

                                     <p id="q"></p>
                                     <p id="w"></p>

                                     <script>
                                      
                                        var closing="<?php echo "$closing_time"; ?>";
                                          

                                        
                                        var date=new Date(closing);
                                        var submit_s="<?php echo "$submit_stat" ?>";
                                        var sub="<?php echo "$sub" ?>";

                                         if (submit_s) {
                                          
                                          var submitted_time=new Date(sub);
                                          var diff_of_submission=(date-submitted_time);
                                        
                                        }else{

                                        }

                                        function overDue() {
                                            var my=setInterval(overDue_time_diff, 1000);
                                            
                                          }

                                        function timeRemain() {
                                          var my2=setInterval(timeRemain_time_diff,1000);
                                        }

                                         function earlySubmission() {
                                          var diff_of_submission2=Math.abs(diff_of_submission);
                                          var diff_d=Math.floor(diff_of_submission2/(1000*60*60*24));
                                          var diff_h=Math.floor((diff_of_submission2%(1000*60*60*24))/(1000*60*60));
                                          var diff_m=Math.floor((diff_of_submission2%(1000*60*60))/(1000*60));
                                          var diff_s=Math.floor((diff_of_submission2%(1000*60))/(1000));
                                          var time_early=diff_d+'days '+diff_h+'hours '+diff_m+'minutes '+diff_s+'seconds ';

                                         



                                          document.getElementById('early').innerHTML='Assignment was submitted '+time_early+'early';
                                          
                                        }
                                         function lateSubmission() {
                                          var diff_of_submission2=Math.abs(diff_of_submission);
                                          var diff_d=Math.floor(diff_of_submission2/(1000*60*60*24));
                                          var diff_h=Math.floor((diff_of_submission2%(1000*60*60*24))/(1000*60*60));
                                          var diff_m=Math.floor((diff_of_submission2%(1000*60*60))/(1000*60));
                                          var diff_s=Math.floor((diff_of_submission2%(1000*60))/(1000));
                                          var time_late=diff_d+'days '+diff_h+'hours '+diff_m+'minutes '+diff_s+'seconds ';

                                         



                                          document.getElementById('late').innerHTML='Assignment was submitted '+time_late+'late';
                                          
                                        }




                                        function timeRemain_time_diff() {
                                              
                                         
                                          var now3=new Date();
                                          
                                          var diff=Math.abs(date-now3);
                                          var diff_d=Math.floor(diff/(1000*60*60*24));
                                          var diff_h=Math.floor((diff%(1000*60*60*24))/(1000*60*60));
                                          var diff_m=Math.floor((diff%(1000*60*60))/(1000*60));
                                          var diff_s=Math.floor((diff%(1000*60))/(1000));
                                          var time_remain=diff_d+'days '+diff_h+'hours '+diff_m+'minutes '+diff_s+'seconds ';

                                         



                                          document.getElementById('remain').innerHTML=time_remain;
                                        
                                      }
                                          

                                          function overDue_time_diff() {
                                              
                                         
                                          var now2=new Date();
                                          
                                          var diff=Math.abs(date-now2);
                                          var diff_d=Math.floor(diff/(1000*60*60*24));
                                          var diff_h=Math.floor((diff%(1000*60*60*24))/(1000*60*60));
                                          var diff_m=Math.floor((diff%(1000*60*60))/(1000*60));
                                          var diff_s=Math.floor((diff%(1000*60))/(1000));
                                          var time_over=diff_d+'days '+diff_h+'hours '+diff_m+'minutes '+diff_s+'seconds ';

                                         



                                          document.getElementById('overdue').innerHTML="Assignment is over due by: "+time_over;
                                        
                                      }


                                    </script>

                                    <label><i class="fa fa-clock-o" aria-hidden="true"></i> Time Remaining :
                                      <span id="overdue" style="font-weight:bold;color:red;"></span>
                                      <span id="remain"></span>
                                      <span id="early" style="font-weight:bold;color:black;background-color:green;"></span>
                                      <span id="late" style="font-weight:bold;color:black;background-color:red;"></span>

                                      <?php 

                                      if (empty($_GET['errors'])) {

                                        
                                        if ($submit_stat) {
                                           echo "
                                           
                                          <script>
                                          if(diff_of_submission>=0){
                                            earlySubmission();
                                          }else{
                                            lateSubmission();
                                          }





                                          </script>
                                          ";
                                          
                                          
                                        }else{
                                          echo "
                                          <script>

                                          var now=new Date();
                                          
                                          var t_diff=date-now;

                                           if (t_diff<0) {
                                            overDue();

                                          }else{
                                            timeRemain();
                                          }


                                         

                                      

                                          

                                          </script>




                                          ";




                                        }
                                      }else{
                                        echo "<span style='font-size:xxx-large;color:red;font-weight:bold;'>".$error."</span>";
                                      }






                                       ?>





                                    </label>

                                    <div class="form-group">
                                        <label><i class="fa fa-comment" aria-hidden="true"></i> Message</label>
                                        <textarea rows="3" name="message" class="form-control" placeholder="Type Your Message" style="width:500px;"><?php echo "$g[0]"; ?></textarea>
                                    </div>
                                    <div>
                                        <label><i class="fa fa-upload" aria-hidden="true"></i>Upload Your Files</label>
                                        <input type="file" name="file" class="form-control" class="form-submit-button" style="width:350px;">
                                        <br> 

                                        <div id="logo" style="width:400px;height:290px;background-color:white;">

                                        <a href=""></a>


                                        <?php 

                                        if (!empty($submission[$CA_number])) {

                                            $f_a=explode('/', $g[1]);
                                            $f_n=end($f_a);
                                            $f_t=explode(".", $g[1]);
                                            $ft=end($f_t);
                                            
                                            
                                           


                                            if($ft=="pdf") {
                                                echo "<a href='$g[1]'>"."<img style='padding-top:5px;padding-left:5px;'src='images/pdf.jpg'>"."</a>";
                                                
                                                echo "<br>";
                                                echo "<a style='padding-left:10px;' href='$g[1]'>". $f_n."</a>";

                                            }elseif($ft=="doc" or $ft=="docx"){
                                                echo "<a href='$g[1]'>"."<img style='padding-top:5px;padding-left:5px;'src='img/doc_logo.png'>"."</a>";
                                                 echo "<br>";
                                                echo "<a href='$g[1]'>".$f_n."</a>";

                                            }elseif ($ft=="txt") {
                                              
                                                echo "<a href='$g[1]'>"."<img style='padding-top:5px;padding-left:5px;'src='img/txt.png'>"."</a>";
                                                 echo "<br>";
                                               echo "<a href='$g[1]'>".$f_n."</a>";
                                            }



                                            elseif($ft=="zip"){
                                                echo "<a href='$g[1]'>"."<img style='padding-top:5px;padding-left:5px;'src='img/zip.jpg'>"."</a>";
                                                 echo "<br>";
                                               echo "<a href='$g[1]'>".$f_n."</a>";
                                            }elseif($ft=="jpg" or $ft=="png"){
                                                echo "<a href='$g[1]'>"."<img style='padding-top:5px;padding-left:5px;max-width:50%;max-height:50%;'src='$g[1]'>"."</a>";
                                                 echo "<br>";
                                                echo "<a href='$g[1]'>".$f_n."</a>";
                                            

                                        }else{
                                          

                                          if (!empty($error)) {
                                            
                                            echo "<div style='ont-size:xxx-large;color:red;position:center;padding-left:35%;padding-top:100px;font-weight:bold;'>".$error."</div>";
                                          }else{
                                            echo "<div style='ont-size:xxx-large;color:red;position:center;padding-left:35%;padding-top:100px;font-weight:bold;'>Not File Submitted</div>";
                                          }
                                            
                                            
                                        }
                                      }


                                         ?>

                                         <?php 

                                           /* function remove_file_path($path)
                                            {
                                                global $CA_module;
                                                




                                                if (2==2) {
                                                    
                                                    $query3="update {$CA_module} set {$CA_number}='||'where student_name='{$_SESSION['user']}' ";

                                                    $ob=mysqli_query($GLOBALS['conn'],$query3);

                                                    if ($ob) {
                                                        return "File Deleted";
                                                    }else{
                                                        return "Error";
                                                    }

                                                }else{
                                                    return "Error in file deleting!";
                                                }
                                            }*/
                                                


                                          ?>

                                         <script type="text/javascript">
                                             
                                            /* function removef() {
                                                document.getElementById('logo').innerHTML="qqqqqqqqqqqq";

                                                var c=confirm("Do you want to delete file?");
                                                if (c == true) {
                                                  // document.getElementById('logo').innerHTML='';

                                                   <?php //echo " document.getElementById('logo').innerHTML='".remove_file_path($g[1])."';";
                                                    ?>
                                                }

                                            }

                                               // var c=confirm("Do you want to delete file?");
                                                //if (c == true) {
                                                  // document.getElementById('logo').innerHTML='';

                                                    <?php 
                                                    
                                                 //  echo " document.getElementById('logo').innerHTML='';";
                                                 //   echo " document.getElementById('logo').innerHTML='".remove_file_path($p)."';";

                                                    ?>



                                                    /*   if (unlink($g[1])) {
                                                             echo "File Deleted";
                                                         }else{
                                                            echo "Error in file deleting!";
                                                         }

                                                       $query3="update {$CA_module} set {$CA_number}='{$message}||'where student_name='{$_SESSION['user']}' ";

                                                        $ob=mysqli_query($conn,$query3);

                                                        if ($ob) {
                                                            # code..
                                                        }else{
                                                            echo "Error";
                                                        }

                                                    
                                                }
                                                    
                                                } */
                                             


                                         </script>

                                         
                                        
                                        
                                    </div>
                                    <div >
                                        


                                    </div>
                                    <br>
                                    <div >
                                        <button type="submit" name='submit' class="form-submit-button" style="margin-bottom:50px;" >Submit</button>
                                    </div>
                                    <br>
                                   

          


                                </form>
                            </div>
                        </div>
                    </div>
                        

                       
                    </div>
                </div>
            </div>
            <!-- Form Ended -->
<?php require_once 'footer.php';?>




  
