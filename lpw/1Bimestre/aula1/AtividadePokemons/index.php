<?php

require_once("modelo/Pokemon.php");

function desenhaLinha($dadosPokemons)
{
    print "<tr>";
    print "<td> <img src='" . $dadosPokemons->getImg() . "' width='100'></td>";  
    print "<td>" . $dadosPokemons->getNome() . "</td>";
    print "<td>" . $dadosPokemons->getTipo() . "</td>";
    print "<td> <a href='" . $dadosPokemons->getLink() . "' target='_blank'>Link</a></td>";  
    print "</tr>";
}

$pokemons = array();

$p1 = new Pokemon();
$p1->setNome("Caterpie");
$p1->setTipo("Inseto");
$p1->setImg("https://www.pokemon.com/static-assets/content-assets/cms2/img/pokedex/full/010.png");
$p1->setLink("https://www.pokemon.com/br/pokedex/caterpie");
array_push($pokemons, $p1);

$p2 = new Pokemon();
$p2->setNome("Squirtle");
$p2->setTipo("Água");
$p2->setImg("https://www.pokemon.com/static-assets/content-assets/cms2/img/pokedex/full/007.png");
$p2->setLink("https://www.pokemon.com/br/pokedex/squirtle");
array_push($pokemons, $p2);

$p3 = new Pokemon();
$p3->setNome("Clefairy");
$p3->setTipo("Fada");
$p3->setImg("https://www.pokemon.com/static-assets/content-assets/cms2/img/pokedex/full/035.png");
$p3->setLink("https://www.pokemon.com/br/pokedex/clefairy");
array_push($pokemons, $p3);

$p4 = new Pokemon();
$p4->setNome("Vulpix");
$p4->setTipo("Fogo");
$p4->setImg("https://www.pokemon.com/static-assets/content-assets/cms2/img/pokedex/full/037.png");
$p4->setLink("https://www.pokemon.com/br/pokedex/vulpix");
array_push($pokemons, $p4);

$p5 = new Pokemon();
$p5->setNome("Meowth");
$p5->setTipo("Normal");
$p5->setImg("https://www.pokemon.com/static-assets/content-assets/cms2/img/pokedex/full/052.png");
$p5->setLink("https://www.pokemon.com/br/pokedex/meowth");
array_push($pokemons, $p5);

// Programa principal
print "<h1> Pokémons </h1>";

print "<table border='1'>";
print "<tr>";
print "<th> Imagem </th>";
print "<th> Nome </th>";
print "<th> Tipo </th>";
print "<th> Link </th>";
print "</tr>";

foreach ($pokemons as $pokemon) {
    desenhaLinha($pokemon);
}

?>
