<?php

	$prato=0;
	$sobremesa=0;
	$bebida =0;
	$opcao =0;

	$p = "Escolhar um prato:" ."<br>" ;
	$p .= " 1 - veteariano"."<br>";
	$p .= " 2 - peixe"."<br>";
	$p .= " 3 - frango"."<br>";
	$p .= " 4 - carne"."<br> <br>";
	echo $p;

	$opcao=2;
	switch ($opcao) {
		case 1:
			$prato = 180;
			break;
		case 2:
			$prato = 230;
			break;
		case 3:
			$prato = 250;
			break;
		case 4:
			$prato = 350;
			break;

		default:
			echo "Opção inválida";
			break;
	}
	$opcao=0;
	$s = "Escolha uma sobremesa"."<br>" ;
	$s .= "1 - abacaxi"."<br>";
	$s .= "2 - sorvete diet"."<br>";
	$s .= "3 - mousse diet"."<br>";
	$s .= "4 - mousse de chocolate"."<br><br>";
	echo $s;
	$opcao=3;
	switch ($opcao) {
		case 1:
			$sobremesa = 75;
			break;
		case 2:
			$sobremesa = 110;
			break;
		case 3:
			$sobremesa = 170;
			break;
		case 4:
			$sobremesa = 200;
			break;

		default:
			echo "Opção inválida";
			break;
	}

	$opcao=0;
	$b = "Escolha uma bebida" ."<br>" ;
	$b .="1 - chá" ."<br>";
	$b .="2 - suco de laranja" ."<br>";
	$b .="3 - suco de melão "."<br>";
	$b .="4 - refrigerante"."<br><br>";
	echo $b;
	$opcao=1;
	switch ($opcao) {
		case 1:
			$bebida = 20;
			break;
		case 2:
			$bebida = 70;
			break;
		case 3:
			$bebida = 100;
			break;
		case 4:
			$bebida = 65;
			break;

		default:
			echo "Opção inválida";
			break;
	}
	
	$total= $prato + $sobremesa+ $bebida;
	echo "O total de calorias consumidas nessa refeição foi de $total";

?>