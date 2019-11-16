<?php

namespace Source\Controller;

/* Classes do Modelo */
use Source\Model\Medico;
use Source\Model\Paciente;
use Source\Model\Cirurgia;
use Source\Model\Agendamento;

/* Render das views */
use League\Plates\Engine;

class RelatorioController
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
        $this->agendamento = new Agendamento();
    }

    public function PacientePorCirurgia($data = NULL, $cirurgia = NULL)
    {
        // Se um dos campos estiver vazios
        // exibe o relatorio sem filtro
        if(!(empty(data) and empty($cirurgia))) {
            return $this->relatorio($data, $cirurgia);
        }
        else {
            return $this->relatorio();
        }


    }

    private function relatorio()
    {
        echo $this->view->render("viewAgendamento", [
            "title" => "Home | " . URL_BASE,
            "pageTitle" => "Agendamento",
            "relatorio" => ["Apendice" => 30, "Pancreas" => 1, "Cateto" => 5]
        ]);
    }

    private function relatorioDataCirurgia($data, $cirurgia)
    {

    }
}