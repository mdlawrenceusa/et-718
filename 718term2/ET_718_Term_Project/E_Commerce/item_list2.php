<?php
// required variables
require("config.php");

$maingroup=$_REQUEST["maingroup"]; 
$secondgroup=$_REQUEST["secondgroup"]; 

 ?>

<html>

<head>

<title>Product list</title>

    <meta charset="utf-8" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0" >
    <title>Foundation | Welcome</title>
    <link rel="stylesheet" href="css/foundation.css" >
    <script src="js/vendor/custom.modernizr.js" ></script>

  </head>



<BODY TEXT="#000000" BGCOLOR="#FFFFFF" LINK="#000000" VLINK="#000000" ALINK="#F70404">

<FORM NAME="itemsform">
<!--Bread Crumbs-->
<ul class="breadcrumbs">
  <li><A HREF="main.php" TARGET="main">Home</A></li>
  <li class="current"><a href="#"><?php echo $maingroup ?> / <?php echo $secondgroup ?></a></li>
</ul>

<CENTER>
<HR WIDTH=90% size=1 COLOR="#000000">

<?php

// database connection
mysql_connect("$host","$user","$pass");

// database selection
mysql_select_db("$database");

// database query to select the categories
$result = mysql_query("select distinct * from mlawrence_products WHERE maingroup = '$maingroup' AND secondgroup = '$secondgroup' ORDER BY code_no") ;

// counter for how many iterations have been done
$i=0;

while($row = mysql_fetch_row($result)) {
	echo  " <div  class=\"small-4 columns\">";
		#echo  " <div  style=\"width:300px\">";


	echo "<ul class=\"pricing-table\">";

 	echo "<li style=\"height:75px\" class=\"title\"><a href=\"item_show.php?code_no=$row[2]\" TARGET=\"main\">$row[3]</li>";
	 echo "<li style=\"height:237px\"class=\"th [radius]\"><a href=\"item_show.php?code_no=$row[2]\" TARGET=\"main\"><IMG SRC=\"images/$row[6]\"></A></li>";

      echo "<li class=\"bullet-item\"><a href=\"item_show.php?code_no=$row[2]\" TARGET=\"main\">Item No. $row[2]</li>";
	echo "<li style=\"height:75px\" class=\"bullet-item\"><a href=\"item_show.php?code_no=$row[2]\" TARGET=\"main\">$row[3]</li>";
	echo "<li class=\"price\">$$row[5] USD</li>";
	echo "<li class=\"bullet-item\"><INPUT TYPE=\"value\" NAME=\"id$row[2]quant\" VALUE=\"1\" SIZE=3 style=\"font-family: Verdana, Geneva, Helvetica; font-weight: regular; font-style: regular; font-size: 18px; color: #000000; height:28px\"></li>";
echo "<li><INPUT NAME=\"id$row[2]number\" TYPE=Hidden VALUE=\"$row[2]\"></li>";
echo "<li><INPUT TYPE=\"button\" NAME=\"id$row[2]add\" VALUE=\"$txt_buy_now\" class=\"button\" onclick=\"top.center.cart.addItem('$row[3]','$row[5]', document.itemsform.id$row[2]quant.value, document.itemsform.id$row[2]number.value, '$row[7]')\"></li>"; 
	 echo"</ul>";
	echo  " </div>";

	}

?>
 
<HR WIDTH=90% size=1 COLOR="#000000">

<font size="-2" face="Verdana, Arial, Helvetica, sans-serif">
<?php echo $txt_click_details ?></FONT><P>

<font size="-2" face="Verdana, Arial, Helvetica, sans-serif"><b>
| <a href="basket.php"><?php echo $txt_view_cart ?></a> | 
<a href="order.php"><?php echo $txt_checkout ?></a> |</b>
</font>

</CENTER>

</FORM>
<script src="js/vendor/jquery.js"></script>
<script src="js/foundation.min.js"></script>
<script>
  $(document).foundation();
</script>

</body>

</html>