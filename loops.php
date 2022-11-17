<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<?php

define("br", "<br>", true);

// php Loops 

// while
// for
// do while 
// foreach
$a = 1;
// true condition 
while($a <= 10){
   echo "$a while loop increment <br>";
   $a =  $a + 1;
}
$a = 1;

// false condition 
while($a >= 10){
   echo "$a while loop increment <br>";
   $a =  $a + 1;
}

echo "<br>";

$b = 10;


while($b >= 1){
   echo "$b while loop decrement <br>";
   $b = $b - 1;
}

echo br;
// do while loop 

$a = 1;
// True condition 
do{
   echo "$a do while loop" . br;
   $a++;
}while($a <= 10);
$b = 1;
// False condition 
do{
   echo "$b do while loop" . br;
   $b++;
}while($b >= 10);

echo br;
$b = 4;
do{
   echo --$b;
   echo "do while decrement" . br;
}while($b >= 2);
echo br;

for($a = 1; $a <= 10; $a++){
   echo "for loop increment" . br;
}

echo br;

$age = array("18", "20", "19.5");
$age = array("hiren" => "18", "jay" => "20", "utsav" => "19.5");

foreach($age as $key => $value){
   echo "<br> $key = $value <br>";
}

$content = array(
["images" => "images/01.png", "title" => "heading one", "text" => "proident, sunt in culpa qui officia deserunt mollit anim id est laborum.", "link" => "button one",],
["images" => "images/01.png", "title" => "heading two", "text" => "proident, sunt in culpa qui officia deserunt mollit anim id est laborum.", "link" => "button two",],
["images" => "images/01.png", "title" => "heading three", "text" => "proident, sunt in culpa qui officia deserunt mollit anim id est laborum.", "link" => "button three",]
);

?>
<?php print_r($content);?>

<div class="container">
	<div class="row">
      <?php foreach($content as $key => $value){ ?>
		<div class="col-lg-4">
			<div class="card" style="width: 18rem;">
				<img src="<?php echo $value['images'];?>" class="card-img-top" alt="...">
				<div class="card-body">
					<h5 class="card-title"><?php echo $value["title"];?></h5>
					<p class="card-text"><?php echo $value["text"];?></p>
					<a href="#" class="btn btn-primary"><?php echo $value["link"];?></a>
				</div>
			</div>
		</div>
      <?php };?>
	</div>
</div>