
<html>
    <head>
        <title>Lista de Consulta</title>
        <link rel="stylesheet" href="../css/estilos.css">
    </head>
    <body>
        <?php
        require_once("../dao/ConsultaDao.php");
        $dao = new consultaDAO();
        $dados = $dao->listaGeral();
        foreach ($dados as $dado){
           echo $dado['codCons'];
echo $dado['codMed'];
echo $dado['codPac'];
echo $dado['data'];
echo $dado['hora'];
;
        }
        ?>
    </body>
</html>