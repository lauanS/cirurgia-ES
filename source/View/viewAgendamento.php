<?php $v->layout("_theme"); ?>

<h1><?= $pageTitle ?></h1>
<form action="<?= url("agendamento"); ?>" method="POST">
    <label>Inicio da Cirurgia: </label> <br>
    <input type="date" name="dataInicio" />
    <input type="time" name="horaInicio" />
    <br><br>
    <label>Fim da Cirurgia: </label> <br>
    <input type="date" name="dataFim" />
    <input type="time" name="horaFim" />
    <br><br>
    <label>Convênio: </label> <br>
    <input type="text" placeholder="Convênio" name="convenio" />
    <br><br>
    <label>Observações: </label> <br>
    <input type="text" placeholder="Observações" name="obsCirurgia" />

    <br><br>
    <label>Nome do Paciente: </label> <br>
    <input type="text" placeholder="Nome do Paciente" name="nomePaciente" />
    <br><br>
    <label>Nome do Médico: </label> <br>
    <input type="text" placeholder="Nome do Médico" name="nomeMedico" />
    <br><br>
    <label>Nome da Cirurgia: </label> <br>
    <input type="text" placeholder="Cirurgia" name="cirurgia" />
    <br><br>
    <button>Agendar</button>
</form>