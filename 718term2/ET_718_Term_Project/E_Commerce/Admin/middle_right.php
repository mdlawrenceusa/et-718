<?php
// required variables
require("../config.php");
 ?>
<html>

<head>

<title>MidiCart Shoppingcart</title>

<link rel="stylesheet" HREF="../master_style.css">

</head>

<BODY TEXT="#000000" BACKGROUND="../images/bg_middle.gif" LINK="#000000" VLINK="#000000" ALINK="#F70404">


<form method=get target=main action=search_list.php>
<table cellpadding="0" cellspacing="0" border="0" width="100%">
<TR><TD VALIGN="middle" align="left" width="70">
<IMG SRC="images/space.gif" WIDTH="1" HEIGHT="2" ALT=""><BR>
<font size="1" face="Verdana, Arial, Helvetica, sans-serif">
<b><?php echo $txt_search?></b></font>
</TD><TD>
<IMG SRC="images/space.gif" WIDTH="1" HEIGHT="3" ALT=""><BR>
<SELECT name="chose"> 
<OPTION selected  value="item"><?php echo $txt_select_field ?></OPTION>
<OPTION value="code_no"><?php echo $txt_code_no ?></OPTION>
<OPTION value="item"><?php echo $txt_item ?></OPTION>
<OPTION value="text"><?php echo $txt_text ?></OPTION>
</select>
<INPUT TYPE=text NAME="searchstring" VALUE="" SIZE=10>
<INPUT TYPE="submit" VALUE=" <?php echo $txt_go ?> " class="button">&nbsp;&nbsp;
</TD>
<td align="right"  VALIGN="middle">
<IMG SRC="images/space.gif" WIDTH="1" HEIGHT="2" ALT=""><BR>
<font size="1" face="Verdana, Arial, Helvetica, sans-serif"><b>
&nbsp;| <a href="credit_card_info.php" target="main"><?php echo $txt_credit_card_payment ?></a> |</b></font>
</td>
</tr></table>
</FORM>

</body>
</html>
