<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>PHP Trainning</title>
</head>
<body>
<div>
	<form method="get" action="02-tabuada.php">
	Número:
	<!--arquivo.php viabiliza select dinâmico com código PHP-->
	<select name="num">
    <?php
        for($i=1; $i<=10; $i++) {
			echo "<option>$i</option>";
		}
    ?>
	</select>
	<input type="submit" value="Tabuada"/>
	</form>
</div>
</body>
</html>
 