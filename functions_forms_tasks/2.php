<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form functions</title>
</head>
<body>
<h3> Three longest words </h3>
<form method='post'>
    Type some words here: <br>
        <textarea name='text'></textarea><br>
        <input type='submit' value="Find 3 longest words">
</form>
</body>
</html>

<?php
    function top3($a) {
        $aa=array_unique(explode(' ', $a));
        $length=array();
        foreach($aa as $key=>$item) {
			$l=strlen($item);
            if($l > 1) $length[$key]=$l;
		}
		
		$top=array("Too","short","text");
		if(count($length) >= 3) {
			arsort($length);
			$c=0;
			foreach($length as $key=>$item) {
				$top[$c] = $aa[$key];
				if(++$c > 2) break;
			}
			return $top;
		} else return $top;
	}

    $text = $_POST['text'];

    $top = top3($text);
    echo '<p>Three longest words: ';
    foreach($top as $item) echo " $item";
	echo '.</p>';
?>