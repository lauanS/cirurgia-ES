<?php

require __DIR__."/vendor/autoload.php";

use CoffeeCode\Router\Router;

$router = new Router(URL_BASE);
$router->namespace("Source\Controller");

/*
 * Home
 */
$router->group(null);
$router->get("/",  "WebController:home" );


/*
 * Agendamento
 */
$router->group("agendamento");
$router->get("/",  "AgendamentoController:agendamento" );
$router->post("/", "AgendamentoController:agendar");


/*
 * Relatorio
 */
$router->group("relatorio");
$router->get("/",  "RelatorioController:relatorio" );
$router->post("/",  "RelatorioController:relatorio" );

/*
 * Visualizar
 */
$router->group("visualizar");
$router->get("/", "WebController:visualizar");
$router->post("/", "WebController:visualizar");

/*
 * Erros
 */
$router->group("ops");
$router->get("/{errcode}", "WebController:erro");



$router->dispatch(); # responsavel por fazer toda a leitura de rotas

if($router->error()){
    $router->redirect("/ops/{$router->error()}");
}