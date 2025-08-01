<?php

require_once(__DIR__ . "/../../controller/CursoController.php");

$cursoCont = new CursoController();
$cursos = $cursoCont->listar();

include_once(__DIR__ . "/../include/header.php");

?>


<h3>INSERIR ALUNOS</h3>

<form  method="POST" action="">

<div>
    <label for="txtNome">Nome:</label>
    <input type="text" name="txtNome" id="nome" placeholder="Digite o nome do aluno" >
</div>

<div>
    <label for="txtIdade">Idade:</label>
    <input type="number" name="txtIdade" id="idade" placeholder="Digite a idade do aluno" >
</div>

<div>
    <label for="selEstrang">Estrangeiro:</label>
    <select name="selEstrang" id="estrangeiro">
        <option value="">--</option>
        <option value="N">NÃO</option>
        <option value="S">SIM</option>
    </select>
</div>

<div>
    <label for="selCurso">Curso:</label>
    <select name="selCurso" id="curso">
        <option value="">--</option>
        <?php foreach ($cursos as $curso): ?>

            <option value="<?= $curso->getId() ?>"><?= $curso->getNome() . " (" . $curso->getTurnoTexto() . ")" ?></option>

        <?php endforeach; ?>
        
    </select>
</div>

<div>
    <button type="submit">Enviar</button>
</div>

</form>






<?php

include_once(__DIR__ . "/../include/footer.php");

?>