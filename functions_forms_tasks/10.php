<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form functions</title>
</head>
<body>
<h3> Unique words count </h3>
<form method='post'>
    Type some words here: <br>
        <textarea name='text'></textarea><br>
        <input type='submit' value="Count">
		<br><br>
	The number of unique words in the text is:
</form>
</body>
</html>

<?php
    function uniq($str)
    {
        $arr = explode(' ',$str);
        $unq = 0;
        foreach ($arr as $item1) {
            $same = 0;
            foreach ($arr as $item2) {
                if ($item1 == $item2) $same++;
                if ($same > 1) break;
            }
            if ($same == 1) $unq++;
        }

		return $unq;
	}
	
	$str = $_POST['text'];
	$uniq_words = uniq($str);
	echo $uniq_words;
?>