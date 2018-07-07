<?php include 'header.php';
if (!isset($_SESSION['user']) || $_SESSION['user']->type != "student") {
    header('Location: ' . $home);
    exit();
}
?>
<h1>Exam Time table</h1>
<form>
    <!--<table style="width:100%; border-spacing:0;">
      <tr><th>Item</th><th>Description</th></tr>
        <script>
        for (i=2015;i<2018;i++) {
        document.write("<tr><td>"+(i-2014)+"</td><td><a href="+i+".pdf>"+i+"</a></td></tr>");
        }
        </script>
    </table>
    </form>-->
    <?php
    require_once "Student/DashboardPage/TimeTable/ttable.php";
    ?>
    </div>
    </div>
    <div id="content_footer"></div>
    <div id="footer">
        <p><a href="index.html">Home</a> | <a href="examples.html">Examples</a> | <a href="page.html">A Page</a> | <a
                    href="another_page.html">Another Page</a> | <a href="contact.html">Contact Us</a></p>
        <p>Copyright &copy; simplestyle_horizon | <a href="http://validator.w3.org/check?uri=referer">HTML5</a> | <a
                    href="http://jigsaw.w3.org/css-validator/check/referer">CSS</a> | <a
                    href="http://www.html5webtemplates.co.uk">Simple web templates by HTML5</a></p>
    </div>
    </div>
    </body>
    </html>
