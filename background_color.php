<?php
	if(isset($_GET['color']))
		$color = $_GET['color'];
	else $color='white';
	$cookie = 'color';
	if(!isset($_COOKIES[$cookie])) {
		echo setcookie($cookie, $color);//, time()+300);
		echo $_COOKIES[$cookie], '<br>';
	}
?>

<!DOCTYPE html>
<head>
	<title> Background color </title>
	<!-- <META HTTP-EQUIV="refresh" CONTENT="250"> -->
	<style>
		*{ background-color: <?php echo $color ?> }
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
			<?php if(isset($_COOKIES[$cookie])) echo 'disabled';
					else echo ' '; ?> 
			>
	</form>
	<?php echo $_COOKIES[$cookie], '<br>'; ?>
</body>
</html>
