<?php
// required variables
require("../config.php");

$amount=$_REQUEST["amount"]; 
$cart_id=$_REQUEST["cart_id"]; 
$company=$_REQUEST["company"]; 
$name=$_REQUEST["name"]; 
$address=$_REQUEST["address"]; 
$address2=$_REQUEST["address2"]; 
$city=$_REQUEST["city"]; 
$state=$_REQUEST["state"]; 
$zip=$_REQUEST["zip"]; 
$country=$_REQUEST["country"]; 
$phone=$_REQUEST["phone"]; 

 ?>

<html>

<head>

<title>Credit Card Payment Service</title>

<link rel="stylesheet" HREF="../master_style.css">

</head>

<BODY TEXT="#000000" BGCOLOR="#FFFFFF" LINK="#660101" VLINK="#660101" ALINK="#F70404">


<form onSubmit="return form_validator(this)" action="order_final.php" method=post>

<SCRIPT language="JavaScript"><!-- //script hider
function form_validator(theForm)
{

		if(theForm.name.value == "") {
		 alert("<?php echo $txt_missing_name ?>");
		 theForm.name.focus();
		 return(false);
	}

	if(theForm.address.value == "") {
		 alert("<?php echo $txt_missing_address ?>");
		 theForm.address.focus();
		 return(false);
	}

	if(theForm.city.value == "") {
		 alert("<?php echo $txt_missing_city ?>!");
		 theForm.city.focus();
		 return(false);
	}

	if(theForm.zip.value == "") {
		 alert("<?php echo $txt_missing_zip ?>!");
		 theForm.zip.focus();
		 return(false);
	}

	if(theForm.state.value == "") {
		 alert("<?php echo $txt_missing_state ?>!");
		 theForm.state.focus();
		 return(false);
	}

	if(theForm.country.value == "") {
		 alert("<?php echo $txt_missing_country ?>!");
		 theForm.country.focus();
		 return(false);
	}

	if(theForm.credit_card.value == "") {
		 alert("<?php echo $txt_missing_credit_card ?>!");
		 theForm.credit_card.focus();
		 return(false);
	}

          if (!(theForm.expmo.selectedIndex)) {
        alert('<?php echo $txt_missing_expmo ?>');
        event.returnValue=false;
	}

          if (!(theForm.expyr.selectedIndex)) {
        alert('<?php echo $txt_missing_expyr ?>');
        event.returnValue=false;
	}



	return (true);
}
// end script hiding --></SCRIPT>


<INPUT TYPE="hidden" NAME="amount" VALUE="<?php echo $amount?>">
<INPUT TYPE="hidden" NAME="cart_id" VALUE="<?php echo $cart_id?>">

<center><font size="5" face="Verdana, Arial, Helvetica, sans-serif"><b>
<?php echo $txt_credit_card_payment?></B></FONT></center>
<HR WIDTH=75% size=1 COLOR="#000000">
<DIV align="center"><font size="2" face="Verdana, Arial, Helvetica, sans-serif">
<?php echo $txt_credit_card_info?>
<P>

<B>Order Number:</B> <?php echo $cart_id?> <B><?php echo $txt_amount?>&nbsp;<?php echo $txt_currency ?>:</B> 
<?php echo $amount ?></FONT></DIV>
<CENTER>
<BR>
<table cellpadding="2" cellspacing="1" border="0">
<TR>
<TD BGCOLOR="#D9D9D9">
<font size="1" face="Verdana, Arial, Helvetica, sans-serif"><B><?php echo $txt_company ?></B></FONT>
</TD>
<TD BGCOLOR="#D9D9D9">
<INPUT TYPE=text NAME="company" VALUE="<?php echo $company ?>" SIZE=40>
</TD>
</TR>
<TR>
<TD BGCOLOR="#D9D9D9">
<font size="1" face="Verdana, Arial, Helvetica, sans-serif"><B><?php echo $txt_name ?> *</B></FONT>
</TD>
<TD BGCOLOR="#D9D9D9">
<INPUT TYPE=text NAME=name VALUE="<?php echo $name ?>" SIZE=40>
</TD>
</TR>
<TR>
<TD BGCOLOR="#D9D9D9">
<font size="1" face="Verdana, Arial, Helvetica, sans-serif"><B><?php echo $txt_address ?> *</B></FONT>
</TD>
<TD BGCOLOR="#D9D9D9">
<INPUT TYPE=text NAME=address VALUE="<?php echo $address ?>" SIZE=40>
</TD>
</TR>
<TR>
<TD BGCOLOR="#D9D9D9">
<font size="1" face="Verdana, Arial, Helvetica, sans-serif"><B><?php echo $txt_address2 ?> </B></FONT>
</TD>
<TD BGCOLOR="#D9D9D9">
<INPUT TYPE=text NAME=address2 VALUE="<?php echo $address2 ?>" SIZE=40>
</TD>
</TR>
<TR>
<TD BGCOLOR="#D9D9D9">
<font size="1" face="Verdana, Arial, Helvetica, sans-serif"><B><?php echo $txt_city ?> *</B></FONT>
</TD>
<TD BGCOLOR="#D9D9D9">
<INPUT TYPE=text NAME=city VALUE="<?php echo $city ?>" SIZE=40>
</TD>
</TR>
<TR>
<TD BGCOLOR="#D9D9D9">
<font size="1" face="Verdana, Arial, Helvetica, sans-serif"><B><?php echo $txt_state_province ?> *</B></FONT>
</TD>
<TD BGCOLOR="#D9D9D9">
<INPUT TYPE=text NAME=state VALUE="<?php echo $state ?>" SIZE=40>
</TD>
</TR>
<TR>
<TD BGCOLOR="#D9D9D9">
<font size="1" face="Verdana, Arial, Helvetica, sans-serif"><B><?php echo $txt_zip ?> *</B></FONT>
</TD>
<TD BGCOLOR="#D9D9D9">
<INPUT TYPE=text NAME=zip VALUE="<?php echo $zip ?>" SIZE=40>
</TD>
</TR>
<TR>
<TD BGCOLOR="#D9D9D9">
<font size="1" face="Verdana, Arial, Helvetica, sans-serif"><B><?php echo $txt_country ?> *</B></FONT>
</TD>
<TD BGCOLOR="#D9D9D9">
<INPUT TYPE=text NAME=country VALUE="<?php echo $country ?>" SIZE=40>
</TD>
</TR>
<TR>
<TD BGCOLOR="#D9D9D9">
<font size="1" face="Verdana, Arial, Helvetica, sans-serif"><B><?php echo $txt_phone ?></B></FONT>
</TD>
<TD BGCOLOR="#D9D9D9">
<INPUT TYPE=text NAME=phone VALUE="<?php echo $phone?>" SIZE=20>
</TD>
</TR>

<TR BGCOLOR="#D9D9D9"><TD colspan=2 align=center>
<font size="4" face="Verdana, Arial, Helvetica, sans-serif"><B><?php echo $txt_payment_method?></B></font>
<TABLE BORDER=0 BGCOLOR="#D9D9D9"><tr><td valign=top><font size="1" face="Verdana, Arial, Helvetica, sans-serif"><input type=radio name="payment_method" value="American Express"> <B>American Express</B></font></td>
<td valign=top><font size="1" face="Verdana, Arial, Helvetica, sans-serif"><input type=radio name="payment_method" value="Mastercard"> <B>Mastercard</B></font></td></tr>
<tr><td valign=top><font size="1" face="Verdana, Arial, Helvetica, sans-serif"><input type=radio name="payment_method" value="Visa"> <B>Visa</B></font></td>
<td valign=top><font size="1" face="Verdana, Arial, Helvetica, sans-serif"><input type=radio name="payment_method" value="Discover"> <B>Discover</B></font></td>
</table>
 <TABLE BORDER=0 BGCOLOR="#D9D9D9">
<tr><td><font size="1" face="Verdana, Arial, Helvetica, sans-serif"><B>Credit Card</B></font></td>
<td><input type=text name="credit_card" maxlength="150" size="30"></td>
<tr><td><font size="1" face="Verdana, Arial, Helvetica, sans-serif"><B>Exp. Date</B></font></td>
<td>
<select name="expmo">
<option>
<option>01
<option>02
<option>03
<option>04
<option>05
<option>06
<option>07
<option>08
<option>09
<option>10
<option>11
<option>12
</select>

<select name="expyr">
<option>
<option>2013
<option>2014
<option>2015
<option>2016
<option>2017
<option>2018
<option>2019
<option>2020
<option>2021
<option>2022
<option>2023
</select>
</td>
</table>
</TD>
</TR>

<TR>
<TD ALIGN=center COLSPAN=2>
<INPUT TYPE=submit  NAME=Submit VALUE="<?php echo $txt_submit ?>" class="button">
<INPUT TYPE=reset  VALUE="<?php echo $txt_reset ?>" class="button">
</TD>
</TR>
</TABLE>
 </FONT>
</CENTER>











</form>
<p><a href="order_final.php">E-Commerce data</a></p>











</BODY>
</HTML>