<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form functions</title>
</head>
<body>
<h3> Common words </h3>
<form method='post'>
    <table>
        <tr>
            <td> Type some words here:</td>
            <td><textarea name='text1'></textarea></td>
        </tr>
        <tr>
            <td>and some words here:</td>
            <td><textarea name='text2'></textarea></td>
        </tr>
        <tr>
            <td colspan="2"> <input type='submit' value="Find common words"></td>
        </tr>
	</table>
</form>
</body>
</html>

<?php
    function getCommonWords($a, $b) {
        $aa=explode(' ', strtolower($a));
        $bb=explode(' ', strtolower($b));

        $common=array();
        foreach($aa as $item1)
            if(strlen($item1) != 0)
                foreach ($bb as $item2)
                    if ($item1 == $item2)
                        $common[] = $item1;

    return $common;
    }

    $text1 = $_POST['text1'];
    $text2 = $_POST['text2'];

    $common = getCommonWords($text1, $text2);
    echo '<p>Common words: </p>';
    foreach($common as $item) echo "<p>$item</p>";
?>