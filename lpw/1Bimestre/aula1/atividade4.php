<?php

function desenhaLinha(array $dadosPaises) {
    echo "<tr>";
    echo "<td>" . $dadosPaises["ordem"] . "</td>";
    echo "<td> <img src='$dadosPaises[bandeira]'> ". $dadosPaises["pais"] . "</td>";
    echo "<td>" . $dadosPaises["ouro"] . "</td>";
    echo "<td>" . $dadosPaises["prata"] . "</td>";
    echo "<td>" . $dadosPaises["bronze"] . "</td>";
    echo "<td>" . $dadosPaises["total"]. "</td>";
    echo "</tr>";
}

$dados = array();

$usa = array(
    "ordem" => 1,
    "bandeira" => 'https://upload.wikimedia.org/wikipedia/commons/thumb/a/a4/Flag_of_the_United_States.svg/1280px-Flag_of_the_United_States.svg.png',
    "pais" => 'Estados Unidos da América',
    "ouro" => 46,
    "prata" => 37,
    "bronze" => 38,
    "total" => 121
);

array_push($dados,$usa);

$gbr = array(
    "ordem" => 2,
    "pais" => 'Grã-Bretanha',
    "ouro" => 27,
    "prata" => 27,
    "bronze" => 17,
    "total" => 67
);

array_push($dados,$gbr);

$chn = array(
    "ordem" => 3,
    "pais" => 'China',
    "ouro" => 26,
    "prata" => 18,
    "bronze" => 26,
    "total" => 70
);
array_push($dados,$gbr);

$rus = array(
    "ordem" => 4,
    "pais" => 'Rússia',
    "ouro" => 19,
    "prata" => 17,
    "bronze" => 20,
    "total" => 56
);

array_push($dados,$rus);

$ger = array(
    "ordem" => 5,
    "pais" => 'Alemanha',
    "ouro" => 17,
    "prata" => 10,
    "bronze" => 15,
    "total" => 42
);

array_push($dados,$ger);

print "<h1>Quadro de medalhas</h1>";

print "<table border=1>";
print "<tr>";
print "<td>Ordem</td>";
print "<td>País</td>";
print "<td><img scr='https://upload.wikimedia.org/wikipedia/commons/thumb/1/15/Gold_medal.svg/20px-Gold_medal.svg.png'></td>";
print "<td>img</td>";
print "<td>img</td>";
print "<td>img</td>";
print "</tr>";

desenhaLinha($usa);
desenhaLinha($gbr);
desenhaLinha($chn);
desenhaLinha($rus);
desenhaLinha($ger);



