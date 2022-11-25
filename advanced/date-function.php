<body style="padding: 50px;">
<?php
define("br", "<br>", true);
// ----- day 
// d - Represents the day of the month (01 to 31)
// j - The day of the month without leading zeros (1 to 31)
// S - (st, nd, rd or th)

// ----- Month
// F - Represents a month full name (January to December)
// m - Represents a month on number (01 to 12)
// M - Represents a month name three letter (Jan to Dec)
// n - Represents a month number without zero (1 to 12)

// ----- Year
// y - Represents a year two digit (23)
// Y - Represents a year four digit (2023)

// ----- week
// D - Represents the day of the month on sort form (Mon to Sun)
// l - Represents the day of the week (Monday to Sunday)
// N - Represents week day ketla mo che number show - start monday to sunday end (1 2 3 4 5 6 7)
// w - Represents week of day to number - start sunday to saturday end (0 1 2 3 4 5 6)

// ----- other
// z - total days of the year (324)
// W - total week of the year (47)
// t - how many days are in month (30 / 31)
// L - Is this is leap year show - if (0) value no leap year - if (1) it is leap year 
//   - In an ordinary year, if you were to count all the days in a calendar from January to December, you'd count 		 365 days. But approximately every four years, February has 29 days instead of 28. So, there are 366 days in 		the year. This is called a leap year


echo "<h1>----- PHP Date -----</h1>";

echo "<h2>----- Date - (Days) -----</h2>";
echo "<h3><mark>date('d')</mark> - today day is - <mark>" . date("d") . "</mark> - with zero</h3>";
echo "<h3><mark>date('j')</mark> - today day is - <mark>" . date("j") . "</mark> - without zero</h3>";
echo "<h3><mark>date('S')</mark> - (st, nd, rd or th) -" . date("d") ."<mark>" . date("S") . "</mark></h3>";

echo "<h2>----- Date - (Month) -----</h2>";
echo "<h3><mark>date('F')</mark> - Month of the year - <mark>" . date("F") . "</mark> - Month full name</h3>";
echo "<h3><mark>date('M')</mark> - Month of the year - <mark>" . date("M") . "</mark> - Month name sort form</h3>";
echo "<h3><mark>date('m')</mark> - Month of the year - <mark>" . date("m") . "</mark> - number show with zero</h3>";
echo "<h3><mark>date('n')</mark> - Month of the year - <mark>" . date("n") . "</mark> - number show without zero</h3>";

echo "<h2>----- Date - (Year) -----</h2>";
echo "<h3><mark>date('y')</mark> - Year is - <mark>" . date("y") . "</mark> - Two digit number value</h3>";
echo "<h3><mark>date('Y')</mark> - Year is - <mark>" . date("Y") . "</mark> - Four digit number value</h3>";

echo "<h2>----- Date - (Week) -----</h2>";
echo "<h3><mark>date('D')</mark> - Day of the week - <mark>" . date("D") . "</mark> - sort form day</h3>";
echo "<h3><mark>date('l')</mark> - Day of the week - <mark>" . date("l") . "</mark> - Full day</h3>";
echo "<h3><mark>date('N')</mark> - week of day number - <mark>" . date("N") . "</mark> - N count day start Monday to Sunday (1 to 7)</h3>";
echo "<h3><mark>date('w')</mark> - week of day number - <mark>" . date("w") . "</mark> - w count day start Sunday to Saturday (0 to 6)</h3>";

echo "<h2>----- Date - (Other Date Function) -----</h2>";
echo "<h3><mark>date('z')</mark> - Year total day count - <mark>" . date("z") . "</mark> - out of 365 Days</h3>";
echo "<h3><mark>date('z')</mark> - Year total day count - <mark>" . date("z") . "</mark> - out of 365 Days</h3>";
echo "<h3><mark>date('t')</mark> - Month days - <mark>" . date("t") . "</mark> - 28 / 29/ 30 / 31</h3>";
echo "<h3><mark>date('L')</mark> - Leap Year - <mark>" . date("L") . "</mark> - (0) no leap year - (1) leap year</h3>";
?>
</body>