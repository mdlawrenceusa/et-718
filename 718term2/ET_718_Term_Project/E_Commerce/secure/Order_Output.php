<html>
<head>
<title>E-Commerce Data</title>
</head>

<body bgcolor="#FFFFFF" text="#000000">
<?php

$connect= mysql_connect("198.83.120.96","ET718Student","3c3tUser!") 
   or die("Could not connect to MySQL server in Internet !");

$selectdb=mysql_select_db("et718") 
   or die("Could not select Cust_Data database !");

$sqlquery = "SELECT * from Card_Payment";

$queryresult = mysql_query($sqlquery);

echo "<table width=700 border=1 align=center>";
echo " <tr>";
echo "  <td width=200> <center><b><h5>Posted</h5></b></center></td>\n";
echo "  <td width=200> <center><b><h5>Order_id</h5></b></center></td>\n";
echo "  <td width=200> <center><b><h5>Payment Method</h5></b></center></td>\n";
echo "  <td width=100> <center><b><h5>Credit Card</h5></b></center></td>\n";
echo "  <td width=100> <center><b><h5>Exp Date</h5></b></center></td>\n";
echo "  <td width=100> <center><b><h5>Amount</h5></b></center></td>\n";
echo "  </tr>\n";

while ($row=mysql_fetch_array($queryresult)) 
{
  echo "  <tr>\n";
  echo "    <td><h5>".$row["posted"]."</h5></td>\n";
  echo "    <td><h5>".$row["order_id"]."</h5></td>\n";
  echo "    <td><h5>".$row["PaymentMethod"]."</h5></td>\n";
  echo "    <td><h5>".$row["CreditCard"]."</h5></td>\n";
  echo "    <td><h5>".$row["ExpDate"]."</h5></td>\n";
  echo "    <td><h5>".$row["Amount"]."</h5></td>\n";
  echo "  </tr>\n";
}
echo "</table>\n";
?>
</body>
</html>
