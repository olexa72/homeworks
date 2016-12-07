<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form functions</title>
</head>
<body>
<h3> Capitalize sentences beginnings </h3>
<form method='post'>
    Type some sentences here (without capitals): <br>
        <textarea name='text'></textarea><br><br>
        <input type='submit' value="Capitalize">
		<br><br>
	The corrected verse: <br><br>
</form>
</body>
</html>

<?php
    function capitalize($str)
    {
        $arr = explode('.',$str);
        $text = '';
        foreach($arr as $sentence) if($sentence != '') {
            $sentence = trim($sentence);
            $s = substr($sentence,0,1);
            $s = strtoupper($s);
            $c = strlen($sentence);
            $sentence = substr($sentence, 1, $c);
            $text = $text . $s . $sentence . '. ';
        }

		return $text;
	}
	
	$str = $_POST['text'];
	$text = capitalize($str);
	echo "$text <br>";
?>