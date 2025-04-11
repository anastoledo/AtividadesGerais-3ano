<?php


print "Página aberta";

$num1 = $_GET['num1'];
print "<br>";
$num2 =  $_GET['num2'];
print "<br>";
$num3 = $_GET['num3'];
print "<br>";
print "O resultado é igual a: " .  ($num1 + $num2 + $num3)/3;

/*
http://localhost/AtividadesGerais-3ano-3/lpw/1Bimestre/aula3/exercicios/get.php?num1=2&num2=3&num3=1
*/