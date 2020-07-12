<?php
    /*: Construir um script em PHP que leia o ano de nascimento e o sexo de uma pessoa e que calcule a sua
idade aproximada. Se o sexo for igual a “M” (masculino) e a idade for igual a 18, imprimir “Serviço Militar
Obrigatório”, caso contrário, imprimir “Isento de Serviço Militar”.
*/
    $ano_nasc = $_POST["ano_nasc"];
	$ano_atual = $_POST["ano_atual"];
	$sexo = $_POST["sexo"];	
	$idade = ($ano_atual - $ano_nasc);
	
	if ( $sexo == "M" && $idade == 18){
		echo "Serviço militar obrigatório.";	
	}else{
		echo "Isento do serviço militar.";
	}