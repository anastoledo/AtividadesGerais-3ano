<?php 

function desenhaLinha($num, $nome, $cor){

    print "<tr>";
    print "<td style='background-color: $cor'>" . $num . "</td>";
    print "<td style='background-color: $cor'>" . $nome . "</td>";
    print "</tr>";
}

print "<h1> Seleção 1994 </h1>";

print "<table border='1'>";
print "<tr>";
print "<th> Número </th>";
print "<th> Nome </th>";
print "</tr>";

desenhaLinha(1, "Tafarel", 'yellow');
desenhaLinha(2, "Jorginho", 'green');
desenhaLinha(5, "Mauro Silva", 'yellow');
desenhaLinha(6, "Branco", 'green');
desenhaLinha(7, "Bebeto", 'yellow');
desenhaLinha(8, "Dunga", 'green');
desenhaLinha(9, "Zinho", 'yellow');
desenhaLinha(11, "Romário", 'green');
desenhaLinha(13, "Aldair", 'yellow');
desenhaLinha(15, "Márcio Santos ", 'green');
desenhaLinha(17, "Mazinho", 'yellow');

print "</table>";