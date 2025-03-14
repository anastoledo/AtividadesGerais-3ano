<?php

function CalcularArea (array $vetor) {

    $area = $vetor["base"] * $vetor["altura"];

    return $area;
}

$ret1 = array(
    "base" => 10,
    "altura" => 20
);

$ret2 = array(
    "base" => 30,
    "altura" => 40
);

$ret3 = array(
    "base" => 50,
    "altura" => 60
);

$rets = array($ret1, $ret2, $ret3);


foreach ($rets as $r) {

  $area = CalcularArea($r);
  print "A area do retangulo é igual à " . $area . "\n<br>";
  print "<br>";
 
}