<?php
define("br", "<br>", true);

$x = 10;
$y = 10;

function globalFunctionUse($g){
	global $x, $y, $h;
	echo $z = $x + $y + $g;
	$h = 55555;
}

globalFunctionUse(5);
echo "<br>";
echo $h;

function  secondTwo(){
	global $name;
	$name = "<h1>hiren</h1>";
}

echo br;
secondTwo();
echo $name;

?>
