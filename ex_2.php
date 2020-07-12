<?php
	/*: Construir um script em PHP que leia o salário bruto de um funcionário e em seguida calcule, armazene e
imprima o salário bruto, um desconto de 8% e o salário líquido com base neste desconto.*/
    $salariobruto = $_POST["salariobruto"];
	$desconto = 0.08 * $salariobruto;
	$salarioliquido = $salariobruto - $desconto;
	
	echo "Salário Bruto = R$".number_format($salariobruto,2);
	echo "<br>";
	echo "Desconto = R$".number_format($desconto,2);
	echo "<br>";
	echo "Salário Líquido = R$".number_format($salarioliquido,2);
	