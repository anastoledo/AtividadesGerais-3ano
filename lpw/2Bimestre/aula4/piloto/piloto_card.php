<?php 

require_once("modelo/Piloto.php");


$foto = $POST_["foto"];

$nome = $_POST["nome"];

$equipe = $_POST["equipe"];

$idade = $_POST["idade"];

$nacionalidade = $_POST["nacionalidade"];


echo "<link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css' rel='stylesheet'>";

$piloto = new Piloto($nome,$equipe,$idade,$nacionalidade,$foto);
echo $piloto;

echo "<a class='btn btn-primary' href='piloto_formulario.php' role='button'>Registrar outro piloto</a>";
