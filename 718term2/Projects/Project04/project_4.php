<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="en-us" http-equiv="Content-Language" />
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<?php
$countries=array("Somalia","Sudan","Mauritania", "Pakistan", "India"); 
$binaryNumbers=array("000","001","010", "110"); 
?>
<title>Project 4</title>
</head>

<body>

<h1>Basic Array</h1>
<h2>Top Camel Polulations in the World</h2>
<?php 
for ($x=0; $x<sizeof($countries); $x++)
  {
  $y = $x + 1;
  echo "$y. $countries[$x] <br>";
  } 
?>
<p>Source:&nbsp; Food and Agriculture Organization of the United States</p>
<h2>Binary Numbers</h2>
<?php 
for ($x=0; $x<sizeof($binaryNumbers); $x++)
  {
  echo "$x. $binaryNumbers[$x] <br>";
  } 
?>

</body>

</html>
