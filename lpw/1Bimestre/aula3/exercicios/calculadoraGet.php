<?php

ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);


if (isset($_GET['num1']) and isset($_GET['num2'])) {

    $num1 = $_GET['num1'];
    $num2 =  $_GET['num2'];

    if ($num1 !="" and $num2!="") {

        $soma = $num1 + $num2;
        $sub = $num1 - $num2;
        $div = $num1 / $num2;
        $mul = $num1 * $num2;
        $resto = $num1 % $num2;

        print "A soma é igual a " . $soma . "\n";
        print "<br>";
        print "A subtração é igual a " . $sub . "\n";
        print "<br>";
        print "A divisão é igual a " . $div . "\n";
        print "<br>";
        print "A multiplicação é igual a " . $mul. "\n";
        print "<br>";
        print "E o resto é igual a " . $resto . "\n";
    }
    else{
        print "Um dos valores está VAZIO!";
    }
   
}
else{
    print "Você precisa enviar valores por parâmetro";
}

/*
http://localhost/AtividadesGerais-3ano-3/lpw/1Bimestre/aula3/exercicios/calculadoraGet.php
*/