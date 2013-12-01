<?php
require("config.php");

// database connection
mysql_connect("$host","$user","$pass");

// database selection
mysql_select_db("$database") or die( "Unable to select database");

$query1=("CREATE TABLE products (
maingroup varchar(50),
secondgroup varchar(50),
code_no varchar(30) NOT NULL,
item varchar(100),
text text,
price varchar(20),
image varchar(30),
shipping varchar(20),
PRIMARY KEY (code_no))");


$query2=("CREATE TABLE card_payment (
posted text NOT NULL,
order_id varchar(25) NOT NULL,
PaymentMethod text NOT NULL,
CreditCard text NOT NULL,
ExpDate text NOT NULL,
AMOUNT text NOT NULL,
PRIMARY KEY (order_id),
UNIQUE order_id (order_id))");

mysql_query($query1);
mysql_query($query2);

mysql_close();

print("<B>You have successfully created the tables for MidiCart PHP</B><BR>Please remove the file setup.php from your website<P><B><A HREF=\"admin/index.php\">Administrator Back End</A></B>");

?> 

