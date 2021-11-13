<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Aprendendo PHP</title>
	</head>
	<body>
		<form action="aula2b.php" method="POST">
			<label>A</label>
			<input type="number" name="a">
			<label>B</label>
			<input type="number" name="b">
			<button type="submit">Enviar</button>
		</form>
		<?php
			$a = $_POST["a"];
			print "<br>";
			$b = $_POST["b"];

			print $a + $b;
		?>
	</body>
</html>

