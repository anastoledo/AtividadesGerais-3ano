<?php

include_once(__DIR__ . "/form.php");
require_once(__DIR__ . "/../../model/Aluno.php");
require_once(__DIR__ . "/../../controller/AlunoController.php");


//Recebe os dados do formulário
if (isset($_POST['txtNome']) && isset($_POST['txtIdade']) && isset($_POST['selEstrang']) && isset($_POST['selCurso'])) {

    $nome = $_POST['txtNome'];
    $idade = $_POST['txtIdade'];
    $estrangeiro = $_POST['selEstrang'];
    $idCurso = $_POST['selCurso'];

    //Criar um objeto Aluno para persistí-lo
    $aluno = new Aluno();
    $aluno->setNome($nome);
    $aluno->setIdade($idade);
    $aluno->setEstrangeiro($estrangeiro);
    $curso = new Curso();
    $curso->setId($idCurso);
    $aluno->setCurso($curso);

    print_r($aluno);

    //Chama o DAO para salvar o objeto Aluno
    $alunoCont = new AlunoController();
    $alunoCont->inserir($aluno);

    //Redireciona para a listagem
    header("location: listar.php");



}

?>