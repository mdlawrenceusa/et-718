<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="en-us" http-equiv="Content-Language" />
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Project 3</title>
</head>

<body>
<?php
$rol = rand(1,6);
$binRol = decbin($rol);

print "<h1>Binary Dice</h1>" ;
echo "<h5>Demonstrates multiple if structure</h5>" ;
echo "<h2>You rolled a $rol.</h2>" ;


echo "<p><img src=http://mdlqcc.s3.amazonaws.com/FallSemester2013/ET-718/ET-718/Kueper/Images/die$rol.jpg />";





echo "&nbsp;<br /> ";
echo "In binary, that&#39;s $binRol</p>";
echo "<p>Refresh this page to roll another die.</p>";

?>

</body>

</html>
