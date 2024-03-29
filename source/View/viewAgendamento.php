<?php $v->layout("_theme"); ?>

<div class="container">

    <style>
        .destaque {
            border: solid 1px black;
        }
    </style>

    <h1><?= $pageTitle ?></h1>
    <form action="<?= url("agendamento"); ?>" method="POST">
        <br>
        <p><?= $msg ?></p><br>

        <!-- DADOS DA CIRURGIA -->

        <div class="fluid-container">
            <div class="text-center">
                <div class="alert alert-success" role="alert">
                    <h4 class="alert-heading">Dados da Cirurgia</h4>
                    <hr>
                </div>
            </div>
        </div>
        <br>
        <div class="form-group">
            <label>Nome da Cirurgia:</label>
            <div class="container">
                <div class="row">
                    <input type="text" id="cirurgia" class="form-control destaque" placeholder="Nome da Cirurgia" name="cirurgia">
                </div>
            </div>
        </div>

        <div class="form-row">
            <div class="col">
                <label>Inicío da Cirurgia:</label><br>
                <input type="date" name="dataInicio">
                <input type="time" name="horaInicio">
            </div>
            <div class="col">
                <label>Fim da Cirurgia:</label><br>
                <input type="date" name="dataFim">
                <input type="time" name="horaFim">
            </div>
        </div>

        <br>
        <div class="form-group">
            <label>Observaçoes:</label>
            <div class="container">
                <div class="row">
                    <input type="text" class="form-control destaque" placeholder="Observações" name="obsCirurgia">
                </div>
            </div>
        </div>
        <br>

        <!-- DADOS DO PACIENTE -->

        <div class="fluid-container">
            <div class="text-center">
                <div class="alert alert-success" role="alert">
                    <h4 class="alert-heading">Dados do paciente</h4>
                    <hr>
                </div>
            </div>
        </div>


        <br>
        <div class="form-group">
            <label>Nome do paciente:</label>
            <div class="container">
                <div class="row">
                    <input id="nomePaciente" type="text" class="form-control destaque" placeholder="Nome do paciente" name="nomePaciente">
                </div>
            </div>
        </div>

        <br>
        <div class="form-row">
            <div class="col">
                <label>CPF:</label>
                <input type="text" class="form-control destaque" placeholder="CPF" name="cpf">
            </div>
            <div class="col">
                <label>Convênio:</label>
                <input type="text" class="form-control destaque" placeholder="Convênio" name="convenio"  disabled>
            </div>
        </div>

        <br>
        <div class="form-row">
            <div class="col">
                <label>Data de nascimento:</label><br>
                <input type="date" class="form-control destaque" name="dataNascimento"  disabled>
            </div>
            <div class="col">
                <label>Telefone:</label><br>
                <input type="tel" class="form-control destaque" placeholder="Telefone" name="telefone"  disabled>
            </div>
            <div class="col">
                <label>Sexo:</label><br>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="opcao1"  disabled>
                    <label class="form-check-label" for="inlineCheckbox1">Feminino</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="opcao2"  disabled>
                    <label class="form-check-label" for="inlineCheckbox2">Masculino</label>
                </div>
            </div>
        </div>

        <!-- DADOS DO MÉDICO -->

        <br>
        <div class="fluid-container">
            <div class="text-center">
                <div class="alert alert-success" role="alert">
                    <h4 class="alert-heading">Dados do médico</h4>
                    <hr>
                </div>
            </div>
        </div>

        <br>
        <div class="form-group">
            <label>Nome do Médico:</label>
            <div class="container">
                <div class="row">
                    <input type="text" id="nomeMedico" class="form-control destaque" placeholder="Nome do Médico" name="nomeMedico">
                </div>
            </div>
        </div>

        <br>
        <div class="form-row">
            <div class="col">
                <label>CRM:</label><br>
                <input type="text" class="form-control destaque" placeholder="CRM" name="dataNascimento"  disabled>
            </div>
            <div class="col">
                <label>Telefone:</label><br>
                <input type="tel" class="form-control destaque" placeholder="Telefone" name="telefone"  disabled>
            </div>
        </div>
        <br>
        <button class="btn btn-lg btn-success">Agendar</button>

    </form>
</div>
<?php $v->start("js"); ?>
<script>
    $("#nomePaciente").autocomplete({

        <?php
        foreach ($pacientes as $p) {
            $nomes[] = '\'' . $p->getNome() . '\'';
        }
        $nomeString = implode(",", $nomes);
        ?>

        source: [<?= $nomeString; ?>],
        change: function(event, ui) {
            if (!ui.item) {
                this.value = '';
            }
        }
    });
</script>

<script>
    $("#nomeMedico").autocomplete({

        <?php
        foreach ($medicos as $p) {
            $nomesMedicos[] = '\'' . $p->getNome() . '\'';
        }
        $nomeString = implode(",", $nomesMedicos);
        ?>

        source: [<?= $nomeString; ?>],
        change: function(event, ui) {
            if (!ui.item) {
                this.value = '';
            }
        }
    });
</script>

<script>
    $("#cirurgia").autocomplete({

        <?php
        foreach ($cirurgias as $p) {
            $nomesCirurgias[] = '\'' . $p->getNome() . '\'';
        }
        $nomeString = implode(",", $nomesCirurgias);
        ?>

        source: [<?= $nomeString; ?>],
        change: function(event, ui) {
            if (!ui.item) {
                this.value = '';
            }
        }
    });
</script>

<?php $v->end("js"); ?>