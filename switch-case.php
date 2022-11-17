<style>
	.green {color: green; font-size: 20px; font-weight: 500}
	.red {color: red; font-size: 20px; font-weight: 500}
</style>
<?php 
define("br", "<br>", true);

// echo mt_rand(5, )1;
echo br;
echo br;
echo br;
$i = mt_rand(1,3);
// $i = 8;
switch($i){// number check mean case check
	case 0:
	echo "i variable equle is 0";
	break;
	case 1:
	echo "i variable equle is 1";
	break;
	case 2:
	echo "i variable equle is 2";
	break;
	case 3:
	echo "i variable equle is 3";
	break;
	default:
	echo "i variable not macth";
}

$color = "red";
switch($color){
	case "red":
	echo "color == red";
	break;
	case "green":
	echo "color == green";
	break;
	case "Black":
	echo "color == Black";
	break;
	case "Yellow":
	echo "color == Yellow";
	break;
	default:
	echo "transprent color";
	break;
}

$color = "red";
switch($color){
	case "red": case "black": case "yellow":
	echo "color == red == black == yellow";
	break;
	case "green":
	echo "color == green";
	break;
	default:
	echo "transprent color";
	break;
}

echo br;
$age = 32;
switch($age){
	case (18 <= $age && 24 >= $age):
	echo "you are 18 to 24 middle";
	break;
	case (30 <= $age):
	echo "you are 30 plus";
	break;
	case (10 >= $age):
	echo "you are 10 less";
	break;
}

// 15 greater > less 10
// 10 less < ageter 50
// 10 == 10

// 10 >= 9,8,7,6,5,4,3,2,1

// 1 <= 2,3,4,5,6,7,8,9
echo br;
echo br;
echo br;

// all condition are true
// 20 >= 10
// 10 <= 30
// 5 <= 8
// 500 <= 8000
// 8000 >= 6000
// 650 >= 450
// 540 == 540
// 890 >= 700

// 20 <= 10
// 20 >= 800
// 20 == 800
if (20 >= 800) {
	echo "<span class='green'>True</span>";
}else{
	echo "<span class='red'>Flase</span>";
}
