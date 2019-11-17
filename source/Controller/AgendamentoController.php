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
        $nomePaciente = trim($data['nomePaciente']);
        $convenio = trim($data['convenio']);

        $nomeMedico = trim($data['nomeMedico']);

        $nomeCirurgia = trim($data['cirurgia']);

        $dataInicio = $data['dataInicio'];
        $dataFim = $data['dataFim'];

        $horaInicio = $data['horaInicio'];
        $horaFim = $data['horaFim'];

        $obs = trim($data['obsCirurgia']);


        if (!(empty($nomePaciente) or empty($nomeMedico) or empty($nomeCirurgia)))
        {
            $paciente = $this->paciente->buscaPorNome($nomePaciente);
            $medico = $this->medico->buscaPorNome($nomeMedico);
            $cirurgia = $this->cirurgia->buscaPorNome($nomeCirurgia);
        }

        $dateTimeInicio = convertDateTime($dataInicio, $horaInicio);
        $dateTimeFim = convertDateTime($dataFim, $horaFim);

        $this->agendamento = new Agendamento($medico, $paciente, $cirurgia, $dateTimeInicio, $dateTimeFim, $obs);

        if($this->agendamento->validaData()){
            $msg = $this->agendamento->insere();
        }
        else{
            $msg = "Data inválida";
        }

        echo $this->view->render("viewAgendamento", [
            "title" => "Home | " . URL_BASE,
            "pageTitle"=> "Agendamento",
            "msg" => $msg
        ]);
        // echo "Agendado!".$nomePaciente;
    }





}