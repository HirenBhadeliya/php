<body style="padding: 50px">

<?php 
define("br", "<br>", true);

// ----- Hour
// h - 12-hour format of an hour with leading zeros (01 to 12)
// g - 12-hour format of an hour without leading zeros (1 to 12)
// H - 24-hour format of an hour with leading zeros (00 to 23)
// G - 24-hour format of an hour without leading zeros (0 to 23)

// ----- Minutes
// i - Minutes with leading zeros (00 to 59)

// ----- Seconds
// s - Seconds with leading zeros (00 to 59)

// ----- Meridiem
// a - am or pm
// A AM or PM
// Lowercase Ante meridiem and Post meridiem (am or pm)

date_default_timezone_set('Asia/Kolkata');

echo "<h1>----- PHP Time -----</h1>";

echo "<h2>----- Time - (Hour) -----</h2>";
echo "<h3><mark>date('h')</mark> - 12-hour format of an hour with leading zeors - <mark>" . date("h") . "</mark> -(01 to 12)</h3>";
echo "<h3><mark>date('g')</mark> - 12-hour format of an hour without leading zeors - <mark>" . date("g") . "</mark> -(1 to 12)</h3>";
echo "<h3><mark>date('H')</mark> - 24-hour format of an hour with leading zeors - <mark>" . date("H") . "</mark> -(00 to 23)</h3>";
echo "<h3><mark>date('G')</mark> - 24-hour format of an hour without leading zeors - <mark>" . date("G") . "</mark> -(0 to 23)</h3>";

echo "<h2>----- Time - (Minutes) -----</h2>";
echo "<h3><mark>date('i')</mark> - Minutes with leading zeros - <mark>" . date("i") . "</mark> - (00 to 59)</h3>";

echo "<h2>----- Time - (Seconds) -----</h2>";
echo "<h3><mark>date('s')</mark> - Seconds with leading zeros - <mark>" . date("s") . "</mark> - (00 to 59)</h3>";

echo "<h2>----- Time - (Meridiem) -----</h2>";
echo "<h3><mark>date('a')</mark> - lowercase (a) use lower am and pm show - <mark>" . date("a") . "</mark> - (am or pm)</h3>";
echo "<h3><mark>date('A')</mark> - Uppercase (A) use Upper AM and PM show - <mark>" . date("A") . "</mark> - (AM or PM)</h3>";
?>
</body>