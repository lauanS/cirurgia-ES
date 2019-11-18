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


    public function relatorio($data)
    {
        $dataInicio = NULL;
        $dataFim  = NULL;

        // Verifica se existe os campos de data
        if (array_key_exists("dataInicio", $data) and array_key_exists("dataFim", $data) and
            array_key_exists("horaInicio", $data) and array_key_exists("horaFim", $data)){

            if (empty($data['dataInicio']) or empty($data['dataFim']))
            {
                $relatorio = $this->agendamento->relatorio();
            }
            else
            {
                $dataInicio = convertDateTime($data['dataInicio'], $data['horaInicio']);
                $dataFim  = convertDateTime($data['dataFim'], $data['horaFim']);

                $relatorio = $this->agendamento->relatorioData($dataInicio, $dataFim);
            }

        }

        echo $this->view->render("viewRelatorio", [
            "title" => "Relatorio | " . URL_BASE,
            "pageTitle" => "Relatorio",
            "relatorio" => $relatorio
        ]);
    }
}