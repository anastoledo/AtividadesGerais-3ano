<?php 

require_once("modelo/Filme.php");

$nome = $_POST["nome"];

$diretor = $_POST["diretor"];

$ano = $_POST["ano"];

$foto = $_POST["foto"];

$filme = new Filme($nome, $diretor, $ano, $foto);
echo $filme;

echo "<a href='filme_formulario.php'>CLIQUE PARA CADATRAR OUTRO FILME</a>";