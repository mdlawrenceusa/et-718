<?php
// required variables
require("config.php");
 ?>

<html>

<head>

<title>MidiCart Shoppingcart Date</title>

<link rel="stylesheet" HREF="master_style.css">

</HEAD>

<BODY TEXT="#000000" BACKGROUND="images/bg_middle.gif" LINK="#000000" VLINK="#000000" ALINK="#F70404">

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

	//  add item to the shoppingbasket

        function addItem(newItem, newPrice, newQuantity, newNumber, newWeight) {
		if (newQuantity >= 1000) {
			rc = alert('<?php echo $txt_wrong_quantity ?>!');
		} else {
                if (newQuantity >= 1) {
				window.alert(''+newQuantity+' x '+newItem+' <?php echo $txt_add_to_cart ?>!');
				top.center.frames[2].location = "middle_right.php";
                        index = document.cookie.indexOf("TheBasket");
                        countbegin = (document.cookie.indexOf("=", index) + 1);
                        countend = document.cookie.indexOf(";", index);
                        if (countend == -1) {
                        countend = document.cookie.length;
                        }
		                document.cookie="TheBasket="+document.cookie.substring(countbegin, countend)+"["+newItem+"|"+newPrice+"|"+newNumber+"|"+newWeight+"|"+newQuantity+"]";
			}
		}
	}

	function resetShoppingBasket() {
		index = document.cookie.indexOf("TheBasket");
		document.cookie="TheBasket=.";
	}
</script>

<?php

// date right now to display 
$now = date("Y-m-d");

?>

<?php 
	echo "<center><font size=\"1\" face=\"Verdana, Arial, Helvetica, sans-serif\"><b>$now</font></center>";
?>

<script language="JavaScript">resetShoppingBasket()</script>

<script language=JavaScript>
<!--

var message="  <?php echo $now?>";

///////////////////////////////////
function clickIE4(){
if (event.button==2){
alert(message);
return false;
}
}

function clickNS4(e){
if (document.layers||document.getElementById&&!document.all){
if (e.which==2||e.which==3){
alert(message);
return false;
}
}
}

if (document.layers){
document.captureEvents(Event.MOUSEDOWN);
document.onmousedown=clickNS4;
}
else if (document.all&&!document.getElementById){
document.onmousedown=clickIE4;
}

document.oncontextmenu=new Function("alert(message);return false")

// --> 
</script>


</body>

</html>
