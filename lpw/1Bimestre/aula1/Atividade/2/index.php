<?php

require_once("modelo/Link.php");

function desenhaBotao ($tema, $arrayLinks){
    print '<div class="dropdown">';
        print "<button class='dropbtn'>$tema</button>";
        print '<div class="dropText">';
        foreach ($arrayLinks as $link) {
            print "<span><img src='".$link->getLinkImg()."' width='20' height='20'>".$link->getInfo()."</span>";
        }
    print '</div>';
    print '</div>';

}

print '<link rel="stylesheet" href="style.css">';

$times = array();
$paises = array();
$equipes = array();
$grifes = array();

//Times de Futebol
$t1 = new Link();
$t1->setLinkImg("https://upload.wikimedia.org/wikipedia/commons/thumb/c/c9/Escudo_sc_corinthians.png/800px-Escudo_sc_corinthians.png");
$t1->setInfo("Sport Club Corinthians Paulista");
array_push($times, $t1);

$t2 = new Link();
$t2->setLinkImg("https://upload.wikimedia.org/wikipedia/pt/9/90/ECBahia.png");
$t2->setInfo("Esporte Clube Bahia");
array_push($times, $t2);

$t3 = new Link();
$t3->setLinkImg("https://upload.wikimedia.org/wikipedia/commons/4/43/Athletico_Paranaense_%28Logo_2019%29.svg");
$t3->setInfo("Club Athletico Paranaense");
array_push($times, $t3);

//Paises
$p1 = new Link();
$p1->setLinkImg("https://upload.wikimedia.org/wikipedia/commons/0/05/Flag_of_Brazil.svg");
$p1->setInfo("República Federativa do Brasil");
array_push($paises, $p1);

$p2= new Link();
$p2->setLinkImg("https://upload.wikimedia.org/wikipedia/commons/f/fa/Flag_of_the_People%27s_Republic_of_China.svg");
$p2->setInfo("República Popular da China");
array_push($paises, $p2);

$p3 = new Link();
$p3->setLinkImg("https://upload.wikimedia.org/wikipedia/commons/4/41/Flag_of_India.svg");
$p3->setInfo("República da Índia");
array_push($paises, $p3);

//Equipes F1
$e1 = new Link();
$e1->setLinkImg("https://upload.wikimedia.org/wikipedia/pt/5/58/Logo_da_Scuderia_Ferrari_HP.png");
$e1->setInfo("Scuderia Ferrari HP");
array_push($equipes, $e1);

$e2 = new Link();
$e2->setLinkImg("https://upload.wikimedia.org/wikipedia/commons/d/de/2023_Stake_F1_Team_Kick_Sauber_logo.png");
$e2->setInfo("Stake F1 Team Kick Sauber");
array_push($equipes, $e2);

$e3 = new Link();
$e3->setLinkImg("https://upload.wikimedia.org/wikipedia/en/d/d9/Atlassian_Williams_Racing_2025.svg");
$e3->setInfo("Atlassian Williams Racing");
array_push($equipes, $e3);

//Grifes
$g1 = new Link();
$g1->setLinkImg("https://upload.wikimedia.org/wikipedia/commons/4/4c/Versace_old_logo.svg");
$g1->setInfo("Versace");
array_push($grifes, $g1);

$g2 = new Link();
$g2->setLinkImg("https://cdn.worldvectorlogo.com/logos/vivienne-westwood-1.svg");
$g2->setInfo("Vivienne Westwood");
array_push($grifes, $g2);

$g3 = new Link();
$g3->setLinkImg("https://optica-optima.com/blog/wp-content/uploads/2018/09/logo-alexander-mcqueen.jpg");
$g3->setInfo("Alexander McQueen");
array_push($grifes, $g3);



print "<h1>LISTA DE COISASSS</h1>";

desenhaBotao("Times de Futebol", $times);
desenhaBotao("Paises", $paises);
desenhaBotao("Equipes F1", $equipes);
desenhaBotao("Grifes de Moda", $grifes);


