<?php
// required variables
require("config.php");

$searchstring=$_REQUEST["searchstring"]; 
$chose=$_REQUEST["chose"]; 

 ?>

<html>

<head>

<title>Search list</title>

<link rel="stylesheet" HREF="master_style.css">

</HEAD>

<BODY TEXT="#000000" BGCOLOR="#FFFFFF" LINK="#000000" VLINK="#000000" ALINK="#F70404">

<FORM NAME="itemsform">

<CENTER>

<font size="1" face="Verdana, Arial, Helvetica, sans-serif">
<?php echo $txt_search_result ?> "<?php echo $searchstring ?>"</FONT>

<HR WIDTH=90% size=1 COLOR="#000000">
<table cellpadding="2" cellspacing="1" border="0">

<TR>
<TD BGCOLOR="#B3B3B3">&nbsp;</TD>
<TD BGCOLOR="#B3B3B3"><B><font size="1" face="Verdana, Arial, Helvetica, sans-serif"><?php echo $txt_code_no ?> </font></B></TD>
<TD BGCOLOR="#B3B3B3"><B><font size="1" face="Verdana, Arial, Helvetica, sans-serif"><?php echo $txt_item ?> </font></B></TD>
<TD BGCOLOR="#B3B3B3"><B><font size="1" face="Verdana, Arial, Helvetica, sans-serif"><?php echo $txt_price ?>&nbsp;<?php echo $txt_currency ?> </font></B></TD>
<TD BGCOLOR="#B3B3B3"><B><font size="1" face="Verdana, Arial, Helvetica, sans-serif"><?php echo $txt_order ?> </font></B></TD>
<?php

// database connection
mysql_connect("$host","$user","$pass");

// database selection
mysql_select_db("$database");

// database query to select the categories
$result = mysql_query("select * from mlawrence_products WHERE $chose LIKE '%$searchstring%' ORDER BY 'maingroup','secondgroup','code_no' LIMIT 0, 100 ") ;



// counter for how many iterations have been done
$i=0;

while($row = mysql_fetch_row($result)) {
	$color = ($coloralternator++ %2 ? "D9D9D9" : "E9E9E9");
	echo "<TR  BGCOLOR=\"#$color\"><TD><a href=\"item_show.php?code_no=$row[2]\" TARGET=\"main\"><IMG SRC=\"images/$row[6]\" BORDER=\"0\" WIDTH=\"$thumbs_width\" HEIGHT=\"$thumbs_height\"></A></TD>";
      echo "<TD><font size=\"1\" face=\"Verdana, Arial, Helvetica, sans-serif\"><a href=\"item_show.php?code_no=$row[2]\" TARGET=\"main\">$row[2]</FONT></TD>";
	echo "<TD><font size=\"1\" face=\"Verdana, Arial, Helvetica, sans-serif\"><a href=\"item_show.php?code_no=$row[2]\" TARGET=\"main\">$row[3]</FONT></TD>";
	echo "<TD ALIGN=\"RIGHT\"></a><font size=\"1\" face=\"Verdana, Arial, Helvetica, sans-serif\">$row[5]</font></TD>";
	echo "<TD><INPUT TYPE=\"value\" NAME=\"id$row[2]quant\" VALUE=\"1\" SIZE=3 style=\"font-family: Verdana, Geneva, Helvetica; font-weight: regular; font-style: regular; font-size: 10px; color: #000000; height:18px\">
<INPUT NAME=\"id$row[2]number\" TYPE=Hidden VALUE=\"$row[2]\">
<INPUT TYPE=\"button\" NAME=\"id$row[2]add\" VALUE=\"$txt_buy_now\" class=\"button\" onclick=\"top.center.cart.addItem('$row[3]','$row[5]', document.itemsform.id$row[2]quant.value, document.itemsform.id$row[2]number.value, '$row[7]')\"></TD></TR>"; 
	}

?>

</TABLE>

<HR WIDTH=90% size=1 COLOR="#000000">

<font size="-2" face="Verdana, Arial, Helvetica, sans-serif">
<?php echo $txt_click_details ?></FONT><P>

<font size="-2" face="Verdana, Arial, Helvetica, sans-serif"><b>
| <a href="basket.php"><?php echo $txt_view_cart ?></a> | 
<a href="order.php"><?php echo $txt_checkout ?></a> |</b>
</font>
</CENTER>

 </FORM>
</body>

</html>