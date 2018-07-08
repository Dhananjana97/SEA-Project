  
<?php 

	require_once 'header.php';
	if(!isset($_SESSION['user'])|| $_SESSION['user']->type!="instructor"){header('Location: '.$home); exit();}


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

<style type="text/css">
    
#b{
    background-color:#1d1d1d; /* Green */
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
}


</style>

<?php 

    if(isset($_GET['module'])){
        $module=$_GET['module'];
    }else{ 
        die("you should select module");
    }
    $CA_number=$_GET['ca_number'];
    
    
    
   // $batch=$_SESSION['batch'];

    




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

  $query="SELECT * FROM `instructor_".$module."_ca` WHERE CA_number='".$CA_number."' ";
 // print("SELECT * FROM `instructor_".$module."_ca` WHERE CA_number='".$CA_number."' ");
	$mydb = openDB();
	
    $ex_ob=mysqli_query($mydb,$query);
	mysqli_close($mydb);
    if ($ex_ob) {
        $CA=mysqli_fetch_assoc($ex_ob);

        $CA_number=$CA['CA_number'];
        $Assignment=$CA['assignment'];
       // $filetype=$_GET['filet'];
        $duration=$CA['valid_duration'];
        $file=$CA['file'];
        if (!empty($file)) {

            $filearr=explode(".",$CA['file']);
           // print_r($filearr);
            $filet=end($filearr);
            $filearr2=explode("/",$CA['file']);
            $filen=end($filearr2);
            $submitted_file=$filen;     
        }else{
            $submitted_file="";
        }
        

        //print_r($CA);
         

     }else{
        echo "Query not excecuted Successfully";
    }

    

  ?>

 

 


        

        <div class="container">
            <!-- Form Started -->
            <div class="container form-top">
                <div style="background-color:white;margin-left:20px;border:2px solid black;background-image:url('images/CA.jpg');background-opacity:0.5;">
                <h3 style="margin-left:20px;font-weight:bold;"><?php echo "$module $CA_number"; ?></h3>
                
                <div class="row">
                    
<style type="text/css"></style>
                    <div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12"> 
                        <div class="panel panel-danger">
                            <div class="panel-body">

                        
                                <form id="reused_form" action=<?php echo "'edit CA process.php?module=$module&CA_number={$CA_number}&submitted_file={$submitted_file}'"; ?>          method="Post" enctype="multipart/form-data">
                                   
                                   
                                    <div class="form-group">
                                        <label><i class="fa fa-comment" aria-hidden="true" style="font-size:30px;margin-left:20px;"></i>Assignment</label>
                                        <br>
                                        <textarea rows="3" name="message" style='margin-left:20px;'class="form-control" placeholder="Type Your Message">
                                            <?php echo "$Assignment"; ?></textarea>
                                    </div>
                                     <div class="form-group">
<<<<<<< HEAD
                                        <label><i class="fa fa-calendar" aria-hidden="true"></i>Due Date And Time</label>
                                        <input id="due date" type="datetime-local" name="closing_time" value="<?php echo "$duration"; ?>">
=======
                                        <label><i class="fa fa-calendar" aria-hidden="true" style="margin-left:20px;"></i>Due Date And Time</label>
                                        <br>
                                        <input id="due date" type="datetime-local" style='margin-left:20px;'name="closing_time" value="<?php echo "$duration"; ?>">
>>>>>>> e6be4260ce1376ba232182d38fbc516fa9dbb4da
                                        

                                         <?php 


                                        if (!empty($_GET['errors'])) {
                                            echo "<span style='font-size:xxx-large;color:red;position:center;font-weight:bold;'>".$_GET['errors']."</span>";
                                        }






                                         ?>
                                    </div> 
                                    <div>
                                        <label><i class="fa fa-upload" aria-hidden="true" style="margin-left:20px;"></i>Upload Your Files</label>
                                        <br>
                                        <input type="file" name="file" style='margin-left:20px;'class="form-control" class="form-submit-button"style='padding:0px;'>
                                        <br> 
                                        <br>
                                        <div id="logo"  style="margin-left:20px;width:60%;height:290px;background-color:white;">

                                        <a href=""></a>


                                      


                                        <?php 

                                        if (!empty($CA['file'])) {

                                            

                                            if($filet=="pdf") {
                                                echo "<a href='$file'>"."<img style='padding-top:5px;padding-left:5px;'src='images/pdf.jpg'>"."</a>";
                                                
                                                echo "<br>";
                                                echo "<a style='padding-left:10px;' href='$file'>".$filen."</a>";

                                            }elseif($filet=="docx" or $filet=="doc"){
                                                echo "<a href='$file'>"."<img style='padding-top:5px;padding-left:5px;'src='images/doc.png'>"."</a>";
                                                 echo "<br>";
                                                echo "<a href='$file'>".$filen."</a>";

                                            }elseif($filet=="zip"){
                                                echo "<a href='$file'>"."<img style='padding-top:5px;padding-left:5px;'src='images/zip.png'>"."</a>";
                                                 echo "<br>";
                                               echo "<a href='$file'>".$filen."</a>";
                                            }elseif($filet=="jpg"){
                                                echo "<a href='$file'>"."<img style='padding-top:5px;padding-left:5px;max-width:50%;max-height:50%;'src='$file'>"."</a>";
                                                 echo "<br>";
                                                echo "<a href='$file'>".$filen."</a>";
                                            }

                                        }else{

                                            
                                                echo "<div style='ont-size:xxx-large;color:red;position:center;padding-left:35%;padding-top:100px;font-weight:bold;'>Not File Submitted</div>";
                                            
                                            
                                            
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
                                        <button type="submit" name='submit' class="form-submit-button" style="margin-bottom:30px;background-color:#1d1d1d;border: none;color: white;padding: 15px 32px;text-align: center;text-decoration: none;display: inline-block;font-size: 16px;margin: 4px 2px;cursor: pointer;">Submit</button>
                                    </div>
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




  
