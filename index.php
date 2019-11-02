<?php

$mensagem = "";

if($_SERVER["REQUEST_METHOD"] == "POST") {
    function MyAutoload($className) {
        $extension = spl_autoload_extensions();
        require_once (__DIR__ . '/' . $className . $extension);
    }
    
    spl_autoload_extensions('.class.php');
    spl_autoload_register('MyAutoload');
    
    $nome=$_POST["nome"];
    
    $cirurgia = new Cirurgia($nome);
}

?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Cirurgia</title>
    </head>
    <body>
        
    </body>
</html>
