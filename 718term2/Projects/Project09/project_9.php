<?php
// required variables
require("scripts/config.php");
 ?>


<html>

<head>

<title>Order form</title>

<link rel="stylesheet" HREF="../E_Commerce/master_style.css">

</head>

<BODY TEXT="#000000" BGCOLOR="#FFFFFF" LINK="#660101" VLINK="#660101" ALINK="#F70404">

<form onSubmit="return form_validator(this)" action="scripts/order_final.php" method=gett>

<SCRIPT language="JavaScript"><!-- //script hider
function form_validator(theForm)
{

	if(theForm.email.value == "") {
		 alert("<?php echo $txt_missing_email ?>");
		 theForm.email.focus();
		 return(false);
	}
	
	if(theForm.First.value == "") {
		 alert("<?php echo $txt_missing_name ?>");
		 theForm.name.focus();
		 return(false);
	}

	
	return (true);
}
// end script hiding --></SCRIPT>


<script LANGUAGE="JavaScript">

	function alterError(value) {
		if (value<=0.99) {
			newDollar = '0';
		} else {
			newDollar = parseInt(value);
		}
		newCent = parseInt((value+.0008 - newDollar)* 100);
		if (eval(newCent) <= 9) newCent='0'+newCent;
		newString = newDollar + '.' + newCent;
		return (newString);
	}

	// showItems in orderform

	function showItems() {
		index = document.cookie.indexOf("TheBasket");
		countbegin = (document.cookie.indexOf("=", index) + 1);
        	countend = document.cookie.indexOf(";", index);
        	if (countend == -1) {
            		countend = document.cookie.length;
        	}
		fulllist = document.cookie.substring(countbegin, countend);
		subtotal = 0;
		subweight = 0;
		document.writeln('<table cellpadding="2" cellspacing="1" border="0">');

		document.writeln('<TR><TD BGCOLOR="#B3B3B3"><font size="-2" face="Verdana, Arial, Helvetica, sans-serif"><b><?php echo $txt_qty ?></b></FONT></TD><TD  BGCOLOR="#B3B3B3"><font size="-2" face="Verdana, Arial, Helvetica, sans-serif"><b><?php echo $txt_code_no ?></b></FONT></TD><TD BGCOLOR="#B3B3B3"><font size="-2" face="Verdana, Arial, Helvetica, sans-serif"><b><?php echo $txt_item ?></b></FONT></TD><TD BGCOLOR="#B3B3B3"><font size="-2" face="Verdana, Arial, Helvetica, sans-serif"><b><?php echo $txt_price ?>&nbsp;<?php echo $txt_currency ?></b></FONT></TD><td BGCOLOR="#B3B3B3"><font size="-2" face="Verdana, Arial, Helvetica, sans-serif"><b><?php echo $txt_total ?></b></FONT></td></TR>');
		itemlist = 0;
		for (var i = 0; i <= fulllist.length; i++) {
			if (fulllist.substring(i,i+1) == '[') {
				thisitem = 1;
				itemstart = i+1;
			} else if (fulllist.substring(i,i+1) == ']') {
				itemend = i;
				thequantity = fulllist.substring(itemstart, itemend);
				itemtotal = 0;
				itemtotal = (eval(theprice*thequantity));
				temptotal = itemtotal * 100;
				subtotal = subtotal + itemtotal;
				weighttotal = 0;
				weighttotal = (eval(theweight*thequantity));
				subweight = subweight + weighttotal;
				itemlist=itemlist+1;				
document.write('<tr><td align=middle BGCOLOR="#D9D9D9"><font size="-2" face="Verdana, Arial, Helvetica, sans-serif">'+thequantity+'</FONT></td>');
				document.writeln('<td BGCOLOR="#D9D9D9"><font size="-2" face="Verdana, Arial, Helvetica, sans-serif"><a href=item_show.php?code_no='+thenumber+'>'+thenumber+'</A></FONT></td><td align=left BGCOLOR="#D9D9D9"><font size="-2" face="Verdana, Arial, Helvetica, sans-serif"><a href=item_show.php?code_no='+thenumber+'>'+theitem+'</A></FONT></td><td align=right BGCOLOR="#D9D9D9"><font size="-2" face="Verdana, Arial, Helvetica, sans-serif">'+theprice+'</FONT></td><td align=right BGCOLOR="#D9D9D9"><font size="-2" face="Verdana, Arial, Helvetica, sans-serif">'+alterError(itemtotal)+'</FONT></td></tr>');
		  
                                document.writeln('<INPUT TYPE="hidden" NAME="quantity'+itemlist+'" VALUE="'+thequantity+' x " SIZE="40">');
				document.writeln('<INPUT TYPE="hidden" NAME="item'+itemlist+'" VALUE="  '+theitem+'" SIZE="80">');
                                document.writeln('<INPUT TYPE="hidden" NAME="price'+itemlist+'" VALUE="  '+theprice+'" SIZE="40">');
                                document.writeln('<INPUT TYPE="hidden" NAME="totalcost'+itemlist+'" VALUE="'+alterError(itemtotal)+'" SIZE="40">');
                                document.writeln('<INPUT TYPE="hidden" NAME="number'+itemlist+'" VALUE="  '+thenumber+'" SIZE="40">');
			} else if (fulllist.substring(i,i+1) == '|') {
				if (thisitem==1) theitem = fulllist.substring(itemstart, i);
				if (thisitem==2) theprice = fulllist.substring(itemstart, i);
				if (thisitem==3) thenumber = fulllist.substring(itemstart, i);
				if (thisitem==4) theweight = fulllist.substring(itemstart, i);
				thisitem++;
				itemstart=i+1;
			}
		}

		totprice = (Math.round(subtotal*100)/100);
	      shipping = subweight+<?php echo $add_freight ?>;
		totalcost = (totprice+shipping);
            tax = (Math.round(totalcost*<?php echo $add_tax ?>)/100);


<?php
echo ("document.writeln('<tr><td align=right BGCOLOR=\"#B3B3B3\" colspan=4><font size=\"-2\" face=\"Verdana, Arial, Helvetica, sans-serif\"><b>$txt_product_total</b></FONT></td><td align=right BGCOLOR=\"#D9D9D9\"><font size=\"-2\" face=\"Verdana, Arial, Helvetica, sans serif\">'+alterError(totprice)+'</FONT></td></tr>');") ;
?>

<?php
echo ("document.writeln('<tr><td align=right BGCOLOR=\"#B3B3B3\" colspan=4><font size=\"-2\" face=\"Verdana, Arial, Helvetica, sans-serif\"><b>$txt_shipping</b></FONT></td><td align=right BGCOLOR=\"#D9D9D9\"><font size=\"-2\" face=\"Verdana, Arial, Helvetica, sans serif\">'+alterError(shipping)+'</FONT></td></tr>');") ;
?>

<?php
if( $add_tax  >"0") {
echo ("document.writeln('<tr><td align=right BGCOLOR=\"#B3B3B3\" colspan=4><font size=\"-2\" face=\"Verdana, Arial, Helvetica, sans-serif\"><b>$txt_tax</b></FONT></td><td align=right BGCOLOR=\"#D9D9D9\"><font size=\"-2\" face=\"Verdana, Arial, Helvetica, sans-serif\">'+alterError(tax)+'</FONT></td></tr>');") ;
}
?>

		document.writeln('<tr><td align=right BGCOLOR="#B3B3B3" colspan=4><font size="-2" face="Verdana, Arial, 		Helvetica, sans-serif"><b><?php echo $txt_grand_total ?>&nbsp;<?php echo $txt_currency ?></b></FONT></td><td align=right BGCOLOR="#D9D9D9"><font size="-2" face="Verdana, Arial, Helvetica, sans-serif">'+alterError(totalcost+tax)+'</FONT></td></tr>');
		document.writeln('<INPUT TYPE="hidden" NAME="total" VALUE="'+alterError(totalcost+tax)+'" SIZE="40">');



		document.writeln('</TABLE>');

	}

</script>

<center><font size="5" face="Verdana, Arial, Helvetica, sans-serif"><b><?php echo $txt_order_form2 ?></B></FONT><BR>
<font size="2" face="Verdana, Arial, Helvetica, sans-serif"><b>User Regestration Form</B></FONT></center>

<HR WIDTH=75% size=1 COLOR="#000000">
<CENTER>
<script LANGUAGE="JavaScript">
	#showItems();
</script></CENTER>
<BR>
<font size="2" face="Verdana, Arial, Helvetica, sans-serif">
<DIV align="center"><?php echo $txt_provide_information ?></DIV>
</FONT>
<CENTER>
<BR>
<table cellpadding="2" cellspacing="1" border="0">
<tr BGCOLOR="#B3B3B3">
<td colspan=2><font size="2" face="Verdana, Arial, Helvetica, sans-serif"><B><?php echo $txt_personal_information ?></B></FONT>
</td></tr>
<TR>
<TD BGCOLOR="#D9D9D9">
<font size="1" face="Verdana, Arial, Helvetica, sans-serif"><B> <?php echo $txt_email ?> *</B></FONT>
</TD>
<TD BGCOLOR="#D9D9D9">
<INPUT TYPE=text NAME="email" VALUE="" SIZE=40>
</TD>
</TR>
<TR>
<TD BGCOLOR="#D9D9D9">
<font size="1" face="Verdana, Arial, Helvetica, sans-serif"><B><?php echo $txt_name9 ?> *</B></FONT>
</TD>
<TD BGCOLOR="#D9D9D9">
<INPUT TYPE=text NAME=First SIZE=40>
</TD>
</TR>


<TR>

<TD ALIGN=center COLSPAN=2>
<INPUT TYPE=submit  NAME=Submit VALUE="<?php echo $txt_submit ?>" class="button">
<INPUT TYPE=reset  VALUE="<?php echo $txt_reset ?>" class="button">
</TD>
</TR>
</TABLE>
 
</CENTER>
</FORM>
</BODY>
</HTML>
