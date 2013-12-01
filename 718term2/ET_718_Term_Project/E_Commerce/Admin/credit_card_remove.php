<?php
// required variables
require("../config.php");

$order_id=$_REQUEST["order_id"]; 

 ?>

<html>

<head>

<title>Remove</title>

<link rel="stylesheet" HREF="../master_style.css">

<meta http-equiv="refresh" content="1;url=credit_card_info.php">
<META HTTP-EQUIV="pragma" CONTENT="no-cache">

</HEAD>

<BODY TEXT="#000000" BGCOLOR="#FFFFFF" LINK="#000000" VLINK="#000000" ALINK="#F70404">

<? 
// database connection
mysql_connect("$host","$user","$pass");

// database selection
mysql_select_db("$database");

// database query to delete selected product
    $query = "delete from card_payment  where order_id = '$order_id'";
    $result = mysql_db_query("$database", $query); 

if ($result) { 
echo "<CENTER><font size=\"2\" face=\"Verdana, Arial, Helvetica, sans-serif\"><B># $order_id $txt_removed</B></FONT><BR>
<font size=\"1\" face=\"Verdana, Arial, Helvetica, sans-serif\">
<B><A HREF=\"credit_card_info.php\">< $txt_backwards</A></B></font>
</CENTER>";
} 

?> 

</BODY>

</HTML>
