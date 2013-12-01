<?php
// required variables
require("config.php");

$code_no=$_REQUEST["code_no"]; 

 ?>

<html>

<head>

<title>Product list</title>

<link rel="stylesheet" HREF="master_style.css">

</HEAD>

<BODY TEXT="#000000" BGCOLOR="#FFFFFF" LINK="#000000" VLINK="#000000" ALINK="#F70404">

<center>

<?php

// database connection
mysql_connect("$host","$user","$pass");

// database selection
mysql_select_db("$database");

// query to get the products of type $category
$result = mysql_query("select * from mlawrence_products where(code_no = '$code_no') ORDER BY 'item'");

echo "<FORM NAME=\"itemsform\">
	</font><TABLE BORDER=0 CELLSPACING=5 CELLPADDING=5>";

// define the product array
$prod = Array();

// option prices array
$optprices = Array();

// array counter
$i = 0;

while($row = mysql_fetch_row($result)) {
	$prod[$i] = $row[0];

echo "<TR ALIGN=Left VALIGN=Bottom>
<TD><IMG SRC=\"images/$row[6]\" BORDER=\"0\"></TD>
<TD WIDTH=\"300\"><font size=\"2\" face=\"Verdana, Arial, Helvetica, sans-serif\"><B>$row[3]</B></FONT><BR>
<font size=\"1\" face=\"Verdana, Arial, Helvetica, sans-serif\"><B>$txt_code_no</B> $row[2]</FONT><P>
<font size=\"2\" face=\"Verdana, Arial, Helvetica, sans-serif\">
$row[4]<P>
<B>$txt_price $txt_currency</B> $row[5]</FONT><P>
<INPUT TYPE=\"value\" NAME=\"id$row[2]quant\" VALUE=\"1\" SIZE=3>
<INPUT NAME=\"id$row[2]number\" TYPE=Hidden VALUE=\"$row[2]\">
<INPUT TYPE=\"button\" NAME=\"id$row[1]add\" VALUE=\"$txt_add\" class=\"button\" onclick=\"top.center.cart.addItem('$row[3]','$row[5]', document.itemsform.id$row[2]quant.value, document.itemsform.id$row[2]number.value, '$row[7]')\"></TD></TR></TABLE>"; 

}


 ?>
</center>

<center>
<HR WIDTH=90% size=1 COLOR="#000000">
<font size="-2" face="Verdana, Arial, Helvetica, sans-serif"><b>
| <a href="basket.php"><?php echo $txt_view_cart ?></a> | 
<a href="order.php"><?php echo $txt_checkout ?></a> |</b>
</font>

</CENTER>
</BODY></HTML>