<!DOCTYPE HTML>
<html>

<head>
  <title>simplestyle_horizon - contact us</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="style/style.css" />
</head>

<body>
  <div id="main">
    <div id="header">
      <div id="logo">
        <div id="logo_text">
          <!-- class="logo_colour", allows you to change the colour of the text -->
          <h1><a href="index.html">STUDENT AND EXAMINATION DEPARTMENT<span class="logo_colour"></span></a></h1>
          <h2>Do All the wonrks online easily...</h2>
        </div>
      </div>
      <div id="menubar">
        <ul id="menu">
          <!-- put class="selected" in the li tag for the selected page - to highlight which page you're on -->
          <li ><a href="index.php">Home</a></li>
          <li ><a href='pass_papers.php'><span>Pass Papers</span></a></li>
		   <li ><a href='RegisterForExam.php'><span>Reg. For Exams</span></a></li>
		   <li ><a href='ConSub.php'><span>Con. Ass. Submition</span></a></li>
		   <li><a href=><span>Con. Ass. Marks</span></a></li>
		   <li ><a href='time_table.php'><span>Time table</span></a></li>
		   <li><a href='#'><span>Quizes</span></a></li>
		   <li class="selected"><a href='HWSub.php'><span>Home Works</span></a></li>
		   <li><a href='#'><span>Results</span></a></li>
        </ul>
      </div>
    </div>
    <div id="content_header"></div>
    <div id="site_content">
      <div id="sidebar_container">
        <div class="sidebar">
          <div class="sidebar_top"></div>
          <div class="sidebar_item">
            <!-- insert your sidebar items here -->
            <h3>Latest News</h3>
            <h4>New Website Launched</h4>
            <h5>February 1st, 2014</h5>
            <p>2014 sees the redesign of our website. Take a look around and let us know what you think.<br /><a href="#">Read more</a></p>
          </div>
          <div class="sidebar_base"></div>
        </div>
        <div class="sidebar">
          <div class="sidebar_top"></div>
          <div class="sidebar_item">
            <h3>Useful Links</h3>
            <ul>
              <li><a href="#">link 1</a></li>
              <li><a href="#">link 2</a></li>
              <li><a href="#">link 3</a></li>
              <li><a href="#">link 4</a></li>
            </ul>
          </div>
          <div class="sidebar_base"></div>
        </div>
        <div class="sidebar">
          <div class="sidebar_top"></div>
          <div class="sidebar_item">
            <h3>Search</h3>
            <form method="post" action="#" id="search_form">
              <p>
                <input class="search" type="text" name="search_field" value="Enter keywords....." />
                <input name="search" type="image" style="border: 0; margin: 0 0 -9px 5px;" src="style/search.png" alt="Search" title="Search" />
              </p>
            </form>
          </div>
          <div class="sidebar_base"></div>
        </div>
      </div>
      <div id="content">
        <!-- insert the page content here -->
        <h1>Home Work Submition</h1>
        <p>Upload Your Home Work for relevent place</p>       
          <div class="form_settings" >
		  
		  <?php
		  session_start();
			$mysql_host="localhost";
			$mysql_user="root";

			$con=mysqli_connect($mysql_host,$mysql_user,"",	"sae");


			$_query="SELECT * FROM hw_submitions ";
			$is_query_run=mysqli_query($con,$_query);

			echo"<table border='1' style='width:300px'><tr><th>hw no</th><th>descript</th><th>upload file</th></tr>";
			
			while($query_execute=mysqli_fetch_assoc($is_query_run)){
				
				$_homeworkname="h".$query_execute["no"];
				$_indexNo=$_SESSION["indexNo"];
				echo"<tr><td>".$query_execute["no"]."</td><td>".$query_execute["hw_description"]."</td><td><a href=\"DashboardPage\HomeWorks\hwupload.php?var=$_homeworkname&&var1=$_indexNo\">click here</a></td></tr>";		
			}
			echo"</table>";

			mysqli_close($con);

		  ?>
		  </div>       
      </div>
    </div>
    <div id="content_footer"></div>
    <div id="footer">
      <p><a href="index.html">Home</a> | <a href="examples.html">Examples</a> | <a href="page.html">A Page</a> | <a href="another_page.html">Another Page</a> | <a href="contact.html">Contact Us</a></p>
      <p>Copyright &copy; simplestyle_horizon | <a href="http://validator.w3.org/check?uri=referer">HTML5</a> | <a href="http://jigsaw.w3.org/css-validator/check/referer">CSS</a> | <a href="http://www.html5webtemplates.co.uk">Simple web templates by HTML5</a></p>
    </div>
  </div>
</body>
</html>
