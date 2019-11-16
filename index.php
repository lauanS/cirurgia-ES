<?php

require __DIR__."/vendor/autoload.php";

use CoffeeCode\Router\Router;

$router = new Router(URL_BASE);
$router->namespace("Source\Controller");
/*
 * home
 */
$router->group(null);
$router->get("/",  "AgendamentoController:home" );


/*
 * agendamento
 */
$router->group("agendamento");
$router->get("/",  "AgendamentoController:agendamento" );
$router->post("/", "AgendamentoController:agendar");


/*
 * relatorio
 */
$router->group("relatorio");
$router->get("/",  "RelatorioController:relatorio" );
$router->post("/",  "RelatorioController:relatorio" );

/*
 * Erros
 */
$router->group("ops");
$router->get("/{errcode}", function($data) {
    echo "<h1>Ops, Erros {$data["errcode"]}</h1>";
    var_dump($data);
});



$router->dispatch(); # responsavel por fazer toda a leitura de rotas

if($router->error()){
    $router->redirect("/ops/{$router->error()}");
}