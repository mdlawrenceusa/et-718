<?php
// required variables
require("../config.php");
 ?>

<html>

<head>

<title>Add Item</title>

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

<form onSubmit="return form_validator(this)" method=post enctype="multipart/form-data" action="add_insert.php">


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
	
	if(theForm.code_no.value == "") {
		 alert("<?php echo $txt_missing_code_no ?>");
		 theForm.code_no.focus();
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

?>

<center><table border=0>
<tr><td><font size="2" face="Verdana, Arial, Helvetica, sans-serif">
<B><?php echo $txt_maingroup  ?>:</B></font></td><td><input name="maingroup" size=30></td></tr>
<tr><td><font size="2" face="Verdana, Arial, Helvetica, sans-serif">
<B><?php echo $txt_secondgroup  ?>:</B></font></td><td><input name="secondgroup" size=30></td></tr>
<tr><td><font size="2" face="Verdana, Arial, Helvetica, sans-serif"><B><?php echo $txt_code_no ?>:</B></font><BR>
<font size="1" face="Verdana, Arial, Helvetica, sans-serif"><?php echo $txt_unique ?></font></td>
<td><input size=10 name="code_no"></td></tr>
<tr><td><font size="2" face="Verdana, Arial, Helvetica, sans-serif"><B><?php echo $txt_item ?>:</B></font></td>
<td><input name="item" size=40></td></tr><tr><td valign=top><font size="2" face="Verdana, Arial, Helvetica, sans-serif">
<B><?php echo $txt_text ?>:</B></font></td><td>
<textarea cols=54 rows=10 name="text" WRAP=Physical></textarea><BR><font size="1" face="Verdana, Arial, Helvetica, sans-serif">You may use HTML in the description</FONT></td></tr>
<tr><td><B><font size="2" face="Verdana, Arial, Helvetica, sans-serif"><?php echo $txt_image ?>:</font></B></td>
<td><input name="userfile" type="file" size="28"></td></tr>
<tr><td><B><font size="2" face="Verdana, Arial, Helvetica, sans-serif"><?php echo $txt_price?>&nbsp;<?php echo $txt_currency ?>:</font></B></td>
<td><input name="price" size=10><font size="1" face="Verdana, Arial, Helvetica, sans-serif">Ex. 59.00</FONT></td></tr>
<tr><td><B><font size="2" face="Verdana, Arial, Helvetica, sans-serif"><?php echo $txt_shipping_price?> <?php echo $txt_currency ?>:</font></B></td>
<td><input name="shipping" size=10><font size="1" face="Verdana, Arial, Helvetica, sans-serif">Ex. 0.10</FONT></td></tr>
<tr><td></td><td><input type=submit value="<?php echo $txt_save ?>" class="button">
<input type=reset value="<?php echo $txt_reset ?>" class="button"></td></tr></table></center>
</form>
</BODY>

</HTML>