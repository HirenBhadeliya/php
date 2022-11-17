   < style> h4 {font-size: 22px; font-weight: bold; text-decoration: underline;} h5 {font-weight: bold; font-size: 19px;}</style>
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

    echo "<h4>Increment / Decrement Operators</h4>";

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

    echo "<h4>Assignment Operators</h4>";

    $x = 10;
    $x += 2;
    $x -= 2;
    $x *= 2;
    $x /= 20;
$x %= 2; // demo  x = x % y;

echo  $x;

echo "<h4>Comparison Operators</h4>";

$a = 10;
$b = 10;
echo "<h5>== Equal to ";
echo $a == $b;
echo "</h5>";

$a = 10;
$b = "10";
echo "<h5>=== Equal to and type Equal ";
echo $a === $b;
echo "</h5>";

$a = 10;
$b = "10";
echo "<h5>!= not Equal to ";
echo $a != $b;
echo "</h5>";

$a = 10;
$b = "10";
echo "<h5>!== not Equal to and not type Equal ";
echo $a !== $b;
echo "</h5>";

$a = 10;
$b = 4;
echo "<h5><> not Equal to";
echo $a <> $b;
echo "</h5>";

$a = 3;
$b = 10;
echo "<h5>< less than return true if a less than b ";
echo $a < $b;
echo "</h5>";

$a = 10;
$b = 9;
echo "<h5>> greater than return true if a greater than b ";
echo $a > $b;
echo "</h5>";


$a = 10;
$b = 10;
echo "<h5><= Less than or equal to  ";
echo $a <= $b;
echo "</h5>";



$a = 3;
$b = 10;
echo "<h5>>= Less than or equal to  ";
echo $a >= $b;
echo "</h5>";

echo "<h4>Logical Operators</h4>";

// && --- True if both $x and $y are true
// || --- True if either $x or $y is true  
// and ---  True if both $x and $y are true
// or --- True if either $x or $y is true   
// ! --- not !$x True if $x is not true
// xor ---  True if either $x or $y is true, but not both

// &&, and == all condition true
// ||, or == anyone ya all condition true 
// ! == not true 
// xor == $x greater $y true but not both true and false any one true 

$age = 20;
if ($age >= 10 and $age <= 21) {
    echo "<h3>True</h3>";
}else{
    echo "<h3>false</h3>";
}

if ($age >= 10 or $age <= 18) {
    echo "<h3>True</h3>";
}else{
    echo "<h3>false</h3>";
}


if (!($age == 20)) {
    echo "<h3>True</h3>";
}else{
    echo "<h3>false</h3>";
}
if ($age >= 32 xor $age <= 18) {
    echo "<h3>True</h3>";
}else{
    echo "<h3>false</h3>";
}