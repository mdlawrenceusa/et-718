<?php
$connect= mysql_connect("198.83.120.96","ET718Student","3c3tUser!") 
   or die("Could not connect to MySQL server in Internet !");

$selectdb=mysql_select_db("et718") 
   or die("Could not select mlawrence_meet_1 database !");

$sqlquery = "SELECT * from mlawrence_meet_1";

$queryresult = mysql_query($sqlquery);

$sqlquery = "create table if not exists mlawrence_meet_1(
  Name varchar(50) NOT NULL DEFAULT 'blank',
  Tues_10_11 varchar(5) NOT NULL DEFAULT 'blank',
  Tues_1_2 varchar(5) NOT NULL DEFAULT 'blank',
  Wed_10_11 varchar(5) NOT NULL DEFAULT 'blank',
  Wed_1_2 varchar(5) NOT NULL DEFAULT 'blank',
  Thur_10_11 varchar(5) NOT NULL DEFAULT 'blank',
  Thur_1_2 varchar(5) NOT NULL DEFAULT 'blank',
  Primary KEY (Name))";
  
$queryresult = mysql_query($sqlquery) or die(" Query could not be executed.");
echo "Table mlawrence_meet_1 succesfully created in the selected database.";
echo "<br></br>";
echo "<h1> The data from your transaction </h1>";

$sqlquery= "INSERT INTO mlawrence_meet_1 VALUES(
'".$_GET ['Name']."',
'".$_GET ['Tues_10_11']."',
'".$_GET ['Tues_1_2']."',
'".$_GET ['Wed_10_11']."',
'".$_GET ['Wed_1_2']."',
'".$_GET ['Thur_10_11']."',
'".$_GET ['Thur_1_2']."')";
$queryresult= mysql_query($sqlquery) or die(" Could not execute mysql query!");

print "<b>Name : </b>";
print "<c>".$_GET ['Name']."</c><br>";
print "<b>Tues_10_11: </b>";
print "<c>".$_GET ['Tues_10_11']."</c><br>";
print "<b>Tues_1_2: </b>";
print "<c>".$_GET ['Tues_1_2']."</c><br>";
print "<b>Wed_10_11: </b>";
print "<c>".$_GET ['Wed_10_11']."</c><br>";
print "<b>Wed_1_2: </b>";
print "<c>".$_GET ['Wed_1_2']."</c><br>";
print "<b>Thur_10_11: </b>";
print "<c>".$_GET ['Thur_10_11']."</c><br>";
print "<b>Thur_1_2: </b>";
print "<c>".$_GET ['Thur_1_2']."</c><br>";

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
<h2><a href="../scripts/meetingForm_Output.php"><span class="auto-style2"><font size="2">
E-Commerce Data output</font></span></a></h2>
</body>
</html>