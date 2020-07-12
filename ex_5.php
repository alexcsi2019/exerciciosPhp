<?php
    /*Construir um script em PHP que leia a quantidade de alunos do sexo masculino, do sexo feminino e a
quantidade de alunos aprovados de uma turma. Em seguida calcule, armazene e imprima o total de alunos e a
porcentagem de alunos do sexo masculino, do sexo feminino e a porcentagem de alunos aprovados.*/
	$masculino = $_POST["masculino"];
	$feminino = $_POST["feminino"];
	$aprovado = $_POST["aprovado"];
	$total_aluno = ($masculino + $feminino);
	$porcent_masculino = ($masculino / $total_aluno)*100;
	$porcent_feminino = ($feminino / $total_aluno)*100;
	$porcent_aprovado = ($aprovado / $total_aluno)*100;
	echo "O total de alunos é $total_aluno.";
	echo "<br>";
	echo "A porcentagem de alunos do sexo masculino é de ".number_format($porcent_masculino,2)."%.";
	echo "<br>";
	echo "A porcentagem de alunos do sexo feminino é de ".number_format($porcent_feminino,2)."%.";
	echo "<br>";
	echo "A porcentagem de alunos aprovados é de ".number_format($porcent_aprovado,2)."%.";