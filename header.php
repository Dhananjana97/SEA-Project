<?php 
require_once 'main/config.inc.php';
session_start();
if(isset($_SESSION['user'])){$user = $_SESSION['user']; $links = $user->links;}
if(isset($_GET['logout'])&&$_GET['logout']=='true'){logout();}

function logout(){
	global $login;
	unset($_SESSION['user']);
	header('Location: '.$login);
}
?>

<!DOCTYPE HTML>
<html>

<head>
  <title>Student and Examination Department</title>
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
          <h1><a href="index.php">STUDENT AND EXAMINATION DEPARTMENT<span class="logo_colour"></span></a></h1>
          <h2>Do All the works online easily...</h2>
        </div>
		<div id="accdet">
			<h4><?php
				if(isset($_SESSION['user'])){
					echo 'loggedin: '.strtoupper($_SESSION['user']->id).' &nbsp;<a href="?logout=true"><strong>logout</strong></a>';
				}
			?></h4>
		</div>
      </div>
	  
      <div id="menubar">
        <ul id="menu" >
          <!-- put class="selected" in the li tag for the selected page - to highlight which page you're on -->
			<li class="selected">
			<a href="<?php echo $home;?>">Home</a></li>
			<li><a href="<?php echo $services;?>">Services</a></li>
			<li><a href="<?php echo $gallery;?>">Gallery</a></li>
			<li><a href="<?php echo $aboutus;?>">About</a></li>
			<li><a href="<?php echo $contactus;?>">Contact</a></li>
			
          <li ><a href='pass_papers.html'><span>Pass Papers</span></a></li>
		   <li><a href='RegisterForExam.html'><span>Reg. For Exams</span></a></li>
		   <li><a href='ConSub.html'><span>Con. Ass. Submition</span></a></li>
		   <li><a href=><span>Con. Ass. Marks</span></a></li>
		  <!--temporarily hidden <li><a href='time_table.html'><span>Time table</span></a></li>
		   <li><a href='#'><span>Quizes</span></a></li>
		   <li><a href='HWSub.html'><span>Home Works</span></a></li>
		   <li><a href='#'><span>Results</span></a></li>  -->
        </ul>
      </div>
    </div>
    <div id="content_header"></div>
    <div id="site_content">
      <div id="banner"></div>
	  <div id="sidebar_container">
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
        <div class="sidebar">
          <div class="sidebar_top"></div>
          <div class="sidebar_item">
            <!-- insert your sidebar items here -->
			
			<div id="dashboard">
			  <?php
					if(isset($links)){
						echo '<h3>'.ucfirst($user->type).' Dashboard'.'</h3><ul>';
						echo '<li><a style ="font-size: 16px" href="'.$_SESSION["user"]->type.'_home.php'.'">Welcome Page</a></li>';
						foreach($links as $title => $link ){
							echo '<li><a style ="font-size: 16px" href="'.$link.'">'.$title.'</a></li>';
						}
						echo '</ul>';
					}
					else{
						$logname = 'Login for Dashboard';
						echo '<ul><li><a class="nav-link" href="'.$login.'"><strong>'.$logname.'</strong></a></li></ul>';
					}
								
				?>
			</div>
          </div>
          <div class="sidebar_base">
		  
</div>
        </div>
		
        <div class="sidebar">
          <div class="sidebar_top">
		  </div>
          <div class="sidebar_item">
		  <h3>Latest News</h3>
            <h4>New Website Launched</h4>
            <h5>February 1st, 2014</h5>
            <p>2014 sees the redesign of our website. Take a look around and let us know what you think.<br /><a href="#">Read more</a></p>
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
        
      </div>
      <div id="content">
        <!-- insert the page content here -->
        <h1>Welcome to the Student and Examination Department Official WebSite.</h1>
		