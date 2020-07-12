<?php
    /*: Construir um script em PHP que leia um número inteiro e imprima “Positivo”, se o número lido for maior
que 0, “Negativo”, se o número lido for menor que 0 e “Nulo”, se o número lido for igual a 0.
*/
    $num_int = $_POST["num_int"];
	
	if($num_int > 0){
		echo "Positivo";		
	}elseif($num_int < 0){
		echo "Negativo";	
	}else{
		echo "Nulo";
	}