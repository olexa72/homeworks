<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form functions</title>
</head>
<body>
<h3> Count unique words </h3>
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
    function count_uniq_words($str)
    {
        $arr = explode(' ',$str);
        $uniq_words = array();
		$num=0;
        foreach ($arr as $word1) {
            $same = 0;
            foreach ($uniq_words as $word2) {
                if ($word1 == $word2) $same++;
                if ($same > 0) break;
            }
            if ($same == 0) {
				$uniq_words[]=$word1;
				$num++;
			}
        }
		return $num;
	}
	
	$str = $_POST['text'];
	$num = count_uniq_words($str);
	echo "uniq: $num";
?>