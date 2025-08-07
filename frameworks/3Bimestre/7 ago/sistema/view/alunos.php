<html>
    <head>
        <title>Cadastro de alunos</title>
    </head>
    <body>
        <form action="../control/alunosControl.php?a=1" method="post">
            <input type='hidden' name='alunos'>
<label for='campo_id'>id</label>
<input type='text' name='campo_id'><br>
<label for='campo_nome'>nome</label>
<input type='text' name='campo_nome'><br>
<label for='campo_idade'>idade</label>
<input type='text' name='campo_idade'><br>
<label for='campo_estrangeiro'>estrangeiro</label>
<input type='text' name='campo_estrangeiro'><br>
<label for='campo_id_curso'>id_curso</label>
<input type='text' name='campo_id_curso'><br>

            <input type='submit' value="Gravar">
        </form>
    </body>
</html>