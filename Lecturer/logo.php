<?php
	session_start();
?>
<div id="logo">
        <div id="logo_text">
          <!-- class="logo_colour", allows you to change the colour of the text -->
          <h1><a href="index.html">STUDENT AND EXAMINATION DEPARTMENT<span class="logo_colour"></span></a></h1>
          <h2>Do All the works online easily...</h2>
        </div>
		<div id="accdet">
		<?php
			$indexNo=$_SESSION["indexNo"];
			$name=$_SESSION["name"];
			echo "<div>";
			echo "<img src=\"../profpics/IMAG2632_1.jpg\" width=\"40px\">";
			echo"</div>";
			echo"<div>";
			echo "$name<br>$indexNo";
			echo"</div>";
		?>
		
			
		</div>
</div>