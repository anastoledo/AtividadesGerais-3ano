<html>
    <head>
        <title>Cadastro de cursos</title>
    </head>
    <body>
        <form action="../control/cursosControl.php?a=1" method="post">
            <input type='hidden' name='cursos'>
<label for='campo_id'>id</label>
<input type='text' name='campo_id'><br>
<label for='campo_nome'>nome</label>
<input type='text' name='campo_nome'><br>
<label for='campo_turno'>turno</label>
<input type='text' name='campo_turno'><br>

            <input type='submit' value="Gravar">
        </form>
    </body>
</html>