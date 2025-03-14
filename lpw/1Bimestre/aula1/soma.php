<?php

    $par = 0;
    $impar = 0;

    for ($i=20; $i < 70; $i++) { 
        if ($i % 2 == 0) {
            $par = $par + $i;
        }

        else{

            $impar = $impar + $i;
        }
    }

print "A soma par entre os número 20 à 70 é igual - $par " . " \n<br>";

print "A soma impar entre os número 20 à 70 é igual - $impar " . " \n";





