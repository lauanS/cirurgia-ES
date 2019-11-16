<?php

namespace Source\Controller;

/* Classes do Modelo */
use Source\Model\Medico;
use Source\Model\Paciente;
use Source\Model\Cirurgia;

/* Render das views */
use League\Plates\Engine;

class AgendamentoController
{
    private $view;
    private $medico;
    private $paciente;
    private $cirurgia;
    private $agendamento;
    public function __construct()
    {
        $this->view = Engine::create(__DIR__."/../View", "php");
        $this->medico = new Medico();
        $this->paciente = new Paciente();
        $this->cirurgia = new Cirurgia();
    }

    public function home($data): void
    {
        echo $this->view->render("home", [
            "title" => "Home | " . URL_BASE,
            "pageTitle"=> "Home",
            "medicos" => [$this->medico->buscaTodos()]

        ]);
    }

    public function agendamento($data): void
    {
        echo $this->view->render("viewAgendamento", [
            "title" => "Home | " . URL_BASE,
            "pageTitle"=> "Agendamento"
        ]);
    }

    public function agendar($data): void
    {
        $nomePaciente = trim($_POST['nomePaciente']);
        $convenio = trim($_POST['convenio']);

        $nomeMedico = trim($_POST['nomeMedico']);

        $nomeCirurgia = trim($_POST['cirurgia']);
        $obs = trim($_POST['obsCirurgia']);

        $dataInicio = $_POST['dataInicio'];
        $dataFim = $_POST['dataFim'];

        $horaInicio = $_POST['horaInicio'];
        $horaFim = $_POST['horaFim'];

        if (!(empty($nomePaciente) or empty($nomeMedico) or empty($nomeCirurgia)))
        {
            $paciente = $this->paciente->buscaPorNome($nomePaciente);
            $medico = $this->medico->buscaPorNome($nomeMedico);
            $cirurgia = $this->cirurgia->buscaPorNome($nomeCirurgia);


            echo "<p>Paciente</p>";
            var_dump($paciente);
            echo "<p>Medico</p>";
            var_dump($medico);
            echo "<p>cirurgia</p>";
            var_dump($cirurgia);
        }

        $dateTimeInicio = convertDateTime($dataInicio, $horaInicio);
        $dateTimeFim = convertDateTime($dataFim, $horaFim);

        echo "<p>dateTime</p>";
        var_dump($dateTimeInicio);
        // echo "Agendado!".$nomePaciente;
    }



    public function errou($data): void
    {
        echo "<h1>Ops, Erros {$data["errcode"]}</h1>";
        var_dump($data);
    }

}