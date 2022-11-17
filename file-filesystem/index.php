<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title></title>
	</head>
	<body>
		<?php
		$style = "style='color: red; font-size: calc(2rem + 2.5vw); padding: 20px 0; display: flex; align-items: center; justify-content: center; text-decoration: underline'";
		$style2 = "style='color: green; font-size: calc(2rem + 2.5vw); padding: 20px 0; display: flex; align-items: center; justify-content: center; text-decoration: underline'";
		$file = "readme.txt";
		// if (file_exists($file)) {
			// 	echo readfile("readme.txt");
			// 	copy($file, "newfile.txt");
			// 	rename("newfile.txt", "oldfile.txt");
			// 	unlink("oldfile.txt");
		// }else{
			// 	echo "<h2>file does not exist</h2>";
		// }
		// mkdir("newdir");
		// rmdir("newdir");
		// if (file_exists($file)) {
			// 	echo readfile("readme.txt");
			// 	copy($file, "copyfile.php");
			// 	rename("copyfile.php", "copyfile.txt");
			// 	unlink("copyfile.txt");
		// }else{
			// 	echo "<h2 $style >File does not exist</h2>";
		// }
		// if (!file_exists("css")) {
			// 	mkdir("css");
		// // copy("style.css");
		// }else{
			// 	echo "<h2 $style2>Folder Alredy exist</h2>";
		// }
		// copy("readme.txt", "newfile.txt");
		// rename("newfile.txt", "renamefile.txt");
		?>
	</body>
</html>
<pre>
	<?php
	 $path = realpath("readme.txt");
	 // echo dirname($path);
	 // print_r(pathinfo($path, PATHINFO_BASENAME)); 
	 // print_r(pathinfo($path, PATHINFO_EXTENSION));  
	 // print_r(pathinfo($path, PATHINFO_FILENAME));  
	 print_r(pathinfo($path, PATHINFO_DIRNAME));  
	?>
	<?php
	echo basename($path);
	?>
</pre>