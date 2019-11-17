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
    <div class="col-md-6">
        <table class="table">
            <thead>
            <tr>
                <th>Medico</th>
                <th>Paciente</th>
                <th>Cirurgia</th>
                <th>Data de Inicio</th>
                <th>Previsão de Término</th>
                <th>Observação</th>
            </tr>
            </thead>
            <tbody>
            <?php
                if(!empty($agendamentos)):
                    foreach($agendamentos as $agendamento): ?>
                        <tr>
                            <td><?= $agendamento->getMedico()->getNome() ?> </td>
                            <td><?= $agendamento->getPaciente()->getNome() ?> </td>
                            <td><?= $agendamento->getCirurgia()->getNome() ?> </td>
                            <td><?= $agendamento->getDataInicio() ?> </td>
                            <td><?= $agendamento->getDataFim() ?> </td>
                            <td><?= $agendamento->getDescricao() ?> </td>
                        </tr>
                    <?php endforeach;
                endif;
            ?>
            </tbody>
        </table>
    </div>

</section>



<?php $v->start("js"); ?>

<?php $v->end("js"); ?>

