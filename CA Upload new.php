  
<?php 

	require_once 'header.php';
	if(!isset($_SESSION['user'])|| $_SESSION['user']->type!="student"){header('Location: '.$home); exit();}
     
 ?>


<?php

    $file_uploaded=false;
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
       
    }

    
        
    
?>

<?php 

    if(isset($_GET['module']))$CA_module=$_GET['module']; else die("you can only go with selected module");
    if(isset($_GET['ca_number']))$CA_number=$_GET['ca_number']; else die("you can only go with selected ca number");

    

    if ($file_uploaded) {

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

    }


 ?>

 <?php 

	$query="SELECT `".$CA_number."` FROM `".$CA_module."` WHERE student_name='".$_SESSION['user']->id."' ";
	$mydb = openDB();
    $ex_ob=mysqli_query($mydb,$query);
	mysqli_close($mydb);
	
    if ($ex_ob) {
        $submission=mysqli_fetch_assoc($ex_ob);

         $g=explode("|",$submission[$CA_number]);

     }else{
        echo "Query not excecuted Successfully";
    }

    unset($_POST['submit']);

  ?>

        <title>PHP Contact Form With File Upload - reusable form</title>
        <div class="container">
            <!-- Form Started -->
            <div class="container form-top">
                <h3><?php echo "$CA_module  $CA_number"; ?></h3>
                
                <div class="row">
                    

                    <div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12">
                        <div class="panel panel-danger">
                            <div class="panel-body">

                        
                                <form id="reused_form"  action=<?php echo "CA Upload.php?module=$CA_module&ca_number=$CA_number&submitted_file=$g[1]"; ?> method="Post" enctype="multipart/form-data">
                                   
                                    <div class="form-group">
                                        <label><i class="fa fa-envelope" aria-hidden="true"></i> Submission Status :</label>

                                         <?php 
                                            

                                               
                                                    
                                                    
                                                    if ($submission) {
                                                        
                                                        if (empty($submission[$CA_number])) {
                                                            echo "<span style='font-size:x-large;'>Not Submitted</span>";
                                                        }else{
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

                                        
                                    </div>
                                    <div class="form-group">
                                        <label><i class="fa fa-comment" aria-hidden="true"></i> Message</label>
                                        <textarea rows="3" name="message" class="form-control" placeholder="Type Your Message"><?php echo "$g[0]"; ?></textarea>
                                    </div>
                                    <div>
                                        <label><i class="fa fa-upload" aria-hidden="true"></i>Upload Your Files</label>
                                        <input type="file" name="file" class="form-control" class="form-submit-button">
                                        <br> 

                                        <div style="width:100%;height:230px;background-color:white;">

                                        <a href=""></a>


                                        <?php 

                                        if (!empty($submission[$CA_number])) {

                                            $f_a=explode('/', $g[1]);
                                            $f_n=end($f_a);
                                            $f_t=explode(".", $g[1]);
                                            $ft=end($f_t);
                                            
                                            
                                           


                                            if($ft=="pdf") {
                                                echo "<a href='$g[1]'>"."<img style='padding-top:5px;padding-left:5px;'src='img/pdf_logo.jpg'>"."</a>";
                                                
                                                echo "<br>";
                                                echo "<a style='padding-left:10px;' href='$g[1]'>". $f_n."</a>";

                                            }elseif($ft=="doc"){
                                                echo "<a href='$g[1]'>"."<img style='padding-top:5px;padding-left:5px;'src='img/doc_logo.png'>"."</a>";
                                                 echo "<br>";
                                                echo "<a href='$g[1]'>".$f_n."</a>";

                                            }elseif($ft=="zip"){
                                                echo "<a href='$g[1]'>"."<img style='padding-top:5px;padding-left:5px;'src='img/zip.jpg'>"."</a>";
                                                 echo "<br>";
                                               echo "<a href='$g[1]'>".$f_n."</a>";
                                            }elseif($ft=="jpg"){
                                                echo "<a href='$g[1]'>"."<img style='padding-top:5px;padding-left:5px;max-width:50%;max-height:50%;'src='$g[1]'>"."</a>";
                                                 echo "<br>";
                                                echo "<a href='$g[1]'>".$f_n."</a>";
                                            }

                                        }else{
                                            
                                            echo "<div style='ont-size:xxx-large;color:red;position:center;padding-left:35%;padding-top:100px;font-weight:bold;'>Not File Submitted</div>";
                                        }


                                         ?>

                                         <div><button style="margin-left:75%;" onclick="">remove</button></div>
                                        
                                        
                                    </div>
                                    <div >
                                        


                                    </div>
                                    <br>
                                    <div >
                                        <button type="submit" name='submit' class="form-submit-button" >Submit</button>
                                    </div>
                                    <br>
                                      <?php 
                                    if ($file_uploaded) {



                                       
                                        
                                        
                                        

                                    }
                                    else{

                                        if ($vari) {
                                            echo "<h2>Erro in Submission</h2>";
                                        }


                                        
                                    }

                                 ?>

          


                                </form>
                            </div>
                        </div>
                    </div>
                        

                       
                    </div>
                </div>
            </div>
<?php require_once 'footer.php';?>