<?php
// required variables
require("../config.php");
 ?>

<html>

<head>

<title>Credit Card Payment</title>

<link rel="stylesheet" HREF="../master_style.css">

</HEAD>

<BODY TEXT="#000000" BGCOLOR="#FFFFFF" LINK="#000000" VLINK="#000000" ALINK="#F70404">


<center><font size="5" face="Verdana, Arial, Helvetica, sans-serif"><b>
<?php echo $txt_credit_card_payment?></B></FONT>
<HR WIDTH=75% size=1 COLOR="#000000">
<table cellpadding="2" cellspacing="1" border="0">
<TR>
<TD BGCOLOR="#B3B3B3"><B><font size="1" face="Verdana, Arial, Helvetica, sans-serif"><?php echo $txt_date ?></font></B></TD>
<TD BGCOLOR="#B3B3B3"><B><font size="1" face="Verdana, Arial, Helvetica, sans-serif"><?php echo $txt_order_id ?></font></B></TD>
<TD BGCOLOR="#B3B3B3"><B><font size="1" face="Verdana, Arial, Helvetica, sans-serif"><?php echo $txt_payment_method ?></font></B></TD>
<TD BGCOLOR="#B3B3B3"><B><font size="1" face="Verdana, Arial, Helvetica, sans-serif"><?php echo $txt_credit_card ?></font></B></TD>
<TD BGCOLOR="#B3B3B3"><B><font size="1" face="Verdana, Arial, Helvetica, sans-serif"><?php echo $txt_exp_date ?></font></B></TD>
<TD BGCOLOR="#B3B3B3"><B><font size="1" face="Verdana, Arial, Helvetica, sans-serif"><?php echo $txt_amount ?>&nbsp;<?php echo $txt_currency ?></font></B></TD>
<TD BGCOLOR="#B3B3B3"></TD>
</TR>

<?php

// database connection
mysql_connect("$host","$user","$pass");

// database selection
mysql_select_db("$database");

// database query to select the categories
$result = mysql_query("select * from card_payment ORDER BY 'order_id' DESC") ;

// counter for how many iterations have been done
$i=0;

while($row = mysql_fetch_row($result)) {
	$color = ($coloralternator++ %2 ? "D9D9D9" : "E9E9E9");
	echo "<TR BGCOLOR=\"#$color\"><TD><font size=\"1\" face=\"Verdana, Arial, Helvetica, sans-serif\">$row[0]</FONT></TD>";
	echo "<TD><font size=\"1\" face=\"Verdana, Arial, Helvetica, sans-serif\">$row[1]</FONT></TD>";
	echo "<TD><font size=\"1\" face=\"Verdana, Arial, Helvetica, sans-serif\">$row[2]</FONT></TD>";
	echo "<TD><font size=\"1\" face=\"Verdana, Arial, Helvetica, sans-serif\">$row[3]</FONT></TD>";
	echo "<TD><font size=\"1\" face=\"Verdana, Arial, Helvetica, sans-serif\">$row[4]</FONT></TD>";
	echo "<TD align=right><font size=\"1\" face=\"Verdana, Arial, Helvetica, sans-serif\">$row[5]</FONT></TD>";
	echo "<TD align=right><a href=\"credit_card_remove.php?order_id=$row[1]\"><IMG SRC=\"../images/remove.gif\" WIDTH=\"13\" HEIGHT=\"15\" BORDER=\"0\" ALT=\"$txt_remove\"></a>
</TD></TR>";
	}

?>
</TABLE>

<HR WIDTH=75% size=1 COLOR="#000000">

<font size="-2" face="Verdana, Arial, Helvetica, sans-serif"><b>| <A HREF="javascript:location.reload()"><?php echo $txt_reload ?></A> |</b></font>

</CENTER>

</body>

</html>