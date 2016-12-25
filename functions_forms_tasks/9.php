<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form functions</title>
</head>
<body>
<h3> String inversion </h3>
<form method='post' action='9.php'>
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
	
	if(isset($_POST['text'])) {
		$rev = str_rev($_POST['text']);
		echo "$rev <br>";
	}
?>