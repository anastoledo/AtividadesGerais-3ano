
<html>
    <head>
        <title>Lista de Paciente</title>
        <link rel="stylesheet" href="../css/estilos.css">
    </head>
    <body>
        <?php
        require_once("../dao/PacienteDao.php");
        $dao = new pacienteDAO();
        $dados = $dao->listaGeral();
        foreach ($dados as $dado){
           echo $dado['codPac'];
echo $dado['nomePac'];
echo $dado['dataNasc'];
echo $dado['cpf'];
echo $dado['cidade'];
;
        }
        ?>
    </body>
</html>