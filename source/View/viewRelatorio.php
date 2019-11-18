<?php $v->layout("_theme"); ?>

<div class="container">
    <h1><?= $pageTitle ?></h1>
    <form action="<?= url("relatorio"); ?>" method="POST">

        <br>
        <div class="form-group">
            <label>Inicio da Cirurgia:</label>
            <div class="container">
                <div class="row">
                    <input type="date" name="dataInicio" />
                    <input type="time" name="horaInicio" />
                </div>
            </div>
        </div>

        <br>
        <div class="form-group">
            <label>Fim da Cirurgia:</label>
            <div class="container">
                <div class="row">
                    <input type="date" name="dataFim" />
                    <input type="time" name="horaFim" />
                </div>
            </div>
        </div>

        <br>
        <button class="btn btn-lg btn-success">Gerar Relatório</button>
    </form>

    <br><br>
    <section>
        <div class="col-md-6">
            <table class="table">
                <thead>
                    <tr>
                        <th>Medico</th>
                        <th>Paciente</th>
                        <th>Cirurgia</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if (!empty($relatorio)) :
                        foreach ($relatorio as $DTO) : ?>
                            <td><?= $DTO->getCirurgia() ?> </h3>
                            <td><?= $DTO->getMedico() ?></p>
                            <td><?= $DTO->getPacientes() ?></p>
                        <?php endforeach;
                        endif;
                        ?>
                </tbody>
            </table>
        </div>

    </section>


</div>


<?php $v->start("js"); ?>

<?php $v->end("js"); ?>