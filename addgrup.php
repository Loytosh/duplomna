<?
	$newgrup = $_POST['newgrup'];
?>

<html> 
	<head>
		<title>Особова картка студента</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="css/style.css">
		<? include 'config.php'; ?>
	</head>

	<body>
		<?
			$sql = "INSERT INTO `grup`(`grup`) VALUES ('$newgrup')";
         mysqli_query($link, $sql);
			
			echo "<br> Базу успішно оновлено<br>";
		?>
	</body>
<? include 'footer.php'; ?>
</html>
<?
   echo "<meta http-equiv=\"refresh\" content=\"0.5;url=" . $_SERVER['HTTP_REFERER'] . "\">";
?>