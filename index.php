<?php
/*
$mensagem = "";

if($_SERVER["REQUEST_METHOD"] == "POST") {
    function MyAutoload($className) {
        $extension = spl_autoload_extensions();
        require_once (__DIR__ . '/model/' . $className . $extension);
        require_once (__DIR__ . '/controller/' . $className . $extension);
    }

    spl_autoload_extensions('.class.php');
    spl_autoload_register('MyAutoload');


    $cirurgia = new Cirurgia($nome);
}
*/
?>

<?php
    require_once 'controller/AgendamentoController.php';
    require_once 'model/connection.class.php';

    require_once 'model/Cirurgia.class.php';
    require_once 'model/Paciente.class.php';
    require_once 'model/Medico.class.php';

    $obj = new AgendamentoController();
    $obj->indexAction();
    // $obj->printT();
    //$obj->salvar();
?>
