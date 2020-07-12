<?php
    /*: Construir um script em PHP que leia a quantidade de disciplinas em que um aluno não alcançou a média.
Se a quantidade for igual a 0, imprimir “Aprovado”, se a quantidade for entre 1 e 3 inclusive, imprimir “Recuperação”
e se a quantidade for maior que 3, imprimir “Reprovado”.
*/
    $quant_disc = $_POST["quant_disc"];
	
	if($quant_disc == 0){
		echo "Aprovado";		
	}elseif($quant_disc >= 1 && $quant_disc <= 3){
		echo "Recuperação";	
	}else{
		echo "Reprovado";
	}