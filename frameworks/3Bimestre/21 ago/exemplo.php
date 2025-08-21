<?php 

echo "<hr> <h1> Exemplo 1 </h1>";

$tabela = [["nome"=> "Adalberto", "idade" => "20"],
           ["nome"=> "Asdrubaldo", "idade" => "30"]];

var_dump($tabela);
//echo $tabela["nome"]; //mesma coisa do echo ali do indice
echo "<hr>";

foreach ($tabela as $dado) {
    $indice = array_values((array)$dado);
    echo $indice[0] ."<br>";
}


echo "<hr> <h1> Exemplo 2 </h1>";

$dados = [
    (object) ["Field" => "id", "Type" => "int(11)"],
    (object) ["Field" => "nome", "Type" => "varchar(100)"],
    (object) ["Field" => "idade", "Type" => "int(3)"]

];

$atributos = array_map(function($obj){
    return $obj->Field;
}, $dados); //função como parametro de outra
//array_map => ["Id","Nome", "Idade"] 

//var_dump($atributos);

    $str = implode(",", $atributos); //["Id","Nome", "Idade"] => id,nome,idade
    echo $str;

    $placeholders = implode(",", array_fill(0,3,'?'));//=> preenche da posição 0 a 3 com '?', na posição 3 pegamos o count do array
    echo "<br>". $placeholders;
