<?php  
require_once("util/Conexao.php");

$con = Conexao::getConexao();
//print_r($con);

//Vefiricar ID
if (! isset($_GET['id'])) {
    echo "ID do livro não informado";
    echo "<br>";
    echo "<a href='index.php'><button>Voltar</button></a>";
}
else {
    $id = $_GET["id"];

        $sql = "DELETE FROM livros WHERE id = ?";
        // $con = Conexao::getCon(); -> da pra usar isso ao inves de fazer require_once
        $stm = $con->prepare($sql);
        $stm->execute(array($id));

        //Redirecionar para a mesma página a fim de limpar o buffer do navegador
        header("location: index.php");
 
}


