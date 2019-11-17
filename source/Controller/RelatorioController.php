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
        var_dump($data);
        if (array_key_exists("dataInicio", $data) and array_key_exists("dataFim", $data) and
            array_key_exists("horaInicio", $data) and array_key_exists("horaFim", $data)){
            $dataInicio = convertDateTime($data['dataInicio'], $data['horaInicio']);
            $dataFim  = convertDateTime($data['dataFim'], $data['horaFim']);
        }
        else{
            $dataInicio = NULL;
            $dataFim  = NULL;
        }

        if(empty($dataInicio) and empty($dataFim)) {
            $relatorio = $this->agendamento->relatorio();
        }
        else {
            // $relatorio = $this->agendamento->relatorioData($dataInicio, $dataFim);
            $relatorio = $this->agendamento->relatorio();
        }

        echo $this->view->render("viewRelatorio", [
            "title" => "Relatorio | " . URL_BASE,
            "pageTitle" => "Relatorio",
            "relatorio" => $relatorio
            //"relatorio" => ["Cateto" => [2, "Hudson"], "Apendice" => [6, "Maicon"], "Pancreas" => [3, "Hudson"]]
        ]);
    }
}