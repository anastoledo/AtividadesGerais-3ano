<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de pilotos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <h2>Dados do piloto</h2>
    <form method="POST" action="piloto_card.php">
  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Informe o nome do piloto</label>
    <div class="col-sm-10">
      <input name="nome" type="text" class="form-control" id="inputEmail3">
    </div>
  </div>
  <div class="row mb-3">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Informe a equipe do piloto</label>
    <div class="col-sm-10">
      <input name="equipe" type="text" class="form-control" id="inputPassword3">
    </div>
  </div>
  <div class="row mb-3">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Informe a pontuação do piloto no campeonato</label>
    <div class="col-sm-10">
      <input name="pontuacao" type="text" class="form-control" id="inputPassword3">
    </div>
  </div>
  <div class="row mb-3">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Informe a nacionalidade do piloto</label>
    <div class="col-sm-10">
      <input name="nacionalidade" type="text" class="form-control" id="inputPassword3">
    </div>
  </div>
  <div class="row mb-3">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Informe o link da foto do piloto</label>
    <div class="col-sm-10">
      <input name="foto" type="text" class="form-control" id="inputPassword3">
    </div>
  </div>
  

  <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
</body>

</html>
