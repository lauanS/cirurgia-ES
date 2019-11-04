<?php

public function preenchePaciente()
{
    //$paciente = = new Paciente('bata', 'tata', 'rere', 'wawa', 'bb', 'mm', 'mm');

    //$nomePaciente = $_GET['nomePaciente'];
    //$paciente = $paciente->buscaPorNome($nomePaciente);
    paciente = '487512335'
    echo $paciente;
    //$retorno['cpf'] = $paciente->getCpf();
    $retorno['cpf'] = '487512335';
    return json_enconde($retorno);
}

if(isset($_GET['nomePaciente'])){
    echo preenchePaciente();
}
else {
    echo '<h1>meh</h1>';
}

?>
