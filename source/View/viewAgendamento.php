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

        <!--
        <div class="form-group">
            <label>Inicío da Cirurgia:</label>
            <div class="container">
                <div class="row">
                    <input type="date" name="dataInicio" />
                    <input type="time" name="horaInicio" />
                </div>
            </div>
        </div>

        <div class="form-group">
            <label>Fim da Cirurgia:</label>
            <div class="container">
                <div class="row">
                    <input type="date" name="dataInicio" />
                    <input type="time" name="horaInicio" />
                </div>
            </div>
        </div>
            -->

        <div class="form-group">
            <label>Nome da Cirurgia:</label>
            <div class="container">
                <div class="row">
                    <input type="text" class="form-control destaque" placeholder="Nome da Cirurgia" name="cirurgia">
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
                    <input id="tags" type="text" class="form-control destaque" placeholder="Nome do paciente" name="nomePaciente">
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
                <input type="text" class="form-control destaque" placeholder="Convênio" name="convenio">
            </div>
        </div>

        <br>
        <div class="form-row">
            <div class="col">
                <label>Data de nascimento:</label><br>
                <input type="date" class="form-control destaque" name="dataNascimento">
            </div>
            <div class="col">
                <label>Telefone:</label><br>
                <input type="tel" class="form-control destaque" placeholder="Telefone" name="telefone">
            </div>
            <div class="col">
                <label>Sexo:</label><br>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="opcao1">
                    <label class="form-check-label" for="inlineCheckbox1">Mulher</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="opcao2">
                    <label class="form-check-label" for="inlineCheckbox2">Homen</label>
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
                    <input type="text" class="form-control destaque" placeholder="Nome do Médico" name="nomeMedico">
                </div>
            </div>
        </div>

        <br>
        <div class="form-row">
            <div class="col">
                <label>CRM:</label><br>
                <input type="text" class="form-control destaque" placeholder="CRM" name="dataNascimento">
            </div>
            <div class="col">
                <label>Telefone:</label><br>
                <input type="tel" class="form-control destaque" placeholder="Telefone" name="telefone">
            </div>
        </div>
        <br>
        <button>Agendar</button>

    </form>
</div>
<?php $v->start("js"); ?>
<script>
    $("#tags").autocomplete({

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

    <script type='text/javascript'>
        $(document).ready(function() {
            $("input[name='nomePaciente']").blur(function() {
                var nomePaciente = $("input[name='nomePaciente']");
                var $cpf = $("input[name='cpf']");
                var $convenio = $("input[name='convenio']");
            });
        });
    </script>
<?php $v->end("js"); ?>