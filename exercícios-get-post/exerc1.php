<?php
// fazendo o php receber os dados do navegador
$aluno = $_POST['aluno'];
$nota1 = $_POST['nota1'];
$peso1 = $_POST['peso1'];
$nota2 = $_POST['nota2'];
$peso2 = $_POST['peso2'];

$media = ($nota1 * $peso1 + $nota2 * $peso2) / ($peso1 + $peso2);

echo "<p> Caro(a) aluno {$aluno}, de acordo com os dados fornecidos, sua nota é {$media}";
>