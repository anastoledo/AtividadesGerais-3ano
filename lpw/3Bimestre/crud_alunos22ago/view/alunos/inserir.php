<?php

require_once(__DIR__ . "/../../model/Aluno.php");
require_once(__DIR__ . "/../../controller/AlunoController.php");

$msgErro = "";
$aluno = null;


//Recebe os dados do formulário
if (isset($_POST['txtNome']) && isset($_POST['txtIdade']) && isset($_POST['selEstrang']) && isset($_POST['selCurso'])) {

    //Usuário já clicou no gravar
    $nome = trim($_POST['txtNome']) ? trim($_POST['txtNome']) : NULL;
    $idade = is_numeric($_POST['txtIdade']) ? $_POST['txtIdade'] : NULL;
    $estrangeiro = trim($_POST['selEstrang']) ? trim($_POST['selEstrang']) : NULL;
    $idCurso = is_numeric($_POST['selCurso'])  ? $_POST['selCurso'] : NULL;

    //Criar um objeto Aluno para persistí-lo
    $aluno = new Aluno();
    $aluno->setId(0); //Novo aluno, então o ID é 0
    $aluno->setNome($nome);
    $aluno->setIdade($idade);
    $aluno->setEstrangeiro($estrangeiro);
    $curso = new Curso();
    $curso->setId($idCurso);
    $aluno->setCurso($curso);

    //Chama o DAO para salvar o objeto Aluno
    $alunoCont = new AlunoController();
    $erros = $alunoCont->inserir($aluno);

    if (!$erros) {
         //Redireciona para a listagem
        header("location: listar.php");
    } else{
        //Converte o array de erros para string
        $msgErro = implode("<br>", $erros);
        
    }

}

include_once(__DIR__ . "/form.php");

?>