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
		    /*condicional isset (se foi passado pr paramentro)*/
		    $ano = isset($_GET["ano"])?$_GET["ano"]:"[ano não informado]";
		    $nome = isset($_GET["nome"])?$_GET["nome"]:"[nome não informado]";
		    $sexo=isset($_GET["sexo"])?$_GET["sexo"]:"[sexo não informado]";
		    $idade= date("Y")-$ano;
		    if ($idade >=18)
		    	echo "$nome do sexo $sexo, tem $idade anos e pode ter cnh e pode votar.";
		    else
		    {
		    	if ($idade>=16 && $idade<18)
		    		echo "$nome do sexo $sexo, tem $idade anos e não tem idade para dirigir, mas pode votar.";
		    	if($idade<16)
		    		echo "$nome do sexo $sexo, tem $idade anos e não tem idade para dirigir e não pode votar.";
		    }
			?>
			<a href="javascript:history.go(-1)"><em>Voltar</em></a>
		</div>
	</body>
</html>
 