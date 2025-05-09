<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de filmes</title>
</head>

<body>
    <h2>Dados do filme</h2>
    <form method="POST" action="filme_card.php">
        <input name="nome" placeholder="Informe o nome do filme" />
        <br><br>
        <input name="diretor" placeholder="Informe o diretor(a) do filme" />
        <br><br>
        <input name="ano" placeholder="Informe o ano do filme" />
        <br><br>
        <input name="foto" placeholder="Informe o poster do filme" />
        <br><br>
        <button type="submit">Enviar</button>
    </form>
</body>

</html>
