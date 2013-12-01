<?php
$connect= mysql_connect("198.83.120.96","ET718Student","3c3tUser!") 
   or die("Could not connect to MySQL server in Internet !");

$selectdb=mysql_select_db("et718") 
   or die("Could not select Cust_Data database !");

$sqlquery = "SELECT * from project8";

$queryresult = mysql_query($sqlquery);

$sqlquery = "create table if not exists project8(
First varchar(50) Not Null default 'blank', 
email varchar(50) Not Null default 'blank', 
Primary Key (email))";

$queryresult = mysql_query($sqlquery) or die(" Query could not be executed.");
echo "Table Cust_Data succesfully created in the selected database.";
echo "<br></br>"; 
echo "<h1> The data from your transaction </h1>";

$sqlquery= "INSERT INTO project8 VALUES(
'".$_GET ['First']."',
'".$_GET ['email']."')";
$queryresult= mysql_query($sqlquery) or die("Error Loading Data. Please confirm that e-mail address is not already on file."); 

print "<b>Email: </b>";
print "<c>".$_GET ['email']."</c><br>";
print "<b>First Name: </b>";
print "<c>".$_GET ['First']."</c><br>";

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