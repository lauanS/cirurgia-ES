<?php

class Medico {

    private $id;
    private $nome;
    private $crm;
    private $telefone;

    public function getId(){
        return $this->id;
    }

    public function getNome(){
        return $this->nome;
    }

    public function getCrm(){
        return $this->crm;
    }

    public function getTelefone(){
        return $this->telefone;
    }

    public function buscaPorNome($nome){

    }

    public function buscaPorCrm($crm){

    }


}


?>
