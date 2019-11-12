<?php

require __DIR__."/vendor/autoload.php";

use CoffeeCode\Router\Router;

$router = new Router(URL_BASE);

$router->group(null);
$router->get("/", function($data) {
    echo "<h1>Olá Mundo!</h1>";
    var_dump($data);
});

$router->dispatch(); # responsavel por fazer toda a leitura de rotas