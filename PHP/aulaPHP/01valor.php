<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP</title>
</head>
<body>
<div>
    <?php
    $valor = $_GET["v"];
    $r= sqrt($valor);
    echo "A raiz quadrada de $valor é: $r";
	?>
	<a href="_modelohtml.html">Voltar</a>
</div>
</body>
</html>
 