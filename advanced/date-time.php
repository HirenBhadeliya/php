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

echo "<h3>Day</h3>";
echo date("d") . " - date (01 to 31)" . br ;
echo date("j") . " - date (1 to 31) (without zero) " . br;
echo date("D") . " - day only three letter" . br;
echo date("l") . " - day Full letter" . br;
echo "<h3>Month</h3>";
echo date("m") . " - Month (01 to 12) - with zero" . br;
echo date("n") . " - Month (1 to 12) - without zero" . br;
echo date("M") . " - Month name (three letter)" . br;
echo date("F") . " - Month name (full letter)" . br;
echo "<h3>Year</h3>";
echo date("y") . " - a year (in two digits)" . br;
echo date("Y") . " - a year (in Four digits)" . br;
echo "<h3>Date Formats</h3>";
echo date("d-m-Y") . br; // most used
echo date("l, d F, Y") . br; // most used



