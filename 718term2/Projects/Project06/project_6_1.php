<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="en-us" http-equiv="Content-Language" />
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Creating &amp; Accessing Classes</title>
</head>

<body>

<h3>The Following Output is from the CLASS example at<a href="http://php.net/manual/en/classobj.examples.php" target="_blank"> http://php.net/manual/en/classobj.examples.php</a></h3>

<pre>
<?php

include "classes.inc";

// utility functions

function print_vars($obj) 
{
foreach (get_object_vars($obj) as $prop => $val) {
    echo "\t$prop = $val\n";
}
}

function print_methods($obj) 
{
$arr = get_class_methods(get_class($obj));
foreach ($arr as $method) {
    echo "\tfunction $method()\n";
}
}

function class_parentage($obj, $class) 
{
if (is_subclass_of($GLOBALS[$obj], $class)) {
    echo "Object $obj belongs to class " . get_class($$obj);
    echo " a subclass of $class\n";
} else {
    echo "Object $obj does not belong to a subclass of $class\n";
}
}

// instantiate 2 objects

$veggie = new Vegetable(true, "blue");
$leafy = new Spinach();

// print out information about objects
echo "veggie: CLASS " . get_class($veggie) . "\n";
echo "leafy: CLASS " . get_class($leafy);
echo ", PARENT " . get_parent_class($leafy) . "\n";

// show veggie properties
echo "\nveggie: Properties\n";
print_vars($veggie);

// and leafy methods
echo "\nleafy: Methods\n";
print_methods($leafy);

echo "\nParentage:\n";
class_parentage("leafy", "Spinach");
class_parentage("leafy", "Vegetable");
?>
</pre>
</body>

</html>
