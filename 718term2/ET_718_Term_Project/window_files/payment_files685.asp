<!-- #INCLUDE FILE="settings.asp" -->

<%
Function RandNo()
Randomize
RandNo = Int(99999999 * Rnd + 3)
End Function
%>

<%
'Dimension variables 
Dim objCDOSYSCon 

'Create the e-mail server object 
Set objCDOSYSMail = Server.CreateObject("CDO.Message") 
Set objCDOSYSCon = Server.CreateObject ("CDO.Configuration") 

'Out going SMTP server 
objCDOSYSCon.Fields("http://schemas.microsoft.com/cdo/configuration/smtpserver") = smtp_server

objCDOSYSCon.Fields("http://schemas.microsoft.com/cdo/configuration/smtpserverport") = 25 

objCDOSYSCon.Fields("http://schemas.microsoft.com/cdo/configuration/sendusing") = 2 

objCDOSYSCon.Fields("http://schemas.microsoft.com/cdo/configuration/smtpconnectiontimeout") = 60

objCDOSYSCon.Fields.Update 

'Update the CDOSYS Configuration 
Set objCDOSYSMail.Configuration = objCDOSYSCon


objCDOSYSMail.From = Request.form("email") 
objCDOSYSMail.To = Request.form("email") 
objCDOSYSMail.CC = "" & receipt & ""
objCDOSYSMail.Subject = "Re: Online Order" 

objCDOSYSMail.TEXTBody = "Credit Card Payment - Order Number = "&RandNo()& vbcrlf & vbcrlf&_ 
	Request.form("email")& vbcrlf&_
	Request.form("company")& vbcrlf&_ 
	Request.form("name")& vbcrlf&_ 
	Request.form("address")& vbcrlf&_ 
	Request.form("address2")& vbcrlf&_ 
	Request.form("city")& vbcrlf&_ 
	Request.form("state")& vbcrlf&_ 
	Request.form("zip")& vbcrlf&_ 
	Request.form("country")& vbcrlf&_ 
	Request.form("phone")& vbcrlf & vbcrlf&_ 
	Request.form("comment")& vbcrlf & vbcrlf&_
	"Total " & txt_currency & " " & Request.form("total") & vbcrlf & vbcrlf&_
	"Order" & vbcrlf&_ 
	Request.form("quantity1") & Request.form("number1") & Request.form("item1") & Request.form("option1")& Request.form("price1")& vbcrlf&_
	Request.form("quantity2") & Request.form("number2") & Request.form("item2") & Request.form("option2")& Request.form("price2")& vbcrlf&_
	Request.form("quantity3") & Request.form("number3") & Request.form("item3") & Request.form("option3")& Request.form("price3")& vbcrlf&_
	Request.form("quantity4") & Request.form("number4") & Request.form("item4") & Request.form("option4")& Request.form("price4")& vbcrlf&_
	Request.form("quantity5") & Request.form("number5") & Request.form("item5") & Request.form("option5")& Request.form("price5")& vbcrlf&_
	Request.form("quantity6") & Request.form("number6") & Request.form("item6") & Request.form("option6")& Request.form("price6")& vbcrlf&_
	Request.form("quantity7") & Request.form("number7") & Request.form("item7") & Request.form("option7")& Request.form("price7")& vbcrlf&_
	Request.form("quantity8") & Request.form("number8") & Request.form("item8") & Request.form("option8")& Request.form("price8")& vbcrlf&_	
	Request.form("quantity9") & Request.form("number9") & Request.form("item9") & Request.form("option9")& Request.form("price9")& vbcrlf&_
	Request.form("quantity10") & Request.form("number10") & Request.form("item10") & Request.form("option10")& Request.form("price10")& vbcrlf&_
	Request.form("quantity11") & Request.form("number11") & Request.form("item11") & Request.form("option11")& Request.form("price11")& vbcrlf&_
	Request.form("quantity12") & Request.form("number12") & Request.form("item12") & Request.form("option12")& Request.form("price12")& vbcrlf&_
	Request.form("quantity13") & Request.form("number13") & Request.form("item13") & Request.form("option13")& Request.form("price13")& vbcrlf&_
	Request.form("quantity14") & Request.form("number14") & Request.form("item14") & Request.form("option14")& Request.form("price14")& vbcrlf&_
	Request.form("quantity15") & Request.form("number15") & Request.form("item15") & Request.form("option15")& Request.form("price15")& vbcrlf&_
	Request.form("quantity16") & Request.form("number16") & Request.form("item16") & Request.form("option16")& Request.form("price16")& vbcrlf&_
	Request.form("quantity17") & Request.form("number17") & Request.form("item17") & Request.form("option17")& Request.form("price17")& vbcrlf&_
	Request.form("quantity18") & Request.form("number18") & Request.form("item18") & Request.form("option18")&Request.form("price18")& vbcrlf&_
	Request.form("quantity19") & Request.form("number19") & Request.form("item19") & Request.form("option19")& Request.form("price19")& vbcrlf&_
	Request.form("quantity20") & Request.form("number20") & Request.form("item20") & Request.form("option20")& Request.form("price20")& vbcrlf&_
	Request.form("quantity21") & Request.form("number21") & Request.form("item21") & Request.form("option21")& Request.form("price21")& vbcrlf&_
	Request.form("quantity22") & Request.form("number22") & Request.form("item22") & Request.form("option22")& Request.form("price22")& vbcrlf&_
	Request.form("quantity23") & Request.form("number23") & Request.form("item23") & Request.form("option23")& Request.form("price23")& vbcrlf&_
	Request.form("quantity24") & Request.form("number24") & Request.form("item24") & Request.form("option24")& Request.form("price24")& vbcrlf&_
	Request.form("quantity25") & Request.form("number25") & Request.form("item25") & Request.form("option25")& Request.form("price25")& vbcrlf&_
	Request.form("quantity26") & Request.form("number26") & Request.form("item26") & Request.form("option26")& Request.form("price26")& vbcrlf&_
	Request.form("quantity27") & Request.form("number27") & Request.form("item27") & Request.form("option27")& Request.form("price27")& vbcrlf&_
	Request.form("quantity28") & Request.form("number28") & Request.form("item28") & Request.form("option28")& Request.form("price28")& vbcrlf&_
	Request.form("quantity29") & Request.form("number29") & Request.form("item29") & Request.form("option29")& Request.form("price29")& vbcrlf&_
	Request.form("quantity30") & Request.form("number30") & Request.form("item30") & Request.form("option30")& Request.form("price30")& vbcrlf

objCDOSYSMail.Send 

'Close the server mail object 
Set objCDOSYSMail = Nothing 
Set objCDOSYSCon = Nothing 

%>

<html>

<head>

<title>Order Form</title>

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

<script LANGUAGE="JavaScript">

	function resetShoppingBasket() {
		index = document.cookie.indexOf("TheBasket");
		document.cookie="TheBasket=.";
	}

</script>

<script language="JavaScript">

resetShoppingBasket()

top.center.frames[2].location = "middle_right.php";

</script>

<DIV align="center">
<font size="2" face="Verdana, Arial, Helvetica, sans-serif">
<B>Next step</B> - Credit Card Payment Service</FONT><P>


<IMG SRC="images/authorizenet.gif" WIDTH="117" HEIGHT="32" ALT="Authorize.net"></DIV>

<FORM METHOD=POST ACTION="https://secure.authorize.net/gateway/transact.dll" TARGET="blank">
<INPUT TYPE=HIDDEN NAME="x_Version" VALUE="3.0">
<INPUT TYPE=HIDDEN NAME="x_Login" VALUE="your login ID goes here">
<INPUT TYPE=HIDDEN NAME="x_Show_Form" VALUE="PAYMENT_FORM">
<INPUT TYPE=HIDDEN NAME="x_Amount" VALUE="<% = Request.form("total") %>">
<INPUT TYPE=HIDDEN NAME="x_Cust_ID" VALUE="<% = Request.form("order_id") %>">
<INPUT TYPE=HIDDEN NAME="x_Description" VALUE="Payment for Order Number <% = Request.form("order_id") %>">
<INPUT TYPE=HIDDEN NAME="x_Invoice_Num" VALUE="<% = Request.form("order_id") %>">

<DIV align="center"><INPUT TYPE=submit  NAME=Submit VALUE="<%=txt_continue%>" class="button"></DIV>

</FORM>
</body>
</html>