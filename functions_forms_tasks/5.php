<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Form functions</title>
</head>
<body>
<h3> Search in a directory </h3>
<form method='post' action='5.php'>
    Enter a directory path: <input type="text" name="dir">
    <br><br>
	Enter a search word: <input type="text" name="word">
    <br><br>
        <input type='submit' value="Search">
    <br><br>
</form>

<?php
	function dir_search($path_name, $search_word)
    {
        $ls = scandir($path_name);
        if ($path_name == "..") $path_name = "current";
        echo "The $path_name directory search results for the '$search_word' word: <br><br>";
        foreach ($ls as $fn)
            if (strpos($fn, $search_word) !== false)
                echo "$fn <br>";
    }
	if(isset($_POST['dir'])) {
		$dir=$_POST['dir'];
		$word=$_POST['word'];
		if($dir == '') $dir = '..';
		if($word == '') $word = 'txt';
		dir_search($dir,$word);
	}
?>

</body>
</html>
