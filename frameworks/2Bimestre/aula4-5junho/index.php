<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MVC</title>
</head>
<body>

    <form action="creator.php" method="POST">

    <h1>Easy MVC</h1>
    <h2>Configuração</h2>

        <div style="margin-bottom: 10px;">
            <label for="servidor">Informe o servidor</label>
            <input name="servidor" type="text" id="servidor" required/>
        </div>

        <div style="margin-bottom: 10px;">
            <label for="banco">Informe o banco de dados</label>
            <input name="banco" type="text" id="banco" required/>
        </div>

        <div style="margin-bottom: 10px;">
            <label for="usuario">Informe o usuario</label>
            <input name="usuario" type="text" id="usuario" required/>
        </div>

        <div style="margin-bottom: 10px;">
            <label for="senha">Informe a senha</label>
            <input name="senha" type="password" id="senha"/>
        </div>

        <div style="margin-bottom: 10px;">
            <button type="submit">Enviar</button>
        </div>

    </form>

</body>
</html>
