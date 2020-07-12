<?php
    /*Construir um script em PHP que leia uma temperatura em Fahrenheit e em seguida calcule, armazene e
imprima essa temperatura convertida em Celsius.
Dica: Sabe-se que C = 5 / 9 * (F - 32).
*/
    $f = $_POST["f"];
	$c = (5/9) * ($f - 32);
	
	echo "A temperatura fornecida em graus Celsius é: ".number_format($c,2).".";