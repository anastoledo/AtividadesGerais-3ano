<html>
    <head>
        <title>Cadastro de medico</title>
        <link rel="stylesheet" href="../css/estilos.css">
    </head>
    <body>
        <form action="../control/medicoControl.php?a=1" method="post">
        <h1>Cadastro de medico</h1>
            <label for='codMed'>codMed</label>
<input type='text' name='codMed'><br>
<label for='nomeMed'>nomeMed</label>
<input type='text' name='nomeMed'><br>
<label for='dataNasc'>dataNasc</label>
<input type='text' name='dataNasc'><br>
<label for='cpf'>cpf</label>
<input type='text' name='cpf'><br>
<label for='cidade'>cidade</label>
<input type='text' name='cidade'><br>
<label for='especialidade'>especialidade</label>
<input type='text' name='especialidade'><br>

             <button type="submit">Enviar</button>
        </form>
    </body>
</html>
