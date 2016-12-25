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
        $arr = explode(' ',$str);
        $words = array();
        foreach ($arr as $a) {
            $br = false;
            foreach($words as $w=>$n)
                if($w == $a) $br = true;
            if(!$br) {
                $c = 0;
                foreach ($arr as $b)
                    if ($a == $b) $c++;
                $words[$a] = $c;
            }
        }
        arsort($words);
		return $words;
	}
	
	$str = 'apple cherry strawberry cherry pear apple cherry strawberry apple strawberry strawberry cherry pear apple cherry cherry strawberry apple strawberry strawberry cherry strawberry cherry pear apple cherry cherry strawberry apple strawberry strawberry cherry cherry pear apple cherry strawberry';
    echo "$str <br><br>";
    $words = diff_words_count($str);
	echo "There are such words in the string: <br><br>";
	foreach($words as $word=>$number)
	    echo "$word - $number <br>"
?>