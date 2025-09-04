
<html>
    <head>
        <title>Lista de Medico</title>
        <link rel="stylesheet" href="../css/estilos.css">
    </head>
    <body>
        <?php
        require_once("../dao/MedicoDao.php");
        $dao = new medicoDAO();
        $dados = $dao->listaGeral();
        foreach ($dados as $dado){
           echo $dado['codMed'];
echo $dado['nomeMed'];
echo $dado['dataNasc'];
echo $dado['cpf'];
echo $dado['cidade'];
echo $dado['especialidade'];
;
        }
        ?>
    </body>
</html>