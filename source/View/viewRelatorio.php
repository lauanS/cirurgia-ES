<?php $v->layout("_theme"); ?>

<h1><?= $pageTitle ?></h1>
<form action="<?= url("relatorio"); ?>" method="POST">
    <label>Inicio da Cirurgia: </label> <br>
    <input type="date" name="dataInicio" />
    <input type="time" name="horaInicio" />
    <br><br>
    <label>Fim da Cirurgia: </label> <br>
    <input type="date" name="dataFim" />
    <input type="time" name="horaFim" />

    <button class="btn btn-lg btn-primary">Gerar Relatório</button>
</form>


<section>
    <?php
    if(!empty($relatorio)):
        foreach($relatorio as $DTO): ?>
            <article>
                <h3><?= $DTO->getCirurgia() ?> </h3>
                <p><?= $DTO->getMedico() ?></p>
                <p><?= $DTO->getPacientes() ?></p>
            </article>
        <?php endforeach;
    endif;
    ?>
</section>

<?php $v->start("js"); ?>
<script>
    $(function () {
        alert("a");
    });
</script>
<?php $v->end("js"); ?>
