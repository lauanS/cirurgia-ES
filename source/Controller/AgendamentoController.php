<?php

namespace Source\Controller;


use League\Plates\Engine;

class AgendamentoController
{
    private $view;
    public function __construct()
    {
        $this->view = Engine::create(__DIR__."/../View", "php");
    }

    public function home($data): void
    {
        echo "<h1>HOME PAGE</h1>";
        var_dump($data);
    }

    public function agendamento($data): void
    {
        echo $this->view->render("viewAgendamento", [
            "title" => "Home | " . URL_BASE,
            "pageTitle"=> "Agendamento"
        ]);
    }

    public function errou($data): void
    {
        echo "<h1>Ops, Erros {$data["errcode"]}</h1>";
        var_dump($data);
    }

}