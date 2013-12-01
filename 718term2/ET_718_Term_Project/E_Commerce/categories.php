<?php
// required variables
require("config.php");
 ?>

<html>

<head>

<title>MidiCart Shoppingcart Categories</title>

<link rel="stylesheet" HREF="master_style.css">

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

	echo "&nbsp;&nbsp;&nbsp;<IMG SRC='images/blank.gif' border='0'>&nbsp;<a href=\"item_list.php?maingroup=$row[0]&secondgroup=$row[1]\" target=\"main\">$row[1]</a><br>
";

$i=$i+1;

}

echo "</span>";

}


?>

</span>

<HR WIDTH=100% size=1 COLOR="#000000">

<B>
<a href="terms.php" target="main"><?php echo $txt_terms ?></a><BR>
<a href="contact.php" target="main"><?php echo $txt_contact ?></a><BR>
<A HREF="main.php" TARGET="main">Home</A>
</B>

</FONT>
</body>
</html>


