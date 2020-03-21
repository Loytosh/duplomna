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
		$predmeti = $_POST['predmeti'];
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
				$sql = "UPDATE `student` SET `id_fo`='$id_fo', `lastname`='$lastname', `name`='$name', `by_father`='$by_father', `birthday`='$birthday', `fakultet`='$fakultet', `kafedra`='$kafedra', `specialnist`='$specialnist', `grup`='$grup', `predmeti`='$predmeti' WHERE id='$id'";

				mysqli_query($link, $sql);
				echo "<br> Базу успішно оновлено<br>";
			?>
		</body>
	<!--	<meta http-equiv="refresh" content="0.5;URL=../setings.php" />  html звичайний редірект -->
	</html>
	<?
		echo "<meta http-equiv=\"refresh\" content=\"0.5;url='../setings.php#id$id' \">"; //PHP редірект на попередню сторінку на маяк #id$id
	?>