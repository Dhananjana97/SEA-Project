<?php
	require_once 'header.php';
	if(!isset($_SESSION['user'])|| $_SESSION['user']->type!="instructor"){header('Location: '.$home); exit();}
	if(isset($_GET['module']))$CA_module=$_GET['module']; else die("you should select module");	

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


        <div class="container">
            <!-- Form Started -->
            <div class="container form-top">
                <div style="background-color:white;margin-left:20px;border:2px solid black;background-image:url('images/CA.jpg');background-opacity:0.5;">
                <h3 style="margin-left:20px;font-weight:bold;"><?php echo "$CA_module"; ?></h3>
                
                <div class="row">
                    

                    <div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12">
                        <div class="panel panel-danger">
                            <div class="panel-body">


                                  <form id="reused_form"  action=<?php echo "'add new CA process.php?module=$CA_module'"; ?> method="Post" enctype="multipart/form-data">

                                    <?php  


                                     if (!empty($_GET['errors'])) {
                                            echo "<span style='font-size:xxx-large;color:red;position:center;font-weight:bold;'>".$_GET['errors']."</span>";
                                        }


                                    ?>
                                   
                                   
                                    

                                    <div class="form-group">
                                        <label><i class="fa fa-folder" aria-hidden="true" style="margin-left:20px;"></i>Assignment Name</label>
                                        <br>
                                        <input style="margin-left:40px;" type="text" name="Assignment_Name">
                                    <div class="form-group">
                                        <label><i class="fa fa-comment" aria-hidden="true" style="font-size:30px;margin-left:20px;"></i> Assignment</label>
                                        <br>
                                        <textarea  style="margin-left:40px;" rows="3" name="message" class="form-control" placeholder="Type Your Message"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label><i class="fa fa-calendar" aria-hidden="true" style="margin-left:20px;"></i>Due Date And Time</label>
                                        <br>
                                        <input style="margin-left:40px;" type="datetime-local" name="closing_time">
                                    </div> 
                                    <div>
                                        <label><i class="fa fa-upload" aria-hidden="true" style="margin-left:20px;"></i>Upload Your Files</label>
                                        <br>
                                        <input style="margin-left:40px;" type="file" name="file" class="form-control" class="form-submit-button">
                                        <br> 

                                        <div id="logo" style="width:80%;height:290px;background-color:white;margin-left:20px;">

                                        <a href=""></a>


                                        <?php 

                                         echo "<div style='ont-size:xxx-large;color:red;position:center;padding-left:35%;padding-top:100px;font-weight:bold;'>Not File Submitted</div>";

                                       /* if (!empty($submission[$CA_number])) {

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
                                        }*/


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
                                        <button id='b' type="submit" name='submit' class="form-submit-button" style="margin-bottom:50px;" >Submit</button>
                                    </div>
                                    <br>
                                   

          


                                </form>
                            </div>
                        </div>
                    </div>
                        

                       
                    </div>
                </div>
            </div>
<<<<<<< HEAD
            </div>
=======
<<<<<<< HEAD
=======
            </div>
>>>>>>> e6be4260ce1376ba232182d38fbc516fa9dbb4da
>>>>>>> d02b845a6c8dd8244d84b0ad05193a98f961f7d7
        </div>

<?php require_once 'footer.php';?>
  

