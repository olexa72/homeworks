<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="CP1251">
    <title>Form functions</title>
</head>
<body>
<h3> List of a directory </h3>
<form method='post' action='4.php'>
    Enter a directory path: <input type="text" name="dir"> <br>
        <input type='submit' value="List">
</form>
</body>
</html>

<?php
	function dir_list($path_name){
		$ls = scandir($path_name);
		if($path_name == "..") $path_name="current";
		echo "The $path_name directory listing: <br>";
		foreach($ls as $fn) echo "$fn <br>";		
	}
	if(isset($_POST['dir'])) {
		$dir = 	$_POST['dir'];
		if($dir == '') $dir = '..';
		dir_list($dir);
	}
?>
		