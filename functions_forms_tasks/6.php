<html>
<head>
    <title>Photo gallery</title>
</head>
<body>
    <form action="6.php" method="post" enctype="multipart/form-data">
          <input type="file" name="my_file">
          <input type="submit" value="Upload on server" name="send">
    </form>
</body>

</html>

<?php
    $userDir = __DIR__ . '\gallery';
    $tmpName = $_FILES['my_file']['tmp_name'];
    if(is_uploaded_file($tmpName)) {
        $newName = $userDir . '/' . $_FILES['my_file']['name'];
        move_uploaded_file($tmpName,$newName);
    }

    $items = scandir($userDir);

	echo '<table width="90%" align="center" cellpadding="5">';
	$i=2;
	while($items[$i] != NULL) {
		echo '<tr>';
		for($j=0; $j<3; $j++) {
			if($items[$i] == NULL) break;
			$fn = "gallery/" . $items[$i];
			echo "<td width=\"33%\"> <img src=\"$fn\"></td>";
			$i++;
		}
		echo "</tr>";
	}

    echo "</table>";
?>