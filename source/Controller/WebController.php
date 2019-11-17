<?php
namespace Source\Controller;

/* Classes do Modelo */
use Source\Model\Agendamento;

/* Render das views */
use League\Plates\Engine;

class WebController
{
    private $agendamento;
    public function __construct()
    {
        $this->view = Engine::create(__DIR__."/../View", "php");
        $this->agendamento = new Agendamento();
    }

    public function home($data): void
    {
        echo $this->view->render("home", [
            "title" => "Home | " . URL_BASE,
            "pageTitle"=> "Home"
        ]);
    }

    public function erro($data): void
    {
        echo $this->view->render("ops", [
            "title" => "Home | " . URL_BASE,
            "pageTitle" => "Home",
            "errcode" => $data["errcode"]
        ]);
    }

    public function visualizar($data): void
    {
        $dataInicio = NULL;
        $dataFim  = NULL;

        // Verifica se existe os campos de data
        if (array_key_exists("dataInicio", $data) and array_key_exists("dataFim", $data) and
            array_key_exists("horaInicio", $data) and array_key_exists("horaFim", $data)){
            // Verifica se eles nao estao vazios
            if (!(empty($data['dataInicio']) and empty($data['horaInicio'])
                and empty($data['dataFim']) and empty($data['horaFim'])))
            {
                $dataInicio = convertDateTime($data['dataInicio'], $data['horaInicio']);
                $dataFim  = convertDateTime($data['dataFim'], $data['horaFim']);
            }
        }

        if(empty($dataInicio) and empty($dataFim)) {
            $agendamentos = $this->agendamento->buscaTodos();
        }
        else {
            $agendamentos = $this->agendamento->visualizaCirurgia($dataInicio, $dataFim);
        }
        echo $this->view->render("visualizar", [
            "title" => "Visualizar | " . URL_BASE,
            "pageTitle" => "Visualizar",
            "agendamentos" => $agendamentos
        ]);
    }
}