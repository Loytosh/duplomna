<?
	$id = $_POST['id'];
   $newspecialnist = $_POST['newspecialnist'];
   $oldspecialnist = $_POST['oldspecialnist'];
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
         //оновлення таблиці кафедра
			$sql = "UPDATE `specialnist` SET `specialnist`='$newspecialnist' WHERE id='$id'";
			mysqli_query($link, $sql);
         
         //змінення кафедр в базі даних студентів
         $sql = "UPDATE `student` SET `specialnist`='$newspecialnist' WHERE `specialnist`='$oldspecialnist'";
			mysqli_query($link, $sql);

         echo "<br> Базу успішно оновлено<br>";
		?>
	</body>
<? include 'footer.php'; ?>
</html>
<?
   echo "<meta http-equiv=\"refresh\" content=\"0.5;url=" . $_SERVER['HTTP_REFERER'] . "\">";
?>