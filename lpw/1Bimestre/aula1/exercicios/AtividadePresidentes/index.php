<?php

require_once("Modelo/Presidente.php");

$presidentes = array();

$p1 = new Presidente(16, "Eurico Gaspar Dutra", 1946, 1951);
array_push($presidentes, $p1);

$p2 = new Presidente(17, "Getúlio Vargas", 1951, 1954);
array_push($presidentes, $p2);

$p3 = new Presidente(18, "Café Filho", 1954, 1955);
array_push($presidentes, $p3);

$p4 = new Presidente(18, "Carlos Luz", 1955, 1955);
array_push($presidentes, $p4);

$p5 = new Presidente(20, "Nereu Ramos", 1955, 1956);
array_push($presidentes, $p5);

$p6 = new Presidente(21, "Juscelino Kubitschek", 1956, 1961);
array_push($presidentes, $p5);

function desenhaLinha($dadosPresidentes)
{
    print "<tr>";
    print "<td>" . $dadosPresidentes->getNum() . "</td>";
    print "<td>" . $dadosPresidentes->getNome() . "</td>";
    print "<td>" . $dadosPresidentes->getInicio() . "</td>";
    print "<td>" . $dadosPresidentes->getFim() . "</td>";
    print "</tr>";
}

// Programa principal
echo "<h1>  Presidentes </h1>";

echo "<table border='1'>";

echo "<tr>";
echo "<th> Número </th>";
echo "<th> Nome </th>";
echo "<th> Início </th>";
echo "<th> Fim </th>";
echo "</tr>";

foreach ($presidentes as $p) {

  desenhaLinha($p);

}

echo "</table>";
