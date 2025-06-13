<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema alunos de Monster High </title>
</head>
<body>

<h1>Registrar estudantes</h1>

    <!--form action="" method="POST" onsubmit="return validarCampos()"-->

    <form action="" method="POST">
        <div style="margin-bottom: 10px;">
            <label for="nome">Informe o nome do aluno</label>
            <input name="nome" type="text" id="nome" value="<?=$nome?>"/>
        </div>

        <div style="margin-bottom: 10px;">
            <label for="especie" >Informe a especie do aluno</label>
            <select name="especie" id="especie">
                <option value="">---Selecione---</option>
                <option value="A" <?php if($especie == "A") echo "selected";?>>Animal</option> <!--($genero == 'D' ? 'selected' : '') versão if ternário depois do ? é verdadeiro e depois de : é falso-->
                <option value="M" <?php if($especie == "M") echo "selected";?>>Morto-vivo</option>
                <option value="O" <?php if($genero == "O") echo "selected";?>>Outro</option>
            </select>
        </div>

        <div style="margin-bottom: 10px;">
            <label for="origem">Informe a origem do aluno</label>
            <input name="origem" type="text" id="origem" value="<?=$origem?>"/>
        </div>

        <div style="margin-bottom: 10px;">
            <label for="habilidade">Informe a habilidade especial do aluno</label>
            <input name="habilidade" type="text" id="habilidade" value="<?=$habilidadeEspecial?>"/>
        </div>

        <div style="margin-bottom: 10px;">
            <label for="genero" >Informe o gênero do aluno</label>
            <select name="genero" id="genero">
                <option value="">---Selecione---</option>
                <option value="F" <?php if($especie == "F") echo "selected";?>>Feminino</option> <!--($genero == 'D' ? 'selected' : '') versão if ternário depois do ? é verdadeiro e depois de : é falso-->
                <option value="M" <?php if($especie == "M") echo "selected";?>>Masculino</option>
            </select>
        </div>

        <div style="margin-bottom: 10px;">
            <label for="situacao" >Informe a situacao do aluno</label>
            <select name="situacao" id="situacao">
                <option value="">---Selecione---</option>
                <option value="A" <?php if($situacao == "A") echo "selected";?>>Ativa</option> <!--($genero == 'D' ? 'selected' : '') versão if ternário depois do ? é verdadeiro e depois de : é falso-->
                <option value="R" <?php if($situacao == "R") echo "selected";?>>Respouso eterno</option>
                <option value="T" <?php if($situacao == "T") echo "selected";?>>Transferido</option>
                <option value="E" <?php if($situacao == "E") echo "selected";?>>Escondido nas sombras</option>
            </select>
        </div>

        <div style="margin-bottom: 10px;">
            <label for="imagem">Adicione a imagem do aluno (link)</label>
            <input name="imagem" type="text" id="imagem" value="<?=$img?>"/>
        </div>


        <div style="margin-bottom: 10px;">
            <button type="submit">Registrar</button>
        </div>

    </form>
    
</body>
</html>