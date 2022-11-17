<?php 
define("br", "<br>", true);
$x = 15;
if ($x < 20) {
	echo "x is less";
}else{
	echo "x is greater";
}	

echo "<br>";

if ($x < 10):
echo "$x is less";

elseif($x == 15):
echo "$x is equle";

else:	
echo "$x is greater";

endif;

echo "<br>";
date_default_timezone_set("Asia/Kolkata");

$hour = date("H");

if ($hour < 0) {
	echo "good morning";
}elseif($hour < 12){
	echo "good afternoon";
}elseif($hour < 18){
	echo "good  eveing";
}elseif($hour < 24){
	echo "good  night";
}
echo br;

$email = "bhadeliyahiren978@gmail.com";
$name = "Hiren Bhadeliya";
$new_password = "1234";
$confirm_pssowrd = "1234";


function chagnePassword(){
	global $email, $name, $new_password, $confirm_pssowrd;
	if ($new_password == $confirm_pssowrd && $email && $name && $new_password) {
		echo "true";
	}else{
		echo "false";
	}
}

chagnePassword();
echo br;
$name = "bhadeliya";
// $name = "bhadeliya";

if ($name == "hiren") {
	echo $name;
}
if ($name == "bhadeliya") {
	echo $name;
}
else{
	echo "false";
}

echo br;
echo br;
echo br;

$day = date("D");

if ($day == "Mon") {
	echo "Today is Monday";
}elseif ($day == "Tue") {
	echo "Today is Tuesday";
}elseif ($day == "Wed") {
	echo "Today is Wednesday";
}elseif ($day == "Thu") {
	echo "Today is Thursday";
}elseif ($day == "Fri") {
	echo "Today is Friday";
}elseif ($day == "Sat") {
	echo "Today is Saturday";
}elseif ($day == "Sun") {
	echo "Today is Sunday";
}else{
	echo "Day Not Found";
}