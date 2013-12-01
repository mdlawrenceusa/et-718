<?php
// required variables
require("config.php");
 ?>

<html>

<head>

<title>Shopping Basket</title>

<link rel="stylesheet" HREF="master_style.css">

</head>

<script LANGUAGE="JavaScript">

	function showBasket() {
		index = document.cookie.indexOf("TheBasket");
		countbegin = (document.cookie.indexOf("=", index) + 1);
        	countend = document.cookie.indexOf(";", index);
        	if (countend == -1) {
            		countend = document.cookie.length;
        	}
		fulllist = document.cookie.substring(countbegin, countend);
		subtotal = 0;
		document.writeln('<CENTER><FORM NAME="updateform"><font size="5" face="Verdana, Arial, Helvetica, sans-serif"><b><?php echo $txt_cart ?></b></FONT><HR WIDTH=75% size=1 COLOR="#000000">');
		document.writeln('<table cellpadding="2" cellspacing="1" border="0">');

document.writeln('<TR><TD BGCOLOR="#B3B3B3"><font size="-2" face="Verdana, Arial, Helvetica, sans-serif"><b><?php echo $txt_qty ?></b></FONT></TD><TD BGCOLOR="#B3B3B3"><font size="-2" face="Verdana, Arial, Helvetica, sans-serif"><b><?php echo $txt_code_no ?></b></FONT></TD><TD BGCOLOR="#B3B3B3"><font size="-2" face="Verdana, Arial, Helvetica, sans-serif"><b><?php echo $txt_item ?></b></FONT></TD><TD BGCOLOR="#B3B3B3"><font size="-2" face="Verdana, Arial, Helvetica, sans-serif"><b><?php echo $txt_price ?>&nbsp;<?php echo $txt_currency ?></b></FONT></TD><td BGCOLOR="#B3B3B3"><font size="-2" face="Verdana, Arial, Helvetica, sans-serif"><b><?php echo $txt_total ?></b></FONT><TD BGCOLOR="#B3B3B3"><b><FONT COLOR="#B3B3B3">.</FONT></b></TD></TR>');
		itemlist = 0;
		for (var i = 0; i <= fulllist.length; i++) {
			if (fulllist.substring(i,i+1) == '[') {
				itemstart = i+1;
				thisitem = 1;
			} else if (fulllist.substring(i,i+1) == ']') {
				itemend = i;
				thequantity = fulllist.substring(itemstart, itemend);
				itemtotal = 0;
				itemtotal = (eval(theprice*thequantity));
				temptotal = itemtotal * 100;
				subtotal = subtotal + itemtotal;
				itemlist=itemlist+1;
				document.write('<tr><td align=middle BGCOLOR="#D9D9D9"><INPUT TYPE=TEXT NAME="quant'+itemlist+'" VALUE="'+thequantity+'" SIZE=3></td><td BGCOLOR="#D9D9D9"><font size="-2" face="Verdana, Arial, Helvetica, sans-serif"><a href=item_show.php?code_no='+thenumber+'>'+thenumber+'</A></FONT></td>');

				document.write('<td align=left BGCOLOR="#D9D9D9"><font size="-2" face="Verdana, Arial, Helvetica, sans-serif"><a href=item_show.php?code_no='+thenumber+'>'+theitem+'</A></FONT></td><td align=right BGCOLOR="#D9D9D9"><font size="-2" face="Verdana, Arial, Helvetica, sans-serif">'+theprice+'</FONT></td><td align=right BGCOLOR="#D9D9D9"><font size="-2" face="Verdana, Arial, Helvetica, sans-serif">'+top.center.cart.alterError(itemtotal)+'</FONT></td><td WIDTH="38" align=right BGCOLOR="#D9D9D9"><a href="javascript:updateItem('+itemlist+',document.updateform.quant'+itemlist+'.value)"><IMG SRC="images/update.gif" WIDTH="13" HEIGHT="15" BORDER="0" ALT="<?php echo $txt_update ?>"></a><IMG SRC="images/space.gif" WIDTH="3" HEIGHT="2" ALT=""><a href="javascript:removeItem('+itemlist+')"><IMG SRC="images/remove.gif" WIDTH="13" HEIGHT="15" BORDER="0" ALT="<?php echo $txt_remove ?>"></a>&nbsp;</td></tr>');

			} else if (fulllist.substring(i,i+1) == '|') {
				if (thisitem==1) theitem = fulllist.substring(itemstart, i);
				if (thisitem==2) theprice = fulllist.substring(itemstart, i);
				if (thisitem==3) thenumber = fulllist.substring(itemstart, i);
				if (thisitem==4) theweight = fulllist.substring(itemstart, i);
				thisitem++;
				itemstart=i+1;
			}
		}

		document.writeln('<tr><td align=right BGCOLOR="#B3B3B3" colspan=4><font size="-2" face="Verdana, Arial, Helvetica, sans-serif"><b><?php echo $txt_product_total ?>&nbsp;<?php echo $txt_currency ?></b></FONT></td><td align=right BGCOLOR="#D9D9D9"><font size="-2" face="Verdana, Arial, Helvetica, sans-serif">'+top.center.cart.alterError(subtotal)+'</FONT></td><td BGCOLOR="#B3B3B3"><FONT COLOR="#B3B3B3">.</FONT></td></tr>');
		document.writeln('</TABLE><CENTER><font size="1" face="Verdana, Arial, Helvetica, sans-serif"><IMG SRC="images/update.gif" WIDTH="13" HEIGHT="15" BORDER="0" ALT="<?php echo $txt_update ?>"> = <?php echo $txt_update ?>  <IMG SRC="images/remove.gif" WIDTH="13" HEIGHT="15" BORDER="0" ALT="<?php echo $txt_remove ?>"> = <?php echo $txt_remove ?></FONT></CENTER>');
		document.writeln('</FORM>');
	}

	function updateItem(itemno, newquant) {
		newItemList = null;
		itemlist = 0;
		for (var i = 0; i <= fulllist.length; i++) {
			if (fulllist.substring(i,i+1) == '[') {
				thisitem = 1;
				itemstart = i+1;
				fullstart = i+1;
			} else if (fulllist.substring(i,i+1) == ']') {
				itemend = i;
				itemlist=itemlist+1;
				if (itemlist != itemno) {
					newItemList = newItemList+'['+fulllist.substring(fullstart, itemend)+']';
				} else {
					newItemList = newItemList + '['+theitem+'|'+theprice+'|'+thenumber+'|'+theweight+'|'+newquant+']';
				}
			} else if (fulllist.substring(i,i+1) == '|') {
				if (thisitem==1) theitem = fulllist.substring(itemstart, i);
				if (thisitem==2) theprice = fulllist.substring(itemstart, i);
				if (thisitem==3) thenumber = fulllist.substring(itemstart, i);
				if (thisitem==4) theweight = fulllist.substring(itemstart, i);
				thisitem++;
				itemstart=i+1;
			}
		}
		index = document.cookie.indexOf("TheBasket");
		document.cookie="TheBasket="+newItemList;
		self.location = "basket.php";
                top.center.frames[2].location = "middle_right.php";
	

	}

	function removeItem(itemno) {
		newItemList = null;
		itemlist = 0;
		for (var i = 0; i <= fulllist.length; i++) {
			if (fulllist.substring(i,i+1) == '[') {
				itemstart = i+1;
			} else if (fulllist.substring(i,i+1) == ']') {
				itemend = i;
				theitem = fulllist.substring(itemstart, itemend);
				itemlist=itemlist+1;
				if (itemlist != itemno) {
					newItemList = newItemList+'['+fulllist.substring(itemstart, itemend)+']';
				}
			}
		}
		index = document.cookie.indexOf("TheBasket");
		document.cookie="TheBasket="+newItemList;
		self.location = "basket.php";
                top.center.frames[2].location = "middle_right.php";
	
	}

	function clearBasket() {
		if (confirm('<?php echo $txt_clear_shopping_cart ?>?')) {
			index = document.cookie.indexOf("TheBasket");
			document.cookie="TheBasket=.";
			self.location = "basket_empty.php";
                top.center.frames[2].location = "middle_right.php";
		}
	}
</script>


<BODY TEXT="#000000" BGCOLOR="#FFFFFF" LINK="#660101" VLINK="#660101" ALINK="#F70404">


<p align="center">
 <script LANGUAGE="JavaScript">
	showBasket();
</script> 
</p>


<center>
<TABLE BORDER=0 CELLSPACING=2 CELLPADDING=3>
<TR VALIGN=Top>
<TD><FORM METHOD="GET" ACTION="order.php"><INPUT TYPE="submit" VALUE=" <?php echo $txt_checkout  ?> " class="button"></FORM></TD>
<TD><FORM><INPUT TYPE="BUTTON" NAME="clear" VALUE="<?php echo $txt_clear_cart ?>" class="button" ONCLICK="clearBasket()"></FORM></TD>
</TR>
</TABLE>
</center>
</body>
</html>
