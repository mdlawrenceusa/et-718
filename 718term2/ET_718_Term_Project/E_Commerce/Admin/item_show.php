
<?php
// required variables
require("../config.php");

$code_no=$_REQUEST["code_no"]; 

 ?>


<html>

<head>

<title>Product Edit</title>

<link rel="stylesheet" HREF="../master_style.css">

</HEAD>

<BODY TEXT="#000000" BGCOLOR="#FFFFFF" LINK="#000000" VLINK="#000000" ALINK="#F70404">

<SCRIPT LANGUAGE="JavaScript">

<!-- Begin
function popUp(URL) {
day = new Date();
id = day.getTime();
eval("page" + id + " = window.open(URL, '" + id + "', 'toolbar=0,scrollbars=1,location=0,statusbar=0,menubar=0,resizable=0,width=380,height=160,left = 250,top = 150');");
}
// End -->
</script>

<form onSubmit="return form_validator(this)" method=post enctype="multipart/form-data" action="update.php">

<SCRIPT language="JavaScript"><!-- //script hider
function form_validator(theForm)
{

	if(theForm.maingroup.value == "") {
		 alert("<?php echo $txt_missing_maingroup ?>");
		 theForm.maingroup.focus();
		 return(false);
	}

	if(theForm.secondgroup.value == "") {
		 alert("<?php echo $txt_missing_secondgroup ?>");
		 theForm.secondgroup.focus();
		 return(false);
	}
	
	if(theForm.codeno.value == "") {
		 alert("<?php echo $txt_missing_code_no ?>");
		 theForm.codeno.focus();
		 return(false);
	}

	if(theForm.item.value == "") {
		 alert("<?php echo $txt_missing_item ?>!");
		 theForm.item.focus();
		 return(false);
	}

	if(theForm.text.value == "") {
		 alert("<?php echo $txt_missing_text ?>");
		 theForm.text.focus();
		 return(false);
	}

	if(theForm.price.value == "") {
		 alert("<?php echo $txt_missing_price ?>");
		 theForm.price.focus();
		 return(false);
	}


	return (true);
}
// end script hiding --></SCRIPT>


<?php

// database connection
mysql_connect("$host","$user","$pass");

// database selection
mysql_select_db("$database");

echo "<CENTER>";

// query to get the product data of the specified products
$result = mysql_query("select * from mlawrence_products where (code_no = '$code_no')");

while($row = mysql_fetch_row($result)) {

echo "<TABLE BORDER=0 CELLSPACING=1 CELLPADDING=2><tr><td>";
echo "<input  name=\"code_no\" TYPE=Hidden value=\"$row[2]\" size=30>";
echo "<input type=\"hidden\" NAME=\"old_image\" VALUE=\"$row[6]\">";
echo "<B><font size=\"2\" face=\"Verdana, Arial, Helvetica, sans-serif\">$txt_maingroup:</B></FONT></td>";
echo "<td colspan=3><input name=\"maingroup\" value=\"$row[0]\" size=30></td></tr><tr><td>";
echo "<B><font size=\"2\" face=\"Verdana, Arial, Helvetica, sans-serif\">$txt_secondgroup:</B></FONT></td>";
echo "<td colspan=3><input name=\"secondgroup\" value=\"$row[1]\" size=30></td></tr><tr><td>";
echo "<B><font size=\"2\" face=\"Verdana, Arial, Helvetica, sans-serif\">$txt_code_no:</B></FONT><BR><font size=\"1\" face=\"Verdana, Arial, Helvetica, sans-serif\">$txt_unique</font></td>";
echo "<td colspan=4><input size=10 name=\"codeno\" value=\"$row[2]\"></td></tr>";
echo "<tr><td><B><font size=\"2\" face=\"Verdana, Arial, Helvetica, sans-serif\">$txt_item:</B></FONT></td>";
echo "<td colspan=3><input name=\"item\" value=\"$row[3]\" size=40></td></tr>";
echo "<tr><td valign=top><font size=\"2\" face=\"Verdana, Arial, Helvetica, sans-serif\">";
echo "<B>$txt_text:</B></FONT></td><td colspan=3>";
echo "<textarea cols=54 rows=10 name=\"text\" wrap=virtual>$row[4]</textarea><BR><font size=\"1\" face=\"Verdana, Arial, Helvetica, sans-serif\">You may use HTML in the description</FONT></td></tr>";
echo "<tr><td><font size=\"2\" face=\"Verdana, Arial, Helvetica, sans-serif\"><B>$txt_image:<B/></FONT></td>";
echo "<td colspan=3><input name=\"userfile\" type=\"file\" size=\"28\"></td></tr>";
echo "<tr><td><font size=\"2\" face=\"Verdana, Arial, Helvetica, sans-serif\"><b>$txt_price&nbsp;$txt_currency:</b></FONT></td>";
echo "<td colspan=3><input name=\"price\" value=\"$row[5]\" size=10>";
echo "<font size=\"1\" face=\"Verdana, Arial, Helvetica, sans-serif\">Ex. 59.00</FONT></td></tr>";
echo "<tr><td><font size=\"2\" face=\"Verdana, Arial, Helvetica, sans-serif\"><b>$txt_shipping_price $txt_currency:</b></FONT></td>";
echo "<td colspan=3><input name=\"shipping\" value=\"$row[7]\" size=10>";
echo "<font size=\"1\" face=\"Verdana, Arial, Helvetica, sans-serif\">Ex. 0.10</FONT></td></tr><tr><td></td>";
echo "<td><input type=submit class=\"button\" value=\"$txt_save\"></form></TD>";
echo "<TD COLSPAN=2><form method=post TARGET=\"main\" action=\"remove.php\">";
echo "<input type=\"hidden\" value=\"$row[2]\" name=\"code_no\">";
echo"<input type=submit class=\"button\" value=\"$txt_remove \"></form></td></tr><tr><td valign=top>";
echo "<font size=\"2\" face=\"Verdana, Arial, Helvetica, sans-serif\"><B>$txt_image:</B></FONT></td><td colspan=3 valign=top>";
echo "<font size=\"2\" face=\"Verdana, Arial, Helvetica, sans-serif\"><B>$row[6]</B></FONT><BR><img src=\"../images/$row[6]\"></td></tr></table>";
echo "</CENTER>";



}
 ?>
</FORM>
</BODY></HTML>