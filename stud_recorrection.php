<?php include 'header.php';
if (!isset($_SESSION['user']) || $_SESSION['user']->type != "student") {
    header('Location: ' . $home);
    exit();
}
?>

<h1>Submit Recorrection Request</h1>
        <p>Fill the following form to register. Do not make mistakes. look up again before click register button.</p>       
          <div class="form_settings" >
		  <form action="Student\DashboardPage\Recorrection\submit.php" method="get" onsubmit="return Validate()" name="vform">

			</br></br>
              <div><p><span>Index No.</span><input  type="text" name="indexno" value="" placeholder="Enter Index Number"/></p>
                  <div id="indexno_error" class="val_error"></div></div>
              <div><p><span>Module Code</span><input  type="text" name="mcode" value="" placeholder="Enter the Module Code"/></p>
                  <div id="mcode_error" class="val_error"></div></div>
			
			<div><p><span>Department</span></p>
			<select name="dept">
				<option value="cse">Computer Science and Engineering</option>
				<option value="ee">Electrical Engineering</option>
				<option value="ce">Civil Engineering</option>
                <option value="en">Electronic Engineering</option>
            </select>   
                <div id="dept_error" class="val_error"></div></div></br></br>
			
              <div><p><span>Reason for Submitting	</span><textarea class="contact textarea" rows="8" cols="50" name="reason" placeholder="Briefly describe the reason for requesting recorrection..."></textarea></p>
                  <div id="reason_error" class="val_error"></div></div>
              <div><p style="padding-top: 15px"><span>&nbsp;</span><input class="submit" type="submit" name="contact_submitted" value="Submit" /></p></div>
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
    var mcode=document.forms["vform"]["mcode"];
    var dept=document.forms["vform"]["dept"];
   //var sem=document.forms["vform"]["sem"];
    var reason=document.forms["vform"]["reason"];

    var indexno_error=document.getElementById("indexno_error");
    var mcode_error=document.getElementById("mcode_error");
    var dept_error=document.getElementById("dept_error");
   //var sem_error=document.getElementById("sem_error");
    var reason_error=document.getElementById("reason_error");

    indexno.addEventListener("blur",indexnoVerify,true);
    mcode.addEventListener("blur",mcodeVerify,true);
    dept.addEventListener("blur",deptVerify,true);
    //sem.addEventListener("blur",semVerify,true);
    reason.addEventListener("blur",reasonVerify,true);

    function Validate() {
        if(indexno.value==""){
            indexno.style.border="1px solid red";
            indexno_error.textContent="Index No: required";
            indexno.focus();
            return false;
        }
        if(mcode.value==""){
            mcode.style.border="1px solid red";
            mcode_error.textContent="Full Name required";
            indexno.focus();
            return false;
        }
        if(dept.value==""){
            dept.style.border="1px solid red";
            dept_error.textContent="department required";
            dept.focus();
            return false;
        }
        /*if(sem.value==""){
            sem.style.border="1px solid red";
            sem_error.textContent="semester required";
            sem.focus();
            return false;
        }*/
    }
function indexnoVerify() {
    if(indexno.value!=""){
        indexno.style.border="1px solid #5E6E66";
        indexno_error.innerHTML="";
        return true;
    }
}
    function mcodeVerify() {
        if(mcode.value!=""){
            mcode.style.border="1px solid #5E6E66";
            mcode_error.innerHTML="";
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
    /*function semVerify() {
        if(sem.value!=""){
            sem.style.border="1px solid #5E6E66";
            sem_error.innerHTML="";
            return true;
        }
    }*/


</script>




<?php require_once 'footer.php'; ?>