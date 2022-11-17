<?php 
define("br", "<br>", true);

// PHP Data type

// - string
// - int
// - float
// - boolean
// - array
// - object
// - Null

$string = "this is string - Hello World";
$int = "this is integer value 123456";
$float = "this is Float value 1.5";
$boolean = "boolean value is true and false";
$array = array("this is array","");
$null = Null;
$unset = "unset function use for variable value emty and than echo variable value is null";

echo "<h3>The PHP var_dump() function returns the data type and value: </h3>";
echo br;
echo var_dump($string);
echo br;
echo var_dump($int);
echo br;
echo var_dump($float);
echo br;
echo var_dump($boolean);
echo br;
echo var_dump($array);
echo br;
echo var_dump($null);
echo br;
// unset($unset);
echo var_dump($unset);

 ?>