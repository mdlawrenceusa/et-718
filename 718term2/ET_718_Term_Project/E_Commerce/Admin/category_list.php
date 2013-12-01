<?php
// required variables
require("../config.php");

$maingroup=$_REQUEST["maingroup"]; 

 ?>

<html>

<head>

<title>Category list</title>

<link rel="stylesheet" HREF="../master_style.css">

</HEAD>

<BODY TEXT="#000000" BGCOLOR="#FFFFFF" LINK="#000000" VLINK="#000000" ALINK="#F70404">

<CENTER>
<font size="1" face="Verdana, Arial, Helvetica, sans-serif">
<?php echo $maingroup ?></FONT>
<HR WIDTH=90% size=1 COLOR="#000000">
<table cellpadding="2" cellspacing="1" border="0">
<TR>
<TD BGCOLOR="#B3B3B3"><B><font size="1" face="Verdana, Arial, Helvetica, sans-serif"><?php echo $txt_secondgroup ?></font></B></TD>
<TD BGCOLOR="#B3B3B3"><B><font size="1" face="Verdana, Arial, Helvetica, sans-serif"><?php echo $txt_code_no ?></font></B></TD>
<TD BGCOLOR="#B3B3B3"><B><font size="1" face="Verdana, Arial, Helvetica, sans-serif"><?php echo $txt_item ?></font></B></TD>
<TD BGCOLOR="#B3B3B3"><B><font size="1" face="Verdana, Arial, Helvetica, sans-serif"><?php echo $txt_price ?>&nbsp;<?php echo $txt_currency ?></font></B></TD>
</TR>

<?php

// database connection
mysql_connect("$host","$user","$pass");

// database selection
mysql_select_db("$database");

// database query to select the categories
$result = mysql_query("select distinct * from mlawrence_products WHERE maingroup = '$maingroup' ORDER BY 'secondgroup','code_no'") ;

// counter for how many iterations have been done
$i=0;

while($row = mysql_fetch_row($result)) {
	$color = ($coloralternator++ %2 ? "D9D9D9" : "E9E9E9");
	echo "<TR BGCOLOR=\"#$color\"><TD><font size=\"1\" face=\"Verdana, Arial, Helvetica, sans-serif\"><a href=\"item_list.php?maingroup=$row[0]&secondgroup=$row[1]\" TARGET=\"main\">$row[1]</FONT></TD>";
	echo "<TD><font size=\"1\" face=\"Verdana, Arial, Helvetica, sans-serif\"><a href=\"item_show.php?code_no=$row[2]\" TARGET=\"main\">$row[2]</FONT></TD>";
	echo "<TD><font size=\"1\" face=\"Verdana, Arial, Helvetica, sans-serif\"><a href=\"item_show.php?code_no=$row[2]\" TARGET=\"main\">$row[3]</FONT></TD>";
	echo "<TD ALIGN=\"RIGHT\"></a><font size=\"1\" face=\"Verdana, Arial, Helvetica, sans-serif\">$row[5] </font></TD></TR>";
	}

?>

</TABLE>

<HR WIDTH=90% size=1 COLOR="#000000">
<font size="-2" face="Verdana, Arial, Helvetica, sans-serif"><b>| <A HREF="javascript:location.reload()"><?php echo $txt_reload ?></A> |</b></font>

</CENTER>


</body>

</html>