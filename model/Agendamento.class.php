<?php

class Cirurgia {

    private $id;
    private $data;
    private $descricao;

    private $cirurgia;
    private $paciente;
    private $medico;

    public function getCirurgia(){
        return $this->cirurgia;            
    }
    public function setCirurgia($cirurgia){
        $this->cirurgia = $cirurgia;            
    }

    public function getPaciente(){
        return $this->paciente;            
    }
    public function setPaciente($paciente){
        $this->paciente = $paciente;            
    }

    public function getMedico(){
        return $this->medico;            
    }
    public function setMedico($medico){
        $this->medico = $medico;            
    }


    public function getData(){
        return $this->data;            
    }
    public function setData($data){
        $this->data = $data;            
    }

    public function getDescricao(){
        return $this->descricao;
    }
    public function setDescricao($descricao){
        $this->descricao = $descricao
    } 

    public function buscaPorData($data){
        $conn = Connection::getInstance();

        if(!conn){
            $msg = 'Problemas de conexão'
        }
        else {
            $sql = ""

            $result = mysqli_query($conn, $sql)

            if($result){

            }
        }
    }

    public function busca($){

    }  
}


?>
