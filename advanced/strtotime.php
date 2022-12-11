<?php 
define("br", "<br>", true);
 ?>
<body style="font-size: 24px; font-weight: bolder;">
<?php 
echo strtotime("now") . br;
echo date("Y-m-d", strtotime("now")) . " Current time" . br;
echo "Current day is " . "<mark>[". date(" d, D, j, l", strtotime("now")) . "]</mark>" . br;
echo "next day is " . "<mark>[". date("d, D, j, l", strtotime("next day")) . "]</mark>" . br;
echo "last day is " . "<mark>[". date("d, D, j, l", strtotime("last day")) . "]</mark>" . br;
echo "+9 days " . "<mark>[". date("d, D, j, l", strtotime("+9 days")) . "]</mark>" . br;
echo "-9 days " . "<mark>[". date("d, D, j, l", strtotime("-9 days")) . "]</mark>" . br;
echo "First day of next month " . "<mark>[". date("d, D, j, l", strtotime("First day of next month")) . "]</mark>" . br;
echo "Last day of next month " . "<mark>[". date("d, D, j, l", strtotime("Last day of next month")) . "]</mark>" . br;
?>
</body>