<html>
    <head>
        <title>Cadastro de paciente</title>
        <link rel="stylesheet" href="../css/estilos.css">
    </head>
    <body>
        <form action="../control/pacienteControl.php?a=1" method="post">
        <h1>Cadastro de paciente</h1>
            <label for='codPac'>codPac</label>
<input type='text' name='codPac'><br>
<label for='nomePac'>nomePac</label>
<input type='text' name='nomePac'><br>
<label for='dataNasc'>dataNasc</label>
<input type='text' name='dataNasc'><br>
<label for='cpf'>cpf</label>
<input type='text' name='cpf'><br>
<label for='cidade'>cidade</label>
<input type='text' name='cidade'><br>

             <button type="submit">Enviar</button>
        </form>
    </body>
</html>
