<?php

define("br", "<br>", true);

// d - Represents the day of the month (01 to 31) - number format
// j -The day of the month without leading zeros (1 to 31) - month show without zero
// D - Represents the day of the month (Mon to Sun) - string value day short form show
// l (lowercase 'L') - Represents the day of the week

// m - Represents a month (01 to 12) - number value
// N - Represents a month (1 to 12) without zero - number value
// M - Represents a month (Jan to Dec) - String value three characters 
// F - Represents a month (full name) - String value full characters 

// y - Represents a year (in two digits) demo - 22, 23,19,18
// Y - Represents a year (in four digits) demo - 2022, 2023, 2024

echo "<h2>----- Date -----</h2>";
echo "<h3>Day</h3>";
echo date("d") . " ------ date('d') - date (01 to 31)" . br ;
echo date("j") . " ------ date('j') - date (1 to 31) (without zero) " . br;
echo date("D") . " ------ date('D') - day only three letter" . br;
echo date("l") . " ------ date('l') - day Full letter" . br;
echo "<h3>Month</h3>";
echo date("m") . " ------ date('m') - Month (01 to 12) - with zero" . br;
echo date("n") . " ------ date('n') - Month (1 to 12) - without zero" . br;
echo date("M") . " ------ date('M') - Month name (three letter)" . br;
echo date("F") . " ------ date('F') - Month name (full letter)" . br;
echo "<h3>Year</h3>";
echo date("y") . " ------ date('y') - a year (in two digits)" . br;
echo date("Y") . " ------ date('Y') - a year (in Four digits)" . br;
echo "<h3>Date Formats</h3>";
echo date("d-m-Y") . br; // most used
echo date("j-n-y") . br; // most used
echo date("l, d F, Y") . br; // most used
echo date("D, d M, Y") . br; // most used

echo "<h2>----- Time -----</h2>";

// H - 24-hour format of an hour (00 to 23)
// h - 12-hour format of an hour with leading zeros (01 to 12)
// i - Minutes with leading zeros (00 to 59)
// s - Seconds with leading zeros (00 to 59)
// a - Lowercase Ante meridiem and Post meridiem (am or pm)

echo date("H") . " ------ date('H') - 24 house format" . br;
date_default_timezone_set("Asia/Calcutta");
echo date("h") . " ------ date('h') - 12 house format" . br;
echo date("i") . " ------ date('i') - minutes with leading (00 to 59)" . br;
echo date("s") . " ------ date('s') - seconds with leading (00 to 59)" . br;
echo date("a") . " ------ date('a') - am or pm" . br;
echo date("A") . " ------ date('A') - uppercase use" . br;