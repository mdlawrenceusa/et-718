<?php

// required variables
require("../config.php");

$maingroup=$_REQUEST["maingroup"]; 
$secondgroup=$_REQUEST["secondgroup"]; 
$code_no=$_REQUEST["code_no"]; 
$codeno=$_REQUEST["codeno"]; 
$item=$_REQUEST["item"]; 
$text=$_REQUEST["text"]; 
$price=$_REQUEST["price"]; 
$old_image=$_REQUEST["old_image"]; 
$shipping=$_REQUEST["shipping"]; 

 ?>


<html>

<head>

<title>Update</title>

<link rel="stylesheet" HREF="../master_style.css">

</HEAD>

<BODY TEXT="#000000" BGCOLOR="#FFFFFF" LINK="#000000" VLINK="#000000" ALINK="#F70404">

<?php 

// In PHP earlier then 4.1.0, $HTTP_POST_FILES  should be used instead of $_FILES. 

$realname = $_FILES['userfile']['name'];

if( $realname >"0") {

// In PHP earlier then 4.1.0, $HTTP_POST_FILES  should be used instead of $_FILES. 
if (is_uploaded_file($_FILES['userfile']['tmp_name'])) { 
   copy($_FILES['userfile']['tmp_name'], "$upload_path".$realname); 
} else { 
   echo "Possible file upload attack. Filename: " . $_FILES['userfile']['name']; 
} 
}

?>


<?php

if( $realname >"0") {
		$new_image=$realname;
}

if( $realname <"0") {
		$new_image=$old_image;
}



// database connection
mysql_connect("$host","$user","$pass");

// database selection
mysql_select_db("$database");

mysql_query("update mlawrence_products set maingroup = '$maingroup' where (code_no = '$code_no')");
mysql_query("update mlawrence_products set secondgroup = '$secondgroup' where (code_no = '$code_no')");
mysql_query("update mlawrence_products set item = '$item' where (code_no = '$code_no')");
mysql_query("update mlawrence_products set text = '$text' where (code_no = '$code_no')");
mysql_query("update mlawrence_products set image = '$new_image' where (code_no = '$code_no')");
mysql_query("update mlawrence_products set price = '$price' where (code_no = '$code_no')");
mysql_query("update mlawrence_products set shipping = '$shipping' where (code_no = '$code_no')");
mysql_query("update mlawrence_products set code_no = '$codeno' where (code_no = '$code_no')");


echo "<CENTER><font size=\"2\" face=\"Verdana, Arial, Helvetica, sans-serif\"><B> # $code_no $txt_updated</B></FONT><P>
<font size=\"1\" face=\"Verdana, Arial, Helvetica, sans-serif\"><IMG SRC=\"../images/arrow.gif\" WIDTH=\"8\" HEIGHT=\"7\" ALT=\"\"><B><A HREF=\"javascript:history.go(-2)\">$txt_backwards</A></B></font>
</CENTER>";



?>


</BODY>

</HTML>