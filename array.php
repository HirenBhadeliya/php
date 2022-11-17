<?php 
define("br", "<br>", true);
$cars = array("Honda", "Volvo", "BMW", "Aodi");
print_r($cars);
echo br;
echo $cars[0] . "<br>";
echo $cars[1] . "<br>";
echo $cars[2] . "<br>";
echo $cars[3] . "<br>";
echo br;
echo br;
echo br;

$content = array(
array("red", "green", "blue", "yellow"),
array("one", "two", "three", "four"),
array("honda", "volvo", "bmw", "aodi")
);

foreach ($content as $key => $value) {
	echo $value[1];
}

echo "<pre>";
print_r($content);
echo "</pre>";

?>

<table>
	<?php foreach ($content as $value): ?>
	<tr>
		<?php foreach ($value as $key => $value2): ?>
		<td><?php echo $value2; ?></td>
		<?php endforeach ?>
	</tr>
	<?php endforeach ?>
</table>

<?php
$project = array(
"hiren" => array("19", "B.com"),
"mayank" => array("18", "B.c.a"),
"ashish" => array("17", "B.com")
);
?>

<style>
	table{border-collapse: collapse;}
	th, td {width: 200px; padding: 10px;}
</style>

<table width="100" border="1" cellpadding="0" cellspacing="0">
	<tr>
		<th>Name</th>
		<th>age</th>
		<th>Qualification</th>
	</tr>
	<?php foreach ($project as $key => $value): ?>
	<tr>
		<td><?php echo $key; ?></td>
		<?php foreach ($value as $value2): ?>
		<td><?php echo $value2; ?></td>
		<?php endforeach ?>
	</tr>
	<?php endforeach ?>
</table>

<?php
echo "<table border='1' cellspacing='0'>";
	for ($i=0; $i < count($content); $i++) {
		echo "<tr>";
			for ($a=0; $a < count($content); $a++) {
			echo "<td>" . $content[$i][$a] . "</td>";
			}
				echo "</tr>";
	}
echo "</table>";
?>