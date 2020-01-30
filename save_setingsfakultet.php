<?
	$id = $_POST['id'];
	$newfakultet = $_POST['newfakultet'];
	$oldfakultet = $_POST['oldfakultet'];
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
			//оновлення таблиці факультет
			$sql = "UPDATE `fakultet` SET `fakultet`='$newfakultet' WHERE id='$id'";
			mysqli_query($link, $sql);

			//змінення факультетів в базі даних студентів
			$sql = "UPDATE `student` SET `fakultet`='$newfakultet' WHERE `fakultet`='$oldfakultet'";
			mysqli_query($link, $sql);

			echo "<br> Базу успішно оновлено<br>";
		?>
	</body>
<? include 'footer.php'; ?>
</html>
<?
   echo "<meta http-equiv=\"refresh\" content=\"0.5;url=" . $_SERVER['HTTP_REFERER'] . "\">";
?>