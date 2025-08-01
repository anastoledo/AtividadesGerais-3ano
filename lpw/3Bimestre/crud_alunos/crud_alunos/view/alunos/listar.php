<?php 

//Mostrar erros do PHP
ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once(__DIR__ . "/../../controller/AlunoController.php");

//CHAMA CONTROLLER PARA OBTER A LSITA DE ALUNOS
$alunoCont = new AlunoController();
$lista = $alunoCont->listar();

//print_r($lista);


//INCLUIR O HEADER
include_once(__DIR__ . "/../include/header.php");


?>


<h3>Listagem de alunos</h3>

<div>
    <a href="inserir.php">Para inserir os dados!</a>
</div>

<table border="1">

<!-- Cabeçalho -->

<tr>
    <th>ID</th>
    <th>Nome</th>
    <th>Idade</th>
    <th>Estrangeiro</th>
    <th>Curso</th>
    <th>Editar</th>
    <th>Excluir</th>
</tr>

<!--Dados-->

<?php foreach ($lista as $aluno): ?> 

    <tr>
        <td><?= $aluno->getId()?></td>
        <td><?= $aluno->getNome()?></td>
        <td><?= $aluno->getIdade()?></td>
        <td><?= $aluno->getEstrangeiroTexto()?></td>
        <td><?= $aluno->getCurso()->getNome() . " (" . $aluno->getCurso()->getTurnoTexto() . ")"?></td>
    
    </tr>
<?php endforeach; ?>



</table>

<?php 
include_once(__DIR__ . "/../include/footer.php");

//INCLUIR FOOTER

?>