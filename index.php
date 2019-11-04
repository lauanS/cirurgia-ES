<?php
/*
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
*/
?>

<?php

    require_once 'controller/AgendamentoController.php';

    $obj = new AgendamentoController();
    $obj->indexAction();
    $obj->salvar();
?>

<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="./node_modules/bootstrap/dist/css/bootstrap.min.css" crossorigin="anonymous">

        <title>Cirurgia</title>
    </head>

    <body>
        <section class="content">
            <div class="contato">
                <h3>Form contato</h3>
                <form class="form" method="POST" action="./controller/AgendamentoController.php">
                    <input hidden="true" name="method" value="buscarPacientes">
                    <input class="field" name="paciente" placeholder="nome do paciente"><br><br>
                    <input class="field" name="medico" placeholder="nome do medico"><br><br>
                    <input class="field" name="cirurgia" placeholder="nome da cirurgia"><br><br>

                    <input type="submit" value="enviar">

                </form>
            </div>
        </section>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="./node_modules/jquery/dist/jquery.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="./node_modules/popper.js/dist/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="./node_modules/bootstrap/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    </body>
</html>
