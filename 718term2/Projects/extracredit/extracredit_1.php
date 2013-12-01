<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Winning Numbers</title>
</head>

<body>
<?php
$PossibleNumbers = array() ;
for ($i=1; $i<100; ++$i){
$PossibleNumbers[] = $i;}

shuffle($PossibleNumbers);


$WinningNumbers = array_slice($PossibleNumbers, 0, 6) ;

foreach ($WinningNumbers as $Number){
echo "$Number<br />";
}
?>


</body>

</html>
