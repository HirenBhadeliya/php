<?php 
// function 
function functionName(){
	echo "this is function <br>";
}

functionName();
echo "Hiren Bhadeliya <br>";
functionName();
functionName();
functionName();

// function with parameters

echo "<br>";

function sum($one="1", $two="1"){
	echo $one + $two . "<br>";	
}

function minus($a, $b){
	echo $a - $b;
}

sum(10,20);
sum(50,20);
sum(20,50);
sum();
sum(4);

minus(20,10);
echo "<br>";

echo "<br>";
// function return value

function sums($eng, $guj, $math){
	$s = $eng + $guj + $math;
	return $s;
}
echo "<br>";

function percentage($st){
	$a = $st / 3;
	return $a;
}


$total = sums(45,80,87);

echo $total;

$per = percentage($total);


echo "<br>";
echo "<br>";
echo $per . "%";

echo "<br>";
echo "<br>";

function argumentValue(&$h){
$h = "hey";
}

$str = "hello";

argumentValue($str);

echo $str;

function first($num){
$num += 5;
}

function second(&$num){
$num += 5;
}
$number = 10;
first($number);
echo "<h2> the origanal vlaue is $number </h2>";
second($number);
echo "<h2> the origanal vlaue is $number </h2>";