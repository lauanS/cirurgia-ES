<?php $v->layout("_theme"); ?>

<h1><?= $pageTitle ?></h1>
<form action="<?= url("visualizar"); ?>" method="POST">
    <label>Inicio da Cirurgia: </label> <br>
    <input type="date" name="dataInicio" />
    <input type="time" name="horaInicio" />
    <br><br>
    <label>Fim da Cirurgia: </label> <br>
    <input type="date" name="dataFim" />
    <input type="time" name="horaFim" />

    <button class="btn btn-lg btn-primary">buscar por range de data</button>
</form>

<section>
    <?php
    if(!empty($agendamentos)):
        foreach($agendamentos as $agendamento): ?>
            <article>
                <h3>--</h3>
                <p><?= $agendamento->getMedico()->getNome() ?></p>
                <p><?= $agendamento->getPaciente()->getNome() ?></p>
                <p><?= $agendamento->getCirurgia()->getNome() ?></p>
                <p><?= $agendamento->getDataInicio() ?></p>
                <p><?= $agendamento->getDataFim() ?></p>
                <p><?= $agendamento->getDescricao() ?></p>
            </article>
        <?php endforeach;
    endif;
    ?>
</section>

<?php $v->start("js"); ?>

<?php $v->end("js"); ?>
