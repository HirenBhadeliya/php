<?php 

define("br", "<br>", true);
$text = "this is string";
// $text = 123;

echo strlen($text); // any string float integer length count
echo br;
echo str_word_count($text); // only string count note: number value not count
echo br;
echo strrev(1098); // str lenght revers
echo br;
echo strpos($text, "is"); // word search and first letter postion show
echo br;
echo str_replace("is", "a", $text); // frist value is finde and second value is replace string word and last is string
echo br;
echo strtoupper("this is string upper case"); // string upper case
echo br;
echo strtolower("This Is String Lower Case"); // String lower case
echo br;
echo str_repeat('<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/27/PHP-logo.svg/1200px-PHP-logo.png" alt="" width="250px">',2); // any thing you can repeat
?>

<?php 
echo br;
echo strlen("this is string");
echo br;
echo str_word_count("this is string");
echo br;
echo strrev("this is string");
echo br;
echo strpos($text,"is");
echo br;
echo $text;
echo br;
echo str_replace("is", "a", "string");
echo br;
echo str_repeat("string repeat <br>",5);
echo br;
?>