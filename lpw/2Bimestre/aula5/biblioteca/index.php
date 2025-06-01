<?php 

require_once("util/Conexao.php");

$con = Conexao::getConexao();
//print_r($con);

//Buscar os livros já salvos na base de dados
$sql =  "SELECT * FROM livros";
$stm = $con->prepare($sql);
$stm->execute();
$livros = $stm->fetchAll();
//echo "<pre>" . print_r($livros, true) . "</pre>";
$msgErro = "";

//Verificar se o usuário já clicou no registrar
if(isset($_POST["titulo"])){

    //Obter os valores digitados pelo usuário
    $titulo = trim($_POST["titulo"]); //Vai tirar os espaços em branco
    $genero = $_POST["genero"];
    $qtdPag = $_POST["paginas"];
    $autor = $_POST["autor"];

    //Validar os dados
    $erros = array();

    if(! $titulo ){
        array_push($erros, 'Informe o título!');
    }
     if(strlen($titulo) < 3 || strlen($titulo) > 50){

        array_push($erros, 'O título precisa de ao menos 3 caracteres e no máximo 50');
    }    

    if(! $autor ){
        array_push($erros, 'Informe o autor!');
    }

    if(! $genero ){
        array_push($erros, 'Informe o gênero!');
    }

    if(! $qtdPag ){
        array_push($erros, 'Informe o número de páginas!');
    }
     if ($qtdPag <= 0 ){
        array_push($erros, 'O livro precisa ter ao menos 1 página');
    }

    //Verificar se já existe o livro
    $sql = "SELECT * FROM livros WHERE titulo = ?";
    $stm = $con->prepare($sql);
    $stm->execute([$titulo]);
    $livroExiste =  $stm->fetchAll();
    if(count($livroExiste) > 0){
    array_push($erros, 'Já existe um livro com esse título');
    }

    if(count($erros) == 0){
        //Inserir as informações na base de dados
        $sql = "INSERT INTO livros (titulo, genero, qtd_paginas, autor)
        VALUES (?,?,?,?)";
        $stm = $con->prepare($sql);
        $stm->execute(array($titulo, $genero, $qtdPag,$autor));

        //Redirecionar para a mesma página a fim de limpar o buffer do navegador
        header("location: index.php");

    }
    else{

        $msgErro = implode("<br>", $erros); //ele vai transformar o array em e string e vai separar a escrita
        //echo $msgErro;
    }

}

?>


<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de livros</title>
</head>

<body>

    <h1>Listagem</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Título</th>
            <th>Gênero</th>
            <th>Páginas</th>
            <th>Autor</th>
            <th>Excluir</th>
        </tr>

        <?php foreach($livros as $l) : ?>   <!-- O : é pra não usar chave -->

            <tr>
                <td><?= $l["id"] ?></td>   <!-- O igual é basicamente para escrever sem escrever php -->
                <td><?= $l["titulo"] ?></td> 

                <td>
                <?php
                switch ($l["genero"]) {
                    case 'D':
                        echo "Drama";
                        break;
                    case 'F':
                        echo "Ficção";
                        break;
                    case 'R':
                        echo "Romance";
                        break;
                    case 'O':
                        echo "Outro";
                        break;
                }
                 ?>
                </td> 
                <td><?= $l["qtd_paginas"] ?></td> 
                <td><?= $l["autor"] ?></td> 
                <td>
                    <a href='excluir.php?id=<?=$l["id"]?>' onclick="return confirm('Confirma a exclusão?')"><button>Excluir</button></a>  <!-- dentro das tags usar aspas simples '' -->
                </td>
            </tr>


        <?php endforeach; ?>

    </table>

    <h1>Formulário</h1>

    <!--form action="" method="POST" onsubmit="return validarCampos()"-->

    <form action="" method="POST">
        <div style="margin-bottom: 10px;">
            <label for="titulo">Informe o título</label>
            <input name="titulo" type="text" id="titulo"/>
        </div>

        <div style="margin-bottom: 10px;">
            <label for="autor">Informe o autor</label>
            <input name="autor" type="text" id="autor"/>
        </div>

        <div style="margin-bottom: 10px;">
            <label for="genero">Informe o gênero</label>
            <select name="genero" id="genero">
                <option value="">---Selecione---</option>
                <option value="D">Drama</option>
                <option value="F">Ficção</option>
                <option value="R">Romance</option>
                <option value="O">Outro</option>

            </select>
        </div>

        <div style="margin-bottom: 10px;">
            <label for="paginas">Informe o número de páginas</label>
            <input name="paginas" type="number" id="paginas"/>
        </div>

        <div style="margin-bottom: 10px;">
            <button type="submit">Registrar</button>
        </div>

    </form>

    <div id="mensagem" style="color: red;">
        <?= $msgErro ?>
    </div>

    <script src="js/validacao.js"></script>
    
</body>
</html>
