<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form functions</title>
</head>
<body>

<h3> Count different words </h3>

</body>
</html>

<?php
    function diff_words_count($str)
    {
        $arr = explode('.',$str);
        $words = array();
        foreach ($arr as $a) {
            foreach($words as $w)
                if($w == $a) $br = true;
            if(!$br) {
                $c = 0;
                foreach ($arr as $b)
                    if ($a == $b) $c++;
                $words[$a] = $c;
            }
        }

		return $words;
	}
	
	$str = 'apple cherry strawberry strawberry cherry pear apple cherry strawberry apple strawberry strawberry cherry pear apple cherry cherry strawberry apple strawberry strawberry cherry strawberry cherry pear apple cherry cherry strawberry apple strawberry strawberry cherry cherry pear apple cherry strawberry';
    echo "$str <br><br>";
    $text = diff_words_count($str);
	echo "There are such words in the string: <br><br>";
	echo $text;
?>