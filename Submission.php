<?php
include 'header.php';
if(!isset($_SESSION['user'])){header("Location: $home"); exit();}
if(isset($_GET['uploadedto'])&&!empty($_GET['uploadedto'])){$uploadedto = $_GET['uploadedto']."/";}  else{$uploadedto="/";}

   
   function upload($files,$key){
	   global $uploadedto;
	   $upload_success = false;
      $errors= array();
      $file_name = $files['name'][$key];
      $file_size =$files['size'][$key];
      $file_tmp =$files['tmp_name'][$key];
      $file_type=$files['type'][$key];
      
      if(!empty($file_name)){
      if($file_size > 2097152){
         $errors[]='File size must be less than 20 MB';
      }
      
      if(empty($errors)==true){
		 try{
			$error2 = @move_uploaded_file($file_tmp,$uploadedto.$file_name);
			$upload_success = true;
		 }
		 catch(Exception $e){
			 die("Something went wrong! try next time...\n".$e->getMessage());
		 }
      }else{
         print_r($errors);
      }
	  }
   return $upload_success&&$error2;
}
if(isset($_POST["uploadButton"])){
	$files = $_FILES['files'];
	foreach($files['name'] as $key => $file){
		$success = upload($files,$key);
		if($success)echo 'file '.$file.' successfully uploaded!'; else{ echo "Something went wrong! try next time..."; break;}
	}
}
?>
<style type = "text/css">
.formSub{
	position:relative;
	width: 600px;
	min-height: 250px;
	left:50%;
    padding: 12px 10px;
    margin: 8px 30px;
    box-sizing: border-box;
	border: 2px solid #007799;
    border-radius: 15px;
	transform: translate(-50%, 0%);
}
input{
	font-size:17px;
}
.uploadFile{
	position:relative;
	left:90px;
	height:25px;
	font-size=20px;
}
p[name="note"]{
	font-size:0.5em;
}

</style>

<script type="text/javascript">
function addUploadField(){
	var x = document.createElement("INPUT");
	x.setAttribute("Name", "files[]");
	x.setAttribute("type", "file");
	x.setAttribute("class", "uploadFile");
	document.getElementById("uploadFiles").appendChild(x);
}
  

</script>

	<br><br>
	<br>
		<div class ="formSub">
		  <h3 style="margin-left:7.5ex; color:#333;">Select file to upload:</h3>
		  <br><br>
		  <form action="#" class = "submission" method="POST" enctype="multipart/form-data">
			 <div id="uploadFiles"><input class="uploadFile" type="file" name="files[]" /></div>&nbsp;&nbsp;&nbsp;
			 <br><br><br><input type="button"  onclick="addUploadField();" value="+" style="width:30px; height:30px; font-size:20px; font-weight:bold; position:absolute; right:165px;"/>
			 <input name="uploadButton" value="Upload Files" style="height:30px; padding:0 5px;position:absolute; right:50px;" type="submit"/>&nbsp;&nbsp;&nbsp;
			 <br><br>
			 <p name="note" align="right" style="margin-right:8ex;">Maximum size for new files: 20MB, maximum attachments: 1</p>
		  </form>
		  <div>
		  
		</div></div>
   <?php require_once 'footer.php';?>