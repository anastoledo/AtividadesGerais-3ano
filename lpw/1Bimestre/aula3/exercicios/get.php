<?php

print "Página aberta";

$nome = $_GET['nome'];
print "<br>";
$sobrenome =  $_GET['sobrenome'];
print "<br>";
print "Bem vindo " . $nome . " " . $sobrenome;

/*
http://localhost/AtividadesGerais-3ano-3/lpw/1Bimestre/aula3/exercicios/get.php?nome=Ana&sobrenome=Toledo
*/