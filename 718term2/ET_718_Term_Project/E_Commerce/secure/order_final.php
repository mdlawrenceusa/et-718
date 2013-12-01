<?php

$amount=$_REQUEST["amount"]; 
$cart_id=$_REQUEST["cart_id"]; 
$company=$_REQUEST["company"]; 
$name=$_REQUEST["name"]; 
$email=$_REQUEST["email"]; 
$address=$_REQUEST["address"]; 
$address2=$_REQUEST["address2"]; 
$city=$_REQUEST["city"]; 
$state=$_REQUEST["state"]; 
$zip=$_REQUEST["zip"]; 
$country=$_REQUEST["country"]; 
$phone=$_REQUEST["phone"]; 
$country=$_REQUEST["country"]; 
$phone=$_REQUEST["phone"]; 
$comment=$_REQUEST["comment"]; 
$total=$_REQUEST["total"]; 
$receipt=$_REQUEST["receipt"]; 
$payment_method=$_REQUEST["payment_method"];
$credit_card=$_REQUEST["credit_card"];
$expmo=$_REQUEST["expmo"];
$expyr=$_REQUEST["expyr"];

require("../config.php");

// generates cart id number 
$posted = date("Y-m-d");

// database connection
mysql_connect("$host","$user","$pass");

// database selection
mysql_select_db("$database");

mysql_query("insert into card_payment values('$posted','$cart_id','$payment_method','$credit_card','$expmo/$expyr','$amount')");

?>


<html>

<head>

<title>Credit Card Payment Service</title>

<style>

A:Link {color:000000;text-decoration:none;}

A:Visited {color:000000;text-decoration:none;}

A:Hover {color:F70404;text-decoration:underline;}

.button {
	BORDER-RIGHT: 1px solid #000000; BORDER-TOP: 1px solid #000000; BORDER-LEFT: 1px solid #000000; BORDER-BOTTOM: 1px solid #000000;
	background-color: #D9D9D9; FONT-SIZE: 10px;font-family: Verdana, Arial, Helvetica, sans-serif; font-weight: bold; font-style: regular;color: #3a3a3a;
}

</style>

</head>

<BODY TEXT="#000000" BGCOLOR="#FFFFFF" LINK="#660101" VLINK="#660101" ALINK="#F70404">

<center><font size="5" face="Verdana, Arial, Helvetica, sans-serif">
<b><?php echo $txt_credit_card_payment ?></B></FONT></center>
<HR WIDTH=75% size=1 COLOR="#000000">
<DIV align="center"><font size="2" face="Verdana, Arial, Helvetica, sans-serif">
<FONT COLOR=#d70000><B><?php echo $txt_secure_payment_sucessful ?></B></FONT>
<P>

<B>Order ID:</B> <?php echo $cart_id ?> <B>Amount&nbsp;<?php echo $txt_currency ?>:</B> <?php echo $amount ?></FONT></DIV>
<CENTER>
<BR>
<table cellpadding="1" cellspacing="1" border="0">
<TR>
<TD>
<font size="1" face="Verdana, Arial, Helvetica, sans-serif"><B><?php echo $txt_company ?></B></FONT>
</TD>
<TD>
<font size="1" face="Verdana, Arial, Helvetica, sans-serif"><?php echo $company ?></FONT>
</TD>
</TR>
<TR>
<TD>
<font size="1" face="Verdana, Arial, Helvetica, sans-serif"><B><?php echo $txt_name ?></B></FONT>
</TD>
<TD>
<font size="1" face="Verdana, Arial, Helvetica, sans-serif"><?php echo $name ?></FONT>
</TD>
</TR>
<TR>
<TD>
<font size="1" face="Verdana, Arial, Helvetica, sans-serif"><B><?php echo $txt_address ?></B></FONT>
</TD>
<TD>
<font size="1" face="Verdana, Arial, Helvetica, sans-serif"><?php echo $address ?></FONT>
</TD>
</TR>
<TR>
<TD>
<font size="1" face="Verdana, Arial, Helvetica, sans-serif"><B><?php echo $txt_address2 ?> </B></FONT>
</TD>
<TD>
<font size="1" face="Verdana, Arial, Helvetica, sans-serif"><?php echo $address2 ?></FONT>
</TD>
</TR>
<TR>
<TD>
<font size="1" face="Verdana, Arial, Helvetica, sans-serif"><B><?php echo $txt_city ?></B></FONT>
</TD>
<TD >
<font size="1" face="Verdana, Arial, Helvetica, sans-serif"><?php echo $city ?></FONT>
</TD>
</TR>
<TR>
<TD>
<font size="1" face="Verdana, Arial, Helvetica, sans-serif"><B><?php echo $txt_state_province ?></B></FONT>
</TD>
<TD>
<font size="1" face="Verdana, Arial, Helvetica, sans-serif"><?php echo $state ?></FONT>
</TD>
</TR>
<TR>
<TD>
<font size="1" face="Verdana, Arial, Helvetica, sans-serif"><B><?php echo $txt_zip ?></B></FONT>
</TD>
<TD>
<font size="1" face="Verdana, Arial, Helvetica, sans-serif"><?php echo $zip ?></FONT>
</TD>
</TR>
<TR>
<TD>
<font size="1" face="Verdana, Arial, Helvetica, sans-serif"><B><?php echo $txt_country ?></B></FONT>
</TD>
<TD>
<font size="1" face="Verdana, Arial, Helvetica, sans-serif"><?php echo $country ?></FONT>
</TD>
</TR>

</TABLE>
<HR WIDTH=75% size=1 COLOR="#000000">
 </FONT>
<font size="1" face="Verdana, Arial, Helvetica, sans-serif">
<B>[ <a href="javascript:self.close()"><?php echo $txt_close_window ?></a> ]</B></A></font>
</CENTER>
</CENTER>











<p><a href="Order_Output.php">Credit Card Data</a></p>











</BODY>
</HTML>