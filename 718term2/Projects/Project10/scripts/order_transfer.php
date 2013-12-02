<?php

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
$comment=$_REQUEST["comment"]; 
$total=$_REQUEST["total"]; 

$quantity1=$_REQUEST["quantity1"]; 
$number1=$_REQUEST["number1"]; 
$item1=$_REQUEST["item1"]; 
$price1=$_REQUEST["price1"];
$quantity2=$_REQUEST["quantity2"]; 
$number2=$_REQUEST["number2"]; 
$item2=$_REQUEST["item2"]; 
$price2=$_REQUEST["price2"];
$quantity3=$_REQUEST["quantity3"]; 
$number3=$_REQUEST["number3"];
$item3=$_REQUEST["item3"]; 
$price3=$_REQUEST["price3"];
$quantity4=$_REQUEST["quantity4"]; 
$number4=$_REQUEST["number4"]; 
$item4=$_REQUEST["item4"]; 
$price4=$_REQUEST["price4"];
$quantity5=$_REQUEST["quantity5"]; 
$number5=$_REQUEST["number5"]; 
$item5=$_REQUEST["item5"]; 
$price5=$_REQUEST["price5"];
$quantity6=$_REQUEST["quantity6"]; 
$number6=$_REQUEST["number6"]; 
$item6=$_REQUEST["item6"]; 
$price6=$_REQUEST["price6"];
$quantity7=$_REQUEST["quantity7"]; 
$number7=$_REQUEST["number7"]; 
$item7=$_REQUEST["item7"]; 
$price7=$_REQUEST["price7"];
$quantity8=$_REQUEST["quantity8"]; 
$number8=$_REQUEST["number8"];
$item8=$_REQUEST["item8"]; 
$price8=$_REQUEST["price8"];
$quantity9=$_REQUEST["quantity9"]; 
$number9=$_REQUEST["number9"]; 
$item9=$_REQUEST["item9"]; 
$price9=$_REQUEST["price9"];
$quantity10=$_REQUEST["quantity10"]; 
$number10=$_REQUEST["number10"]; 
$item10=$_REQUEST["item10"]; 
$price10=$_REQUEST["price10"];

$quantity11=$_REQUEST["quantity11"]; 
$number11=$_REQUEST["number11"]; 
$item11=$_REQUEST["item11"]; 
$price11=$_REQUEST["price11"];
$quantity12=$_REQUEST["quantity12"]; 
$number12=$_REQUEST["number12"]; 
$item12=$_REQUEST["item12"]; 
$price12=$_REQUEST["price12"];
$quantity13=$_REQUEST["quantity13"]; 
$number13=$_REQUEST["number13"];
$item13=$_REQUEST["item13"]; 
$price13=$_REQUEST["price13"];
$quantity14=$_REQUEST["quantity14"]; 
$number14=$_REQUEST["number14"]; 
$item14=$_REQUEST["item14"]; 
$price14=$_REQUEST["price14"];
$quantity15=$_REQUEST["quantity15"]; 
$number15=$_REQUEST["number15"]; 
$item15=$_REQUEST["item15"]; 
$price15=$_REQUEST["price15"];
$quantity16=$_REQUEST["quantity16"]; 
$number16=$_REQUEST["number16"]; 
$item16=$_REQUEST["item16"]; 
$price16=$_REQUEST["price16"];
$quantity17=$_REQUEST["quantity17"]; 
$number17=$_REQUEST["number17"]; 
$item17=$_REQUEST["item17"]; 
$price17=$_REQUEST["price17"];
$quantity18=$_REQUEST["quantity18"]; 
$number18=$_REQUEST["number18"];
$item18=$_REQUEST["item18"]; 
$price18=$_REQUEST["price18"];
$quantity19=$_REQUEST["quantity19"]; 
$number19=$_REQUEST["number19"]; 
$item19=$_REQUEST["item19"]; 
$price19=$_REQUEST["price19"];
$quantity20=$_REQUEST["quantity20"]; 
$number20=$_REQUEST["number20"]; 
$item20=$_REQUEST["item20"]; 
$price20=$_REQUEST["price20"];

$quantity21=$_REQUEST["quantity21"]; 
$number21=$_REQUEST["number21"]; 
$item21=$_REQUEST["item21"]; 
$price21=$_REQUEST["price21"];
$quantity22=$_REQUEST["quantity22"]; 
$number22=$_REQUEST["number22"]; 
$item22=$_REQUEST["item22"]; 
$price22=$_REQUEST["price22"];
$quantity23=$_REQUEST["quantity23"]; 
$number23=$_REQUEST["number23"];
$item23=$_REQUEST["item23"]; 
$price23=$_REQUEST["price23"];
$quantity24=$_REQUEST["quantity24"]; 
$number24=$_REQUEST["number24"]; 
$item24=$_REQUEST["item24"]; 
$price24=$_REQUEST["price24"];
$quantity25=$_REQUEST["quantity25"]; 
$number25=$_REQUEST["number25"]; 
$item25=$_REQUEST["item25"]; 
$price25=$_REQUEST["price25"];
$quantity26=$_REQUEST["quantity26"]; 
$number26=$_REQUEST["number26"]; 
$item26=$_REQUEST["item26"]; 
$price26=$_REQUEST["price26"];
$quantity27=$_REQUEST["quantity27"]; 
$number27=$_REQUEST["number27"]; 
$item27=$_REQUEST["item27"]; 
$price27=$_REQUEST["price27"];
$quantity28=$_REQUEST["quantity28"]; 
$number28=$_REQUEST["number28"];
$item28=$_REQUEST["item28"]; 
$price28=$_REQUEST["price28"];
$quantity29=$_REQUEST["quantity29"]; 
$number29=$_REQUEST["number29"]; 
$item29=$_REQUEST["item29"]; 
$price29=$_REQUEST["price29"];
$quantity30=$_REQUEST["quantity30"]; 
$number30=$_REQUEST["number30"]; 
$item30=$_REQUEST["item30"]; 
$price30=$_REQUEST["price30"];

// generates cart id number 
$cart_id = date("ymjHis");

// required variables
require("config.php");

$message ="IP: $REMOTE_ADDR  Host: $REMOTE_HOST 

Credit Card - Order Number $cart_id

$email
$company
$name
$address 
$address2
$city
$state
$zip
$country
$phone

$comment

Total $txt_currency:  $total

Order: 
$quantity1 $number1 $item1 $price1
$quantity2 $number2 $item2 $price2
$quantity3 $number3 $item3 $price3
$quantity4 $number4 $item4 $price4
$quantity5 $number5 $item5 $price5
$quantity6 $number6 $item6 $price6
$quantity7 $number7 $item7 $price7
$quantity8 $number8 $item8 $price8
$quantity9 $number9 $item9 $price9
$quantity10 $number10 $item10 $price10
$quantity11 $number11 $item11 $price11
$quantity12 $number12 $item12 $price12
$quantity13 $number13 $item13 $price13
$quantity14 $number14 $item14 $price14
$quantity15 $number15 $item15 $price15
$quantity16 $number16 $item16 $price16
$quantity17 $number17 $item17 $price17
$quantity18 $number18 $item18 $price18
$quantity19 $number19 $item19 $price19
$quantity20 $number20 $item20 $price20
$quantity21 $number21 $item21 $price21
$quantity22 $number22 $item22 $price22
$quantity23 $number23 $item23 $price23
$quantity24 $number24 $item24 $price24
$quantity25 $number25 $item25 $price25
$quantity26 $number26 $item26 $price26
$quantity27 $number27 $item27 $price27
$quantity28 $number28 $item28 $price28
$quantity29 $number29 $item29 $price29
$quantity30 $number30 $item30 $price30

";   	

mail("$receipt,$email", "Re: Online Order", "$message", "From:$receipt"); 

?>

<html>

<head>

<title>Transfer Form</title>

<link rel="stylesheet" HREF="../E_Commerce/master_style.css">

</head>

<BODY TEXT="#000000" BGCOLOR="#FFFFFF" LINK="#660101" VLINK="#660101" ALINK="#F70404">

<script LANGUAGE="JavaScript">

	function resetShoppingBasket() {
		index = document.cookie.indexOf("TheBasket");
		document.cookie="TheBasket=.";
	}

</script>

<script language="JavaScript">

resetShoppingBasket()

top.center.frames[2].location = "../E_Commerce/middle_right.php";

</script>

<form method="Post" action="../E_Commerce/secure/order_secure.php" TARGET="blank">

<font size="2" face="Verdana, Arial, Helvetica, sans-serif">
<DIV align="center"><B><?php echo $txt_next_step?></B> - <?php echo $txt_credit_card_payment?></DIV><P>
</FONT>

<INPUT TYPE="hidden" NAME="amount" VALUE="<?php echo $total?>">
<INPUT TYPE="hidden" NAME="cart_id" VALUE="<?php echo $cart_id?>">
<INPUT TYPE="hidden" NAME="company" VALUE="<?php echo $company ?>">
<INPUT TYPE="hidden" NAME="name" VALUE="<?php echo $name ?>">
<INPUT TYPE="hidden" NAME="address" VALUE="<?php echo $address ?>">
<INPUT TYPE="hidden" NAME="address2" VALUE="<?php echo $address2 ?>">
<INPUT TYPE="hidden" NAME="city" VALUE="<?php echo $city ?>">
<INPUT TYPE="hidden" NAME="state" VALUE="<?php echo $state ?>">
<INPUT TYPE="hidden" NAME="zip" VALUE="<?php echo $zip ?>">
<INPUT TYPE="hidden" NAME="country" VALUE="<?php echo $country ?>">
<INPUT TYPE="hidden" NAME="phone" VALUE="<?php echo $phone ?>">

<DIV align="center"><INPUT TYPE=submit  NAME=Submit VALUE="<?php echo $txt_continue ?>" class="button"></DIV>
</FORM>
</body>
</html>