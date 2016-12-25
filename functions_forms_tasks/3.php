<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Form functions</title>
</head>
<body>
<h3> Chop long words in 'test.txt' file </h3>
<form method='post' action='3.php'>
    The longest word should be: <input type="text" name="chop"> characters long.<br>
        <input type='submit' value="Chop words">
</form>
</body>
</html>

<?php
	function chop_words($chop_length, $file_name){
		$text = file_get_contents($file_name);
		$a=explode(' ', $text);
		$c=0;
		foreach($a as $w) {
			if(strlen($w) > $chop_length) unset($a[$c]);
			$c++;
		}
		$text=implode(' ', $a);
		file_put_contents($file_name, $text);
	}
	
	if(isset($_POST['chop'])
		chop_words($_POST['chop'], 'test.txt');
?>
		