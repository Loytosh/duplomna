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

	$sas = $_POST['bio']; echo $sas."1 <br>";
	$savedb = $_POST['setings']; echo $savedb."2 <br>";
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

			//(UPDATE student SET name = '%$name%', lastname = '%$lastname%' WHERE id = '%$id%')
		?>
	</body>
	<!--<meta http-equiv="refresh" content="0.5;URL=../setings.php" /> html звичайний редірект-->
</html>
<?
	if ($sas == "bio"){
		echo "<meta http-equiv='refresh' content='0.5;URL=index.php' />";
	}else if ($savedb == "setings"){
		echo "<meta http-equiv='refresh' content='0.5;URL=setings.php' />";
	}

?>
<!--echo "<meta http-equiv=\"refresh\" content=\"0.5;url=" . $_SERVER['HTTP_REFERER'] . "\">"; //PHP редірект на попередню сторінку