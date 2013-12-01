<?php
// required variables
require("../config.php");

$code_no=$_REQUEST["code_no"]; 

 ?>

<html>

<head>

<title>Remove</title>

<link rel="stylesheet" HREF="../master_style.css">

</HEAD>

<BODY TEXT="#000000" BGCOLOR="#FFFFFF" LINK="#000000" VLINK="#000000" ALINK="#F70404">

<?php 
// database connection
mysql_connect("$host","$user","$pass");

// database selection
mysql_select_db("$database");

// database query to delete selected product
    $query = "delete from mlawrence_products where code_no = '$code_no'";
    $result = mysql_db_query("$database", $query); 

if ($result) { 
echo "<CENTER><font size=\"2\" face=\"Verdana, Arial, Helvetica, sans-serif\"><B># $code_no $txt_removed</B></FONT><P>
<font size=\"1\" face=\"Verdana, Arial, Helvetica, sans-serif\"><IMG SRC=\"../images/arrow.gif\" WIDTH=\"8\" HEIGHT=\"7\" ALT=\"\"><B><A HREF=\"javascript:history.go(-2)\">$txt_backwards</A></B></font>
</CENTER>";
} 

?> 

</BODY>

</HTML>
