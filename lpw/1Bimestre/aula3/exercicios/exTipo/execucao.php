
<?php

ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);

require_once("modelo/Pessoa.php");

if (isset($_GET['tipo']) and isset($_GET['nome']) and isset($_GET['sobrenome']) and isset($_GET['idade'])) {

    $tipo = $_GET['tipo'];
    $nome =  $_GET['nome'];
    $sobrenome =  $_GET['sobrenome'];
    $idade =  $_GET['idade'];

    if ($tipo!="" and $nome!="" and $sobrenome!="" and $idade!="") {

        if ($tipo == "C") {

            $pessoa = new Pessoa($nome, $sobrenome,$idade);
            print $pessoa;
        }
        elseif($tipo == "A"){
            $pessoa = array(
                'nome' => $nome,
                'sobrenome' => $sobrenome,
                'idade' => $idade
            );

            print "Nome completo: " . $pessoa['nome'] ." ". $pessoa['sobrenome'] . "\n" . "<br> Idade: " . $pessoa['idade'];
        }
        else{
            print "Precisa ser A ou C!";
        }
    }
    else{
        print "Um dos valores está VAZIO!";
    }
   
}
else{
    print "Você precisa enviar valores por parâmetro";
}

/*
http://localhost/AtividadesGerais-3ano-3/lpw/1Bimestre/aula3/exercicios/exTipo/execucao.php?tipo=A&nome=Ana&sobrenome=Toledo&idade=16
*/