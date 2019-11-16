<?php

namespace Source\Controller;

/* Classes do Modelo */
use Source\Model\Medico;
use Source\Model\Paciente;
use Source\Model\Cirurgia;
use Source\Model\Agendamento;

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
        $cirurgias = $this->cirurgia->buscaTodos();
        $medicos = $this->medico->buscaTodos();
        $pacientes =  $this->paciente->buscaTodos();
        echo $this->view->render("viewAgendamento", [
            "title" => "Home | " . URL_BASE,
            "pageTitle" => "Agendamento",
            "pacientes" => $pacientes,
            "medicos" => $medicos,
            "cirurgia" => $cirurgias,
            "msg" => ""
        ]);
    }

    public function agendar($data): void
    {
        $nomePaciente = trim($_POST['nomePaciente']);
        $convenio = trim($_POST['convenio']);

        $nomeMedico = trim($_POST['nomeMedico']);

        $nomeCirurgia = trim($_POST['cirurgia']);

        $dataInicio = $_POST['dataInicio'];
        $dataFim = $_POST['dataFim'];

        $horaInicio = $_POST['horaInicio'];
        $horaFim = $_POST['horaFim'];

        $obs = trim($_POST['obsCirurgia']);


        if (!(empty($nomePaciente) or empty($nomeMedico) or empty($nomeCirurgia)))
        {
            $paciente = $this->paciente->buscaPorNome($nomePaciente);
            $medico = $this->medico->buscaPorNome($nomeMedico);
            $cirurgia = $this->cirurgia->buscaPorNome($nomeCirurgia);
        }

        $dateTimeInicio = convertDateTime($dataInicio, $horaInicio);
        $dateTimeFim = convertDateTime($dataFim, $horaFim);

        $this->agendamento = new Agendamento($medico, $paciente, $cirurgia, $dateTimeInicio, $dateTimeFim, $obs);

        $msg = $this->agendamento->insere();
        // todo: descomentar quando o stein terminar a função
//        if($this->agendamento->validaData()){
//            $msg = $this->agendamento->insere();
//        }
//        else{
//            $msg = "Data inválida";
//        }

        echo $this->view->render("viewAgendamento", [
            "title" => "Home | " . URL_BASE,
            "pageTitle"=> "Agendamento",
            "msg" => $msg
        ]);
        // echo "Agendado!".$nomePaciente;
    }



    public function errou($data): void
    {
        echo "<h1>Ops, Erros {$data["errcode"]}</h1>";
        var_dump($data);
    }

}