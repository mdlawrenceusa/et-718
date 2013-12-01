<?php

// required variables
require("../config.php");

$maingroup=$_REQUEST["maingroup"]; 
$secondgroup=$_REQUEST["secondgroup"]; 
$code_no=$_REQUEST["code_no"]; 
$item=$_REQUEST["item"]; 
$text=$_REQUEST["text"]; 
$price=$_REQUEST["price"]; 
$shipping=$_REQUEST["shipping"]; 

 ?>

<html>

<head>

<title>Add Insert</title>

<link rel="stylesheet" HREF="../master_style.css">

</HEAD>

<BODY TEXT="#000000" BGCOLOR="#FFFFFF" LINK="#000000" VLINK="#000000" ALINK="#F70404">


<?php 

// In PHP earlier then 4.1.0, $HTTP_POST_FILES  should be used instead of $_FILES. 

$realname = $_FILES['userfile']['name'];

// In PHP earlier then 4.1.0, $HTTP_POST_FILES  should be used instead of $_FILES. 
if (is_uploaded_file($_FILES['userfile']['tmp_name'])) { 
   copy($_FILES['userfile']['tmp_name'], "$upload_path".$realname); 
} else { 
   echo "Possible file upload attack. Filename: " . $_FILES['userfile']['name']; 
} 

?>


<?php

// database connection
mysql_connect("$host","$user","$pass");

// database selection
mysql_select_db("$database");

mysql_query("insert into mlawrence_products values('$maingroup','$secondgroup','$code_no','$item','$text','$price','$realname','$shipping')");

?>

<CENTER>
<font size="2" face="Verdana, Arial, Helvetica, sans-serif">
<B># <?php echo $code_no ?> <?php echo $txt_added_to_database ?></B></FONT><P>
<font size="1" face="Verdana, Arial, Helvetica, sans-serif"><IMG SRC="../images/arrow.gif" WIDTH="8" HEIGHT="7" ALT=""><B><A HREF="javascript:history.go(-1)"><?php echo $txt_backwards ?></A></B></font>
</CENTER>

</BODY>
</HTML>