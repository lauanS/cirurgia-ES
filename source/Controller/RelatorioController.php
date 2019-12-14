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
                if(empty($data['horaInicio']) or empty($data['horaFim']))
                {
                    $horaI = '00:00';
                    $horaF = '23:00';
                }
                else {
                    $horaI = $data['horaInicio'];
                    $horaF = $data['horaFim'];
                }
                $dataInicio = convertDateTime($data['dataInicio'], $horaI);
                $dataFim  = convertDateTime($data['dataFim'], $horaF);

                $relatorio = $this->agendamento->relatorioData($dataInicio, $dataFim);
            }
        }
        else
        {
            $relatorio = array();
        }

        echo $this->view->render("viewRelatorio", [
            "title" => "Relatorio | " . URL_BASE,
            "pageTitle" => "Relatorio",
            "relatorio" => $relatorio
        ]);
    }
}