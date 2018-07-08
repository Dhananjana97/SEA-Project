<?php include 'header.php';
if(!isset($_SESSION['user'])|| $_SESSION['user']->type!="student"){header('Location: '.$home); exit();}
?>
        <h1>Register for exams</h1>
        <p>Note: Fill the following form to register. Do not make mistakes. look up again before click register button.</p>
          <div class="form_settings" >
		  <form action="Student\DashboardPage\RegisterForExam\reg.php" method="get" onsubmit="return Validate()" name="vform">


              <div><p><span>Index No.</span><input  type="text" name="indexno" value=
                      <?php
                      if(isset($_SESSION['user'])){
                          echo strtoupper($_SESSION['user']->id);
                      }
                      ?>


                      placeholder="Enter Index Number"/></p>
                  <div id="indexno_error" class="val_error"></div></div>
              <div><p><span>Name</span><input  type="text" name="fname" value="" placeholder="Enter Your Full Name"/></p>
                  <div id="fname_error" class="val_error"></div></div>
			
			<div><p><span>Department</span></p>
			<select name="dept">
                <option value=0>--Not selected--</option>
				<option value="cse">Computer Science and Engineering</option>
				<option value="ee">Electrical Engineering</option>
				<option value="ce">Civil Engineering</option>
            </select>
                <div id="dept_error" class="val_error"></div></div></br></br>
			<div>
                <span><input type="radio" name="sem" value="0" checked="checked"></span>
                <label>--Not Selected--</label><br>
			<span><input type="radio" name="sem" value="1"></span>
			<label>1st Semester</label><br>
			<span><input type="radio" name="sem" value="2"></span>
			<label>2nd Semester</label><br>
			<span><input type="radio" name="sem" value="3"></span>
			<label>3rd Semester</label><br>
			<span><input type="radio" name="sem" value="4"></span>
			<label>4th Semester</label></br></br>

                <div id="sem_error" class="val_error"></div></div>
              <div><p><span>Other notes	</span><textarea class="contact textarea" rows="8" cols="50" name="onotes" placeholder="Enter other notes"></textarea></p>
                  <div id="onotes_error" class="val_error"></div></div>
              <div><p style="padding-top: 15px"><span>&nbsp;</span><input class="submit" type="submit" name="contact_submitted" value="Register" /></p></div>
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

<script type="text/javascript">
    var indexno=document.forms["vform"]["indexno"];
    var fname=document.forms["vform"]["fname"];
    var dept=document.forms["vform"]["dept"];
    var sem=document.forms["vform"]["sem"];
  var onotes=document.forms["vform"]["onotes"];

    var indexno_error=document.getElementById("indexno_error");
    var fname_error=document.getElementById("fname_error");
    var dept_error=document.getElementById("dept_error");
    var sem_error=document.getElementById("sem_error");
  var onotes_error=document.getElementById("onotes_error");

    indexno.addEventListener("blur",indexnoVerify,true);
    fname.addEventListener("blur",fnameVerify,true);
    dept.addEventListener("blur",deptVerify,true);
    sem.addEventListener("blur",semVerify,true);
  onotes.addEventListener("blur",onotesVerify,true);

    function Validate() {
        if(indexno.value==""){
            indexno.style.border="1px solid red";
            indexno_error.textContent="Index No: required";
            indexno.focus();
            return false;
        }
        if(fname.value==""){
            fname.style.border="1px solid red";
            fname_error.textContent="Full Name required";
            indexno.focus();
            return false;
        }
        if(dept.value==0){
            dept.style.border="1px solid red";
            dept_error.textContent="department required";
            dept.focus();
            return false;
        }
        if(sem.value=="0"){
            sem.style.border="1px solid red";
            sem_error.textContent="semester required";
            sem.focus();
            return false;
        }
        if(false){
            indexno.style.border="1px solid red";
            indexno_error.textContent="Index No: not valied!";
            indexno.focus();
            return false;
        }

    }
function indexnoVerify() {
    if(indexno.value!=""){
        indexno.style.border="1px solid #5E6E66";
        indexno_error.innerHTML="";
        return true;
    }
}
    function fnameVerify() {
        if(fname.value!=""){
            fname.style.border="1px solid #5E6E66";
            fname_error.innerHTML="";
            return true;
        }
    }
    function deptVerify() {
        if(dept.value!=""){
            dept.style.border="1px solid #5E6E66";
            dept_error.innerHTML="";
            return true;
        }
    }
    function semVerify() {
        if(sem.value!=""){
            sem.style.border="1px solid #5E6E66";
            sem_error.innerHTML="";
            return true;
        }
    }


</script>