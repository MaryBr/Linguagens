<?php
	
	$pot =300;
	$tempo=12;
	$custo_hora= $tempo* 0.642;	
	$custo_dia= ($pot*$tempo)/1000;
	$custo_mes=$custo_dia*30;

	echo "O consumo por hora foi de $custo_hora kWh.
		<br>O consumo diário foi de $custo_dia kWh. 
		<br> O consumo mensal foi de $custo_mes kWh.";

?>