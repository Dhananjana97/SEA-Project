<!DOCTYPE HTML>
<html>

<head>
  <title>Student and Examination Department</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="style/style.css" />
  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</head>

<body>
  <div id="main">
    <div id="header">
      <?php
		require_once"logo.php"
	  ?>
	  
      <div id="menubar">
        <ul id="menu" >
          <!-- put class="selected" in the li tag for the selected page - to highlight which page you're on -->
          <li class="selected"><a href="index.php">Home</a></li>
          <li ><a href='pass_papers.php'><span>Pass Papers</span></a></li>
		   <li><a href='RegisterForExam.php'><span>Reg. For Exams</span></a></li>
		   <li><a href='ConSub.php'><span>Con. Ass. Submition</span></a></li>
		   <li><a href=><span>Con. Ass. Marks</span></a></li>
		   <li><a href='time_table.php'><span>Time table</span></a></li>
		   <li><a href='#'><span>Quizes</span></a></li>
		   <li><a href='HWSub.php'><span>Home Works</span></a></li>
		   <li><a href='#'><span>Results</span></a></li>
        </ul>
      </div>
    </div>
    <div id="content_header"></div>
    <div id="site_content">
      <div id="banner"></div>
	  <?php
		require_once"sidebar.php"
	  ?>
      <div id="content">
        <!-- insert the page content here -->
        <h1>Welcome to the Student and Examination Department Official WebSite.</h1>
        
        
      </div>
    </div>
	<div>
		<?php
		require_once "footer.php";
		?>
	</div>
</body>
</html>
