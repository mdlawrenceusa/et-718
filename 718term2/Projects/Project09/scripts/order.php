<?php
// required variables
require("config.php");
 ?>

<html>

<head>

<title><?php echo $txt_payment_method ?></title>

<link rel="stylesheet" HREF="../E_Commerce/master_style.css">

</HEAD>

<BODY TEXT="#000000" BGCOLOR="#FFFFFF" LINK="#000000" VLINK="#000000" ALINK="#F70404">
<h1>This will not do a real transaction. Data saved to a table.</h1>
<CENTER>
<font size="2" face="Verdana, Arial, Helvetica, sans-serif"><B><?php echo $txt_payment_method ?>
</B></FONT><P>
<table cellpadding="2" cellspacing="1" border="0">
<TR><TD VALIGN=top>
<A HREF="../E_Commerce/order_money.php"><IMG SRC="../E_Commerce/images/money.gif" BORDER="0" WIDTH="72" HEIGHT="55" ALT="Money Order"></A>
</TD>
<TD VALIGN=top WIDTH="400" NOWRAP>
<font size="1" face="Verdana, Arial, Helvetica, sans-serif"><B><A HREF="../E_Commerce/order_money.php"><?php echo $txt_invoice_payment ?></A></B><BR>
Orders are sent by normal mail
</FONT>
</TD></TR>
<TR><TD VALIGN=top>
<A HREF="../E_Commerce/order_card.php"><IMG SRC="../E_Commerce/images/credit_card.gif" BORDER="0" WIDTH="72" HEIGHT="74" ALT="Credit Card Payment"></A>

</TD>
<TD VALIGN=top WIDTH="400" NOWRAP>
<font size="1" face="Verdana, Arial, Helvetica, sans-serif">
<B><A HREF="../E_Commerce/order_card.php"><?php echo $txt_credit_card_payment  ?></A></B> <BR>
We accept American Express, Diners Club, Discover, JCB, MasterCard, Eurocard, Visa, Visa Check Cards
<br>
</FONT>
</TD></TR>
</TABLE><BR>


</CENTER>

<h1>Do not use a valid Credit Card or number. This is a test system.</h1>

</body>

</html>

