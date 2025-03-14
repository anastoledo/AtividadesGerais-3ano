<?php

$carro1 = array(
    "modelo" => 'AAA',
    "marca" => 'aaa',
    "imagem" => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRnJvECGEkwjyMng2YhzGqaBgdca_xHfdi01w&s'
);

$carro2 = array(
    "modelo" => 'BBB',
    "marca" => 'bbb',
    "imagem" => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRnJvECGEkwjyMng2YhzGqaBgdca_xHfdi01w&s'
);

$carro3 = array(
    "modelo" => 'CCC',
    "marca" => 'ccc',
    "imagem" => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRnJvECGEkwjyMng2YhzGqaBgdca_xHfdi01w&s'
);

$carro4 = array(
    "modelo" => 'DDD',
    "marca" => 'ddd',
    "imagem" => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRnJvECGEkwjyMng2YhzGqaBgdca_xHfdi01w&s'
);
$carro5 = array(
    "modelo" => 'EEE',
    "marca" => 'eee',
    "imagem" => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRnJvECGEkwjyMng2YhzGqaBgdca_xHfdi01w&s'
);

$carros = array($carro1, $carro2, $carro3, $carro4, $carro5);

foreach ($carros as $c) {
    print "<div style='border: solid 1px; width: 300px; margin-top: 20px;'>";
    print $c['modelo'] . "<br>";
    print $c['marca'] . "<br>";
    print "<img style='width: 100%; height: auto;' src='$c[imagem]' /><br>";
    print "</div>";
}
