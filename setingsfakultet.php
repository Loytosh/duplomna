<html>
	<head>
		<title>Особова картка студента</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="css/style.css">
		<? include 'config.php'; ?>
	</head>
	
	
	<? include 'header.php'; ?>
	<body>
		<form method="LINK" action="index.php">
			<input type="submit" value="Головна" style="font-family: 'Roboto', sans-serif; font-size: 14px; width: 80px; margin-left: 60px; margin-top: 10px;">
		</form>
		
		<div id="searchs">
			<br><h3>Факультети</h3><br>

			<div class="resultsearch">
				<!--Скріпт на видалення (ЯКИЙ Я НЕ МІГ ВИРІШИТИ ПІВ ДНЯ!!!!!)-->
				<?if (isset($_GET['del'])){
					$id = $_GET['del'];
					$sql = "DELETE FROM fakultet WHERE id=$id";
					
					mysqli_query($link, $sql);
				}?>
				
			
				<?
					$sql = "SELECT * FROM fakultet";
					$result = mysqli_query($link, $sql);
					
					while ($row = mysqli_fetch_array($result)) { 
				?>
					
		<form action="save_setingsfakultet.php" method="POST">
			<div style="float: left; font-size: 16px;">
				Факультет: <br>
			</div>
					
			<div style="margin-left: 150px; font-size: 14px; width: 99%;">
				<input type="text" name="id" value="<?echo $row['id']?>" style="display: none;">
				<input type="text" name="oldfakultet" value="<?echo $row['fakultet']?>" style="display: none;">
				<input type="text" style="width: 75%;" name="newfakultet" value="<?echo $row['fakultet']?>"><br>
				
				<input type="submit" name="setings" value=" Зберегти " style="text-decoration: none; color: #0ac400;">
				<a href="?del=<?echo $row['id']?>" style="text-decoration: none; color: #e83c3c;"> Видалити </a><br>
			</div>
		</form>
					<hr style="margin-top: 3px;"><br>
					
					<?
					};
				?>

		<br><br>	
		<form action="addfakultet.php" method="POST">
			<div style="font-size: 16px;">
				Факультет : <input type="text" name="newfakultet">
				<input type="submit" value="Додати">
         </div>
		</form>

			
		</div>
		</div>
	</body>
	<? include 'footer.php'; ?>
</html>