<?php
    /*: Construir um script em PHP que leia a quantidade de vitórias, derrotas e empates de um time ao final de
um campeonato. A partir destes dados, calcule, armazene e imprima a quantidade total de jogos, a quantidade de
pontos disputados, de pontos ganhos e pontos perdidos, sabendo que: Vitória = 3 pontos; Empate = 1 ponto e
Derrota = 0 ponto.*/
    $vitoria = $_POST["vitoria"];
	$derrota = $_POST["derrota"];
	$empate = $_POST["empate"];
	$total_jogo = ($vitoria + $derrota + $empate);
	$ponto_disputado = 3 * $total_jogo;
	$ponto_ganho = 3 * $vitoria;
	$ponto_perdido = ($ponto_ganho + 1 * $empate + 0 * $derrota);
	echo "Total de jogos: $total_jogo.";
	echo "<br>";
	echo "Quantidade de pontos disputados: $ponto_disputado.";
	echo "<br>";
	echo "Quantidade de pontos ganhos: $ponto_ganho.";
	echo "<br>";
	echo "Quantidade de ponto perdido: $ponto_perdido.";