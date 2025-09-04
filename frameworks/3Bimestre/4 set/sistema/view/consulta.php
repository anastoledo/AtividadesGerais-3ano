<html>
    <head>
        <title>Cadastro de consulta</title>
        <link rel="stylesheet" href="../css/estilos.css">
    </head>
    <body>
        <form action="../control/consultaControl.php?a=1" method="post">
        <h1>Cadastro de consulta</h1>
            <label for='codCons'>codCons</label>
<input type='text' name='codCons'><br>
<label for='codMed'>codMed</label>
<input type='text' name='codMed'><br>
<label for='codPac'>codPac</label>
<input type='text' name='codPac'><br>
<label for='data'>data</label>
<input type='text' name='data'><br>
<label for='hora'>hora</label>
<input type='text' name='hora'><br>

             <button type="submit">Enviar</button>
        </form>
    </body>
</html>
