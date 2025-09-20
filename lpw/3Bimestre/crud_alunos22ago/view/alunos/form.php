<?php

require_once(__DIR__ . "/../../controller/CursoController.php");

$cursoCont = new CursoController();
$cursos = $cursoCont->listar();

include_once(__DIR__ . "/../include/header.php");

?>


<h3 class="mt-3"><?= $aluno && $aluno->getId() > 0 ? 'ALTERAR' : 'INSERIR' ?> ALUNO</h3>

<div class="row">

    <div class="col-6">
    

        <form  method="POST" action="">

        <div>
            <label for="txtNome">Nome:</label class>
            <input type="text" name="txtNome" id="nome" placeholder="Digite o nome do aluno" class="form-control" value="<?= $aluno ? $aluno->getNome() : '' ?>" >
        </div>

        <div>
            <label for="txtIdade" class="form-label">Idade:</label>
            <input type="number" name="txtIdade" id="idade" placeholder="Digite a idade do aluno" class="form-control"  value="<?= $aluno ? $aluno->getIdade() : '' ?>">
        </div>

        <div>
            <label for="selEstrang" class="form-label">Estrangeiro:</label>
            <select name="selEstrang" id="estrangeiro" class="form-select">
                <option value="">--</option>
                <option value="N" <?= ($aluno && $aluno->getEstrangeiro() == 'N') ? 'selected' : '';?>>NÃO</option> <!-- usar o = (shorttag) ou php mas com o echo -->
                <option value="S" <?= ($aluno && $aluno->getEstrangeiro() == 'S') ? 'selected' : '';?>>SIM</option>
            </select>
        </div>

        <div>
            <label for="selCurso" class="form-label">Curso:</label>
            <select name="selCurso" id="curso" class="form-select">
                <option value="">--</option>
                <?php foreach ($cursos as $curso): ?>

                    <option value="<?= $curso->getId() ?>" <?php 
                    if ($aluno && $aluno->getCurso()->getId()) {echo "selected";}?> ><?= $curso->getNome() . " (" . $curso->getTurnoTexto() . ")" ?></option> 

                <?php endforeach; ?>
                
            </select>
        </div>

        <div>
            <input type="hidden" name="id" class="form-control" value="<?= $aluno ? $aluno->getId() : 0 ?>">
        </div>

        <div class="mt-3">
            <button type="submit"  class="btn btn-primary">Enviar</button>
        </div>

        </form>

    </div> <!-- col-6 -->

    <div class="col-6 ">

    <?php if ($msgErro): ?>

        <div style="color: red;" class="alert alert-danger"  > 
            <?= $msgErro ?>
        </div>

    <?php endif; ?>

    </div> <!-- col-6 -->

</div> <!-- row -->


<div class="mt-3">
    <a href="listar.php" class="btn btn-danger">Voltar</a>
</div>



<?php

include_once(__DIR__ . "/../include/footer.php");

?>