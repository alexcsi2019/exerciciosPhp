<?php
    /*Construir um script em PHP que leia o salário bruto e o sexo de um funcionário. Se o sexo for “M”
(masculino), calcular, armazenar e imprimir um desconto de 5% e o salário líquido, caso contrário, calcular,
armazenar e imprimir um desconto de 3% e o salário líquido.
*/
    $sal_bruto = $_POST["sal_bruto"];
	$genero = $_POST["genero"];
	$desc_m = 0.05 * $sal_bruto;
	$desc_f = 0.03 * $sal_bruto;
	$sal_liq1 = $sal_bruto - $desc_m;
	$sal_liq2 = $sal_bruto - $desc_f;
	if($genero == "M"){
		echo "Desconto de 5%: R$ ".number_format($desc_m,2);
		echo "<br>";
		echo "Salário Líquido: R$ ".number_format($sal_liq1,2);
	}else{
		echo "Desconto de 3%: R$ ".number_format($desc_f,2);
		echo "<br>";
		echo "Salário Líquido: R$ ".number_format($sal_liq2,2);
	}
	
	
	
	