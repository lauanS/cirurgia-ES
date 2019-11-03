<?php

class Paciente {

    private $id;
    private $nome;
    private $cpf;
    private $nascimento;
    private $sexo;
    private $telefone;
    private $convenio;

    public function getId(){
        return $this->id;
    }

    public function getNome(){
        return $this->nome;
    }

    public function getCpf(){
        return $this->cpf;
    }

    public function getNascimento(){
        return $this->nascimento;
    }

    public function getSexo(){
        return $this->sexo;
    }

    public function getTelefone(){
        return $this->telefone;
    }

    public function getConvenio(){
        return $this->convenio;
    }

    public function buscaPorNome($nome){

    }

    public function buscaPorCpf($cpf){

    }


}


?>
