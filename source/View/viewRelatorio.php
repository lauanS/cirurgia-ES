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

    <button>Gerar Relatório</button>
</form>

<section>
    <?php foreach($relatorio as $cirurgia => $value){ ?>
        <article>
            <h3><?= $cirurgia ?> </h3>
            <p><?= $relatorio[$cirurgia][0] ?></p>
            <p><?= $relatorio[$cirurgia][1] ?></p>
        </article>
    <?php } ?>
</section>