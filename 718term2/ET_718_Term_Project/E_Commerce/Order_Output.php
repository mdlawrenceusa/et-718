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

$sqlquery = "SELECT * from Cust_Data";

$queryresult = mysql_query($sqlquery);

echo "<table width=700 border=1 align=center>";
echo " <tr>";
echo "  <td width=200> <center><b><h5>Email</h5></b></center></td>\n";
echo "  <td width=200> <center><b><h5>Company</h5></b></center></td>\n";
echo "  <td width=200> <center><b><h5>Name</h5></b></center></td>\n";
echo "  <td width=100> <center><b><h5>Address</h5></b></center></td>\n";
echo "  <td width=100> <center><b><h5>Address2</h5></b></center></td>\n";
echo "  <td width=100> <center><b><h5>City</h5></b></center></td>\n";
echo "  <td width=100> <center><b><h5>State</h5></b></center></td>\n";
echo "  <td width=100> <center><b><h5>Zip</h5></b></center></td>\n";
echo "  <td width=100> <center><b><h5>Country</h5></b></center></td>\n";
echo "  <td width=100> <center><b><h5>Phone</h5></b></center></td>\n";
echo "  </tr>\n";

while ($row=mysql_fetch_array($queryresult)) 
{
  echo "  <tr>\n";
  echo "    <td><h5>".$row["email"]."</h5></td>\n";
  echo "    <td><h5>".$row["company"]."</h5></td>\n";
  echo "    <td><h5>".$row["name"]."</h5></td>\n";
  echo "    <td><h5>".$row["address"]."</h5></td>\n";
  echo "    <td><h5>".$row["address2"]."</h5></td>\n";
  echo "    <td><h5>".$row["city"]."</h5></td>\n";
  echo "    <td><h5>".$row["state"]."</h5></td>\n";
  echo "    <td><h5>".$row["zip"]."</h5></td>\n";
  echo "    <td><h5>".$row["country"]."</h5></td>\n";
  echo "    <td><h5>".$row["phone"]."</h5></td>\n";
  echo "  </tr>\n";
}
echo "</table>\n";
?>
</body>
</html>
