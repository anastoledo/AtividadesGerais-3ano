<?php 

function calcularMedia ($num1, $num2, $num3){
    $media = 0;
    $media = ($num1 + $num2 + $num3)/3;
    return $media;

}

print "A primeira média dos valores 1, 2 e 3 é: " . calcularMedia(1,2,3) . "\n<br>";
print "A primeira média dos valores 4, 5 e 6 é: " . calcularMedia(4,5,6) . "\n<br>";
print "A primeira média dos valores 7, 8 e 9 é: " . calcularMedia(7,8,9) . "\n<br>";