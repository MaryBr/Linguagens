<!DOCTYPE html>
<html>
	<head>
	    <link rel="stylesheet" href="_css/estilo.css"/>
	    <meta charset="UTF-8"/>
	    <title>Curso de PHP </title>
	</head>
	<body>
		<div>
			<?php
				function teste(&$x)
				{
					$x+=2;
					echo "O valor de X e a soma com 2 é $x";
				}
				$var = 7;
				teste($var);
				echo "<p>O valor antes da função é $var<p>";
			?>
		</div>
	</body>
</html>
 