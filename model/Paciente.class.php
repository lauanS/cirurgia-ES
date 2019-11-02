<?php

class Paciente {

    private $id;
    private $nome;
    private $cpf;
    private $nascimento;


    public function getNome(){
        return $this->nome;            
    }
    
    public function setNome($nome){
        $this->nome = $nome
    }

    public function getCpf(){
        return $this->cpf;
    }

    public function setCpf(){
        $this->nome = $nome
    } 

    public function getNascimento(){
        return $this->nascimento;
    }

    public function busca($nome){
       
    }
}


?>
