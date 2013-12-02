<?php
$connect= mysql_connect("198.83.120.96","ET718Student","3c3tUser!") 
   or die("Could not connect to MySQL server in Internet !");

$selectdb=mysql_select_db("et718") 
   or die("Could not select Cust_Data database !");

$sqlquery = "SELECT * from Cust_Data";

$queryresult = mysql_query($sqlquery);

$sqlquery = "create table if not exists Cust_Data(
email varchar(50) Not Null default 'blank', 
company varchar(50) Not Null default 'blank',
name varchar(50) Not Null default 'blank', 
address varchar(50) Not Null default 'blank',
address2 varchar(50) Not Null default 'blank', 
city varchar(50) Not Null default 'blank',
state varchar(50) Not Null default 'blank', 
zip varchar(50) Not Null default 'blank',
country varchar(50) Not Null default 'blank', 
phone varchar(50) Not Null default 'blank',
Primary Key (email))";
$queryresult = mysql_query($sqlquery) or die(" Query could not be executed.");
echo "Table Cust_Data succesfully created in the selected database.";
echo "<br></br>";
echo "<h1> The data from your transaction </h1>";

$sqlquery= "INSERT INTO Cust_Data VALUES(
'".$_GET ['email']."',
'".$_GET ['company']."',
'".$_GET ['name']."',
'".$_GET ['address']."',
'".$_GET ['address2']."',
'".$_GET ['city']."',
'".$_GET ['state']."',
'".$_GET ['zip']."',
'".$_GET ['country']."',
'".$_GET ['phone']."')";
$queryresult= mysql_query($sqlquery) or die(" Could not execute mysql query!");

print "<b>Email: </b>";
print "<c>".$_GET ['email']."</c><br>";
print "<b>Compamy: </b>";
print "<c>".$_GET ['company']."</c><br>";
print "<b>Name: </b>";
print "<c>".$_GET ['name']."</c><br>";
print "<b>Address: </b>";
print "<c>".$_GET ['address']."</c><br>";
print "<b>Address2: </b>";
print "<c>".$_GET ['address2']."</c><br>";
print "<b>City: </b>";
print "<c>".$_GET ['city']."</c><br>";
print "<b>State: </b>";
print "<c>".$_GET ['state']."</c><br>";
print "<b>Zip: </b>";
print "<c>".$_GET ['zip']."</c><br>";
print "<b>Country: </b>";
print "<c>".$_GET ['country']."</c><br>";
print "<b>Phone: </b>";
print "<c>".$_GET ['phone']."</c><br>";

// generates cart id number 
$cart_id = date("ymjHis");

// required variables
require("config.php");

$message ="IP: $REMOTE_ADDR  Host: $REMOTE_HOST 


";   	

mail("$receipt,$email", "Re: Online Order", "$message", "From:$receipt"); 

?>

<html>

<head>

<title>Order Form output</title>

<link rel="stylesheet" HREF="../E_Commerce/master_style.css">

<style type="text/css">
.auto-style2 {
	font-family: Arial, Helvetica, sans-serif;
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

top.center.frames[2].location = "../E_Commerce/middle_right.php";

</script>

<h1></h1>
<font size="5" face="Verdana, Arial, Helvetica, sans-serif">
<B>Your transaction is completed.</B></FONT><P>
<font size="2" face="Verdana, Arial, Helvetica, sans-serif">
</FONT>
<h2><a href="../scripts/Order_Output.php"><span class="auto-style2"><font size="2">
E-Commerce Data output</font></span></a></h2>
</body>
</html>