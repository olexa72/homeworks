<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form functions</title>
</head>
<body>
<h3> String inversion </h3>
<form method='post'>
    Type some words here: <br>
        <textarea name='text'></textarea><br>
        <input type='submit' value="Inverse">
		<br><br>
	The inversed string: <br><br>
</form>
</body>
</html>

<?php
    function str_rev($str) {
		$len = strlen($str);
		$rev = '';
		for($i=$len-1; $i>=0; $i--)
			$rev .= substr($str, $i, 1);

		return $rev;
	}
	
	$str = $_POST['text'];
	$rev = str_rev($str);
	echo $rev;
?>