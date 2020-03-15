<?
	$id = $_POST['id'];
	$id_fo = $_POST['id_fo'];
	$lastname = $_POST['lastname'];
	$name = $_POST['name'];
	$by_father = $_POST['by_father'];
	$birthday = $_POST['birthday'];
	$fakultet = $_POST['fakultet'];
	$kafedra = $_POST['kafedra'];
	$specialnist = $_POST['specialnist'];
	$grup = $_POST['grup'];
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
			$sql = "INSERT INTO `student` (id_fo, lastname, name, by_father, birthday, fakultet, kafedra, specialnist, grup) values ('$id_fo', '$lastname', '$name', '$by_father', '$birthday', '$fakultet', '$kafedra', '$specialnist', '$grup')";
			
			mysqli_query($link, $sql);
			echo "<br> Базу успішно оновлено <br>";

			//(UPDATE student SET name = '%$name%', lastname = '%$lastname%' WHERE id = '%$id%')
		?>
	</body>
	<!--<meta http-equiv="refresh" content="0.5;URL=../setings.php" /> html звичайний редірект-->
</html>

<?
	 echo "<meta http-equiv=\"refresh\" content=\"0.5;url=" . $_SERVER['HTTP_REFERER'] . "\">";
?>
<!--echo "<meta http-equiv=\"refresh\" content=\"0.5;url=" . $_SERVER['HTTP_REFERER'] . "\">"; //PHP редірект на попередню сторінку