<?php
	$color = white;
	if(!isset($_COOKIE[$cookie]) && isset($_GET['color'])) {
		$color = $_GET['color'];
		setcookie('color', $color, time()+300);
	}
?>

<!DOCTYPE html>
<head>
	<title> Background color </title>
	 <META HTTP-EQUIV="refresh" CONTENT="300">
	<style>
		*{ background-color: <?php echo $color; ?> }
	</style>
</head>
<body>
	<form action="background_color.php" method="GET">
		<input list="background color" name="color">
		<datalist id="background color">
			<option value="white">
			<option value="red">
			<option value="orange">
			<option value="yellow">
			<option value="green">
		</datalist>
		<input type="submit" value="Set color" 
			<?php if(isset($_COOKIE['color'])) echo 'disabled'; else echo ' '; ?> 
			>
	</form>
</body>
</html>
