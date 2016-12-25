<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form functions</title>
</head>
<body>

<h3> Reverse sentences in a text </h3>

</body>
</html>

<?php
    function reverse_sentences($str)
    {
        $arr = explode('.',$str);
        $num = count($arr);
        $rev = '';
		for($i=num-1; $i>=0; $i--) {
			$rev .=  trim($arr[$i]) . '. ';

		return $rev;
	}
	
	$str = "Experimental Breeder Reactor I (EBR-I) is a decommissioned research reactor and U.S. National Historic Landmark located in the desert about 18 miles (29 km) southeast of Arco, Idaho. At 1:50 pm on December 20, 1951, it became the world's first electricity-generating nuclear power plant when it produced sufficient electricity to illuminate four 200-watt light bulbs. It subsequently generated sufficient electricity to power its building, and continued to be used for experimental purposes until it was decommissioned in 1964.";
    echo "$str <br><br>";
    $text = reverse_sentences($str);
	echo "Here is the reversed text: <br><br>";
	echo $text;
?>