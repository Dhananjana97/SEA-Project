<!DOCTYPE HTML>
<html>

<head>
  <title>simplestyle_horizon - examples</title>
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
          <li class="selected"><a href='pass_papers.php'><span>Pass Papers</span></a></li>
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
        
        <h1>Old Examination Papers</h1>
		<p>Old examination papers very significant for study the structure of the paper. download and refer it perfectly. It is given by Examination department.<p>
		<h2>Choose required semester from the dropdown</h2>
		
		<form action="#" method="post">
          <div class="form_settings">
            <p><span>Module</span><select id="id" name="name"><option value="1">Algo</option><option value="2">OOSD</option><option value="3">Thermo</option></select></p>
            <p><span>Semester</span><select id="id" name="name"><option value="1">1<sup>st</sup> semester</option><option value="2">2<sup>nd</sup> semester</option><option value="3">3<sup>rd</sup> semester</option><option value="4">4<sup>th</sup> semester</option><option value="5">5<sup>th</sup> semester</option><option value="6">6<sup>th</sup> semester</option><option value="7">7<sup>th</sup> semester</option><option value="8">8<sup>th</sup> semester</option></select></p>
			<p style="padding-top: 15px"><span>&nbsp;</span><input class="submit" type="submit" name="name" value="Find" /></p>
          </div>
        </form>
		
        <table style="width:100%; border-spacing:0;">
          <tr><th>Item</th><th>Description</th></tr>
			<script>
			for (i=2015;i<2018;i++) {
			document.write("<tr><td>"+(i-2014)+"</td><td><a href="+i+".pdf>"+i+"</a></br></br></td></tr>");
			}
			</script>
        </table>
		
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
