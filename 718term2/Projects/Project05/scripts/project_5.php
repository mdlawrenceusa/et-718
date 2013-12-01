<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="en-us" http-equiv="Content-Language" />
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>CheckGrade</title>
</head>

<body>


<h1>Grade Checker</h1>

<?php

$theGrade = strtoupper($_GET["grade"]) ;

checkGrade($theGrade);

function checkGrade($Grade){

	switch ($Grade)
	{
		case "A":
			echo "Your grade, $Grade, is excellent." ;
			break;
		case "B":
			echo "Your grade, $Grade, is good." ;
			break;
		case "C":
			echo "Your grade, $Grade, is fair." ;
			break;
		case "D":
			echo "Your grade, $Grade, is barely passing." ;
			break;
		case "F":
			echo "Any one with a grade of $Grade should Consider Withdrawing from the course" ;
			break;
		default :
		echo "Please enter a letter grade ... (A,B,C,D or F)";
		break;
	}
}
?>








</body>

</html>
