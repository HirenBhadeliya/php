<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<?php
define("br", "<br>", true);
// sort() - sort arrays in ascending order
// rsort() - sort arrays in descending order
// asort() - sort associative arrays in ascending order, according to the value
// arsort() - sort associative arrays in descending order, according to the value
// ksort() - sort associative arrays in ascending order, according to the key
// krsort() - sort associative arrays in descending order, according to the key
// $names = array("hiren", "mayank", "ashish", "bhadeliya");

$names = array("Hiren", "Aashish", "Mayank", "Bhadeliya", "dev");
function name_arrays($sorting){
	global $names;
	$sorting($names);
	echo "<pre>";
	print_r($names);
	echo "</pre>";
	echo br;
	echo "<ol>";
	foreach ($names as $key => $value) {
		echo "<li>$value</li>";
	}
	echo "</ol>";
}

echo "<h2>array(";
foreach ($names as $key => $value) {
	echo  $value . ", ";
}
echo ")</h2>";

echo br;
echo "<h2>1) sort array (sort arrays in ascending order like a to z)</h2>";
name_arrays("sort");

echo "<h2>2) rsort array (rsort arrays in descending order like z to a)</h2>";
name_arrays("rsort");

echo "<h2>3) asort array (asort associative arrays in ascending order, according to the value)</h2>";
name_arrays("asort");

echo "<h2>4) arsort array (arsort associative arrays in descending order, according to the value)</h2>";
name_arrays("arsort");

echo "<h2>5) ksort array (ksort associative arrays in ascending order, according to the key)</h2>";
name_arrays("ksort");

echo "<h2>6) krsort array (krsort associative arrays in descending order, according to the key)</h2>";
name_arrays("krsort");

$names = array("read.txt", "Read10.txt", "read5.txt", "read50.txt", "read9.txt");
echo "<h2>7) natsort array (natsort — Sort an array using a natural order algorithm)</h2>";
name_arrays("natsort");

$names = array("read.txt", "Read10.txt", "read5.txt", "read50.txt", "read9.txt");
echo "<h2>8) natcasesort array (natcasesort — Sort an array using a case insensitive natural order algorithm)</h2>";
name_arrays("natcasesort");
?>