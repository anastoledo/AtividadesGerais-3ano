<?php

require_once(__DIR__ . "/../../model/Aluno.php");
require_once(__DIR__ . "/../../controller/AlunoController.php");

$msgErro = "";
$aluno = null;


//1 - receber o id do aluno
//$id = isset($_GET['id']) ? $_GET['id'] : 0;
$id = 0;
if (isset($_GET['id'])) {
  $id = $_GET['id'];
}

// 2 - Chamar o controller para excluir o aluno
$alunoCont = new AlunoController();
$aluno = $alunoCont->buscarPorId($id);

if ($aluno) {
  $erros = $alunoCont->excluir($aluno->getId());

// 3 - Verficar se deu erro
 if (!$erros) {
         //Redireciona para a listagem
        //3.1 - Se não deu erro, redirecionar para a lista de alunos
        header("location: listar.php");
        exit;
    } else{
        //Converte o array de erros para string
          //3.2 - Se deu erro, exibir o erro na própria página
        $msgErro = implode("<br>", $erros);
        echo $msgErro;
        
  } 

}
else {
  //4 - Se não encontrou o aluno, exibir mensagem de erro
  echo "Aluno não encontrado!";
  echo "<br><a href='listar.php'>Voltar</a>";
  exit;
}

