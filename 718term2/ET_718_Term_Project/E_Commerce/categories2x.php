<?php
// required variables
require("config.php");
 ?>

<html>

<head>

<title>MidiCart Shoppingcart Categories</title>

<link rel="stylesheet" HREF="master_style.css">
 <link rel="stylesheet" href="css/foundation.css" />
    <script src="js/vendor/custom.modernizr.js" ></script>

<script LANGUAGE="javascript">
<!--

var gEBI = (document.getElementById) ? true : false;
var da = (document.all) ? true : false;
var lay = (document.layers) ? true : false;

function Menu(ID)
 {
 	var ktgID = "ktg_" + ID;
 	var imgID = "img_" + ID;
 	
 	if (gEBI)
 	{
 		ktgID = document.getElementById(ktgID);
 		imgID = document.getElementById(imgID);
 		//alert("gEBI");
 	}
 	else
 	{
 		if (da)
 		{
 			ktgID = document.all(ktgID);
 			imgID = document.all(imgID);
 			//alert("da");
 		}
 		else
 		{
 			if (lay)
 			{
 				//alert("lay");
 				//KtgID = document.layers(ktgID);
 				//imgID = document.layers(imgID);
 			}
 			else
 			{
 				alert("Sorry, your browser does not support this page!");
 			}
 		}
 	}
 	if (gEBI || da)
 	{
		if (ktgID.style.display == "none")
 		{
 			ktgID.style.display = "block";
 			imgID.src = "images/minus.gif";
 		}
 		else
 		{
 			ktgID.style.display = "none";
 			imgID.src = "images/plus.gif";
 		} 	
 	}
 	else
 	{
 		if (document.layers["ktg_"+ID].visibility == "hide")
 		{
 			document.layers["ktg_"+ID].visibility = "show";
 		//	imgID.src = "images/minus.gif";
 		}
 		else
 		{
 			document.layers["ktg_"+ID].visibility = "hide";
 		//	imgID.src = "images/plus.gif"
 		}
 	}

 }

var agt=navigator.userAgent.toLowerCase();
var is_major = parseInt(navigator.appVersion);
var is_nav  = ((agt.indexOf('mozilla')!=-1) && (agt.indexOf('spoofer')==-1)
                && (agt.indexOf('compatible') == -1) && (agt.indexOf('opera')==-1)
                && (agt.indexOf('webtv')==-1) && (agt.indexOf('hotjava')==-1));
var is_nav6up = (is_nav && (is_major >= 5));
var is_ie     = ((agt.indexOf("msie") != -1) && (agt.indexOf("opera") == -1));
var is_ie4up  = (is_ie && (is_major >= 4));
if (!(is_nav6up || is_ie4up))
{
	document.location.href = "categories.php";
}
 //-->
</script> 

</HEAD>

<BODY TEXT="#000000" BACKGROUND="images/categories.gif" LINK="#000000" VLINK="#000000" ALINK="#F70404">


<font size="1" face="Verdana, Arial, Helvetica, sans-serif"><B><?php echo $txt_categories ?></B></FONT><BR>

<HR WIDTH=100% size=1 COLOR="#000000">

<font size="1" face="Verdana, Arial, Helvetica, sans-serif">

<span class="Menu">
					

</span>

<HR WIDTH=100% size=1 COLOR="#000000">

<B>
<a href="terms.php" target="main"><?php echo $txt_terms ?></a><BR>
<a href="contact.php" target="main"><?php echo $txt_contact ?></a><BR>
<A HREF="main.php" TARGET="main">Home</A>
</B>

</FONT>

<div class="off-canvas-wrap">
  <div class="inner-wrap">
    <nav class="tab-bar">
      <section class="left-small">
        <a class="left-off-canvas-toggle menu-icon" ><span></span></a>
      </section>

      <section class="middle tab-bar-section">
        <h1 class="title">Magical Purveyors Extraordinaire</h1>
        

      </section>

      <section class="right-small">
        <a class="right-off-canvas-toggle menu-icon" ><span></span></a>
      </section>
    </nav>

    <aside class="left-off-canvas-menu">
      <ul class="off-canvas-list">
        <li><label>Foundation</label></li>
        <?php

// connects to database
mysql_connect("$host","$user","$pass");

// selects database
mysql_select_db("$database");

// grabs all product information
$result = mysql_query("select DISTINCT maingroup from mlawrence_products ORDER BY maingroup");

// counter for how many iterations have been done
$i=1;

while($row = mysql_fetch_row($result)) {


	echo "<IMG ID='img_$i' SRC='images/plus.gif' border='0' onClick='javascript: Menu($i);'>";

	echo "<a href='#' class='Menu' onClick='javascript: Menu($i);'><B>$row[0]</B></a><br>";

      echo "<span id='ktg_$i' style='display:none;'>";

$result2 = mysql_query("select DISTINCT maingroup, secondgroup from mlawrence_products WHERE maingroup = '$row[0]' ORDER BY secondgroup");

while($row = mysql_fetch_row($result2)) {

	echo "&nbsp;&nbsp;&nbsp;<IMG SRC='images/blank.gif' border='0'>&nbsp;<a href=\"item_list2.php?maingroup=$row[0]&secondgroup=$row[1]\" target=\"main\">$row[1]</a><br>
";

$i=$i+1;

}

echo "</span>";

}


?>

        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        <li><a href="#">The Psychohistorians</a></li>
        ...
      </ul>
    </aside>

    <aside class="right-off-canvas-menu">
      <ul class="off-canvas-list">
        <li><label>Links</label></li>
        <li><a href="#">Hari Seldon</a></li>
        <li><a href="terms.php" target="main"><?php echo $txt_terms ?></a><BR></li>
		<li><a href="contact.php" target="main"><?php echo $txt_contact ?></a><BR></li>
		<li><A HREF="main.php" TARGET="main">Home</A></li>

      </ul>
    </aside>

    <section class="main-section">
      <!-- content goes here -->

<div class="row">
  <div class="small-2 large-4 columns">...</div>
  <div class="small-4 large-4 columns">...</div>
  <div class="small-6 large-4 columns">...</div>
</div>
<div style ="width:480px">
<ul style ="width:480px" data-orbit>
  <li>
    <img src="Images/alanc.jpg" alt="slide 1" />
    <div class="orbit-caption">
      Alan Zagorsky looking over many hours of design work.
    </div>
  </li>
  <li>
    <img src="Images/workshop2.jpg" alt="slide 2" />
    <div class="orbit-caption">
      Owen Magic can fabricate just about anything!
    </div>
  </li>
  <li>
    <img src="Images/workshop1.jpg" alt="slide 3" />
    <div class="orbit-caption">
      Not too many people get to come into the Workshop.
    </div>
  </li>
</ul>
</div>


    </section>

  <a class="exit-off-canvas"></a>

  </div>
</div>

<script src="js/vendor/jquery.js"></script>
<script src="js/foundation.min.js"></script>
<script>
  $(document).foundation();
</script>

</body>
</html>


