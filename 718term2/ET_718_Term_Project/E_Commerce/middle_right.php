<?php
// required variables
require("config.php");
 ?>

<html>

<head>

<title>MidiCart Shoppingcart</title>

<link rel="stylesheet" HREF="master_style.css">

</head>

<BODY TEXT="#000000" BACKGROUND="images/bg_middle.gif" LINK="#000000" VLINK="#000000" ALINK="#F70404">

<script language="JavaScript" type="text/javascript">
<!--


function form_validator(theForm) {

  if(theForm.searchstring.value == "") {

    alert("<?php echo $txt_empty_search?>!");

    theForm.searchstring.focus();

    return(false);

  }

  return (true);

}

//-->
</script>

<script LANGUAGE="JavaScript">

	// showItems() - displays shopping basket in a table
	function showItems() {
		index = document.cookie.indexOf("TheBasket");
		countbegin = (document.cookie.indexOf("=", index) + 1);
        	countend = document.cookie.indexOf(";", index);
        	if (countend == -1) {
            		countend = document.cookie.length;
        	}
		fulllist = document.cookie.substring(countbegin, countend);
		subtotal = 0;
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

			} else if (fulllist.substring(i,i+1) == '|') {
				if (thisitem==1) theitem = fulllist.substring(itemstart, i);
				if (thisitem==2) theprice = fulllist.substring(itemstart, i);
				if (thisitem==3) theoption = fulllist.substring(itemstart, i);
				thisitem++;
				itemstart=i+1;
			}
		}

		document.writeln('<FONT SIZE="2" FACE="Verdana, Arial, Helvetica, sans-serif"><?php echo $txt_total ?>&nbsp;<?php echo $txt_currency ?>: <B>'+top.center.cart.alterError(subtotal)+'</B></FONT>');
		
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
		if (confirm('<?php echo $txt_clear_shopping_cart ?>')) {
			index = document.cookie.indexOf("TheBasket");
			document.cookie="TheBasket=.";
			self.location = "basket_empty.php";
                top.center.frames[2].location = "middle_right.php";
		}
	}
</script>

<form onSubmit="return form_validator(this)" method=post target=main action=search_list.php>
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
<INPUT TYPE=text NAME="searchstring" VALUE="" SIZE=7>
<INPUT TYPE="submit" VALUE=" <?php echo $txt_go ?> " class="button">&nbsp;&nbsp;
<script LANGUAGE="JavaScript">
	showItems();
</script>
</TD>
<td align="right"  VALIGN="middle">
<IMG SRC="images/space.gif" WIDTH="1" HEIGHT="4" ALT=""><BR>
<font size="1" face="Verdana, Arial, Helvetica, sans-serif"><b>
&nbsp;| <a href="basket.php" target="main"><?php echo $txt_view_cart ?></a> | <a href="order.php" target="main"><?php echo $txt_checkout ?></a> |</b></font>
</td>
</tr></table>
</FORM>
</body>
</html>

