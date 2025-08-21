<?php

$tabelas = [["nome_tabela"=>"cidade"],
            ["nome_tabela"=>"estado"]];

$atributos_cidade = [
    (object) ["Field" => "id", "Type" => "int(11)"],
    (object) ["Field" => "nome", "Type" => "varchar(100)"],
    (object) ["Field" => "idEstado", "Type" => "int(3)"],
    (object) ["Field" => "habitantes", "Type" => "int(5)"],
];

$atributos_estado = [
    (object) ["Field" => "id", "Type" => "int(11)"],
    (object) ["Field" => "nome", "Type" => "varchar(100)"],
    (object) ["Field" => "sigla", "Type" => "varchar(2)"]
];

foreach ($tabelas as $tabela) {
     $nomeTabela = array_values((array)$tabela)[0];
     $nomeClasse = ucfirst($nomeTabela);

     $atributos = (array)$tabela;
     $atributos =  array_map(function($obj){
        return $obj->Field;
    }, $atributos);

    $sqlCols = implode(', ', $atributos);
    $placeholders = implode(', ', array_fill(0, count($atributos), '?'));

}










/*
$sql = insert into cidade (nome,idEstado, habitantes) values (?,?,?);
$stmt = 





*/


