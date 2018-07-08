<?php include 'header.php';
if(!isset($_SESSION['user'])|| $_SESSION['user']->type!="student"){header('Location: '.$home); exit();}
?>
        <h1>Register for exams</h1>
        <p>Fill the following form to register. Do not make mistakes. look up again before click register button.</p>       
          <div class="form_settings" >
		  <form action="DashboardPage\RegisterForExam\reg.php" >

			</br></br>
			<p><span>Index No.</span><input  type="text" name="indexno" value="" /></p>
			<p><span>Full Name</span><input  type="text" name="fname" value="" /></p>
			
			<p><span>Department</span></p>
			<select name="dept">
				<option value="cse">Computer Science and Engineering</option>
				<option value="ee">Electrical Engineering</option>
				<option value="ce">Civil Engineering</option>
			</select></br></br>
			
			<span><input type="radio" name="sem" value="1"></span>
			<label>1st Semester</label><br>
			<span><input type="radio" name="sem" value="2"></span>
			<label>2nd Semester</label><br>
			<span><input type="radio" name="sem" value="3"></span>
			<label>3rd Semester</label><br>
			<span><input type="radio" name="sem" value="4"></span>
			<label>4th Semester</label></br></br>

			<p><span>Other notes	</span><textarea class="contact textarea" rows="8" cols="50" name="onotes"></textarea></p>
			<p style="padding-top: 15px"><span>&nbsp;</span><input class="submit" type="submit" name="contact_submitted" value="Register" /></p>
			</form>
            
            
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
