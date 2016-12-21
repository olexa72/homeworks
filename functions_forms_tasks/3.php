<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Form functions</title>
</head>
<body>
<h3> Chop long words in 'test.txt' file </h3>
<form method='post'>
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
		$handle=fopen($file_name, 'wb');
		fwrite($handle, $text);
		fclose($handle);
	}
	
	$l=$_POST['chop'];
	
	chop_words($l, 'test.txt');
?>
		