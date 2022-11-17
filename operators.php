<style> h4 {font-size: 22px; font-weight: bold; text-decoration: underline;}</style>
<?php 
define("br", "<br>", true);

// php operators
// 1. arithmetic operators
// 2. assignment operators
// 3. comparison operators
// 4. increment / decrement operators
// 5. logical operators


// 1. arithmetic operators

// [+, -, /, *, **, %]
echo "<h4>Arithmetic Operators</h4>";
$a = 10;
$b = 5;

$c = ($a + $b + $a) * ($a + $b);
$c = $a + $b * $c;
echo $c;

// %   Remainder of $x divided by $y

$a = 77;
$b = 3;


echo br;
echo $a % $b;

echo "<h4>Assignment Operators</h4>";

$a = 10;
echo "10 : ";
echo $a++;
echo $a++;
echo $a++;
echo br;
$a = 10;
echo "10 : ";
echo $a--;
echo $a--;
echo $a--;
echo $a--;
echo br;
$a = 10;
echo "10 : ";
echo ++$a;
echo ++$a;
echo ++$a;
echo ++$a;
echo br;
$a = 10;
echo "10 : ";
echo --$a;
echo --$a;
echo --$a;
echo --$a;


 ?>