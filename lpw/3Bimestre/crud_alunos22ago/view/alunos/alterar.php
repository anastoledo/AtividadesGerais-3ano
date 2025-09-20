<?php

require_once(__DIR__ . "/../../model/Aluno.php");
require_once(__DIR__ . "/../../controller/AlunoController.php");

$msgErro = "";
$aluno = null;

if (isset($_POST['txtNome']) && isset($_POST['txtIdade']) && isset($_POST['selEstrang']) && isset($_POST['selCurso'])) {

    //Já clicou no gravar
    $id = $_POST['id']; //chegar por POST
    $nome = trim($_POST['txtNome']) ? trim($_POST['txtNome']) : NULL;
    $idade = is_numeric($_POST['txtIdade']) ? $_POST['txtIdade'] : NULL;
    $estrangeiro = trim($_POST['selEstrang']) ? trim($_POST['selEstrang']) : NULL;
    $idCurso = is_numeric($_POST['selCurso'])  ? $_POST['selCurso'] : NULL;

    //1- Capturar os dados do formulário
    $aluno = new Aluno();
    $aluno->setNome($nome);
    $aluno->setIdade($idade);
    $aluno->setEstrangeiro($estrangeiro);
    $aluno->setId($id);
    $curso = new Curso();
    $curso->setId($idCurso);
    $aluno->setCurso($curso);

    //2-Chamar o controller para alterar
    $alunoCont = new AlunoController();
    $erros = $alunoCont->alterar($aluno);

     if (!$erros) {
         //Redireciona para a listagem
        header("location: listar.php");
    } else{
        //Converte o array de erros para string
        $msgErro = implode("<br>", $erros);
        
    }
}
else {
    //Abriu a página para ver formulário 

    $id = 0;
    if (isset($_GET["id"])) {
        $id = $_GET["id"];

    }

    $alunoCont = new AlunoController();
    $aluno = $alunoCont->buscarPorId($id);

    if (! $aluno) {
        echo "AAAA<br>";
        echo "<a href='listar.php'>Voltar</a>";
        exit;
    }

}


include_once(__DIR__ . "/form.php");