<?php

class Agendamento {

    private $id;
    private $data;
    private $descricao;
    private $anestesiaLocal;
    private $anestesiaGeral;
    private $previsaoHoras;

    private $cirurgia;
    private $paciente;
    private $medico;
    
    public function __construct($medico, $paciente, $cirurgia, $data, $descricao, $anestesiaLocal, $anestesiaGeral, $previsaoHoras) {
        $this->medico = $medico;
        $this->paciente = $paciente;
        $this->cirurgia = $cirurgia;
        $this->data = $data;
        $this->descricao = $descricao;
        $this->anestesiaLocal = $anestesiaLocal;
        $this->anestesiaGeral = $anestesiaGeral;
        $this->previsaoHoras = $previsaoHoras;
    }

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
    
    public function getAnestesiaLocal(){
        return $this->anestesiaLocal;
    }

    public function setAnestesiaLocal($anestesiaLocal){
        $this->anestesiaLocal = $anestesiaLocal;
    }
    
    public function getAnestesiaGeral(){
        return $this->anestesiaGeral;
    }

    public function setAnestesiaGeral($anestesiaGeral){
        $this->anestesiaGeral = $anestesiaGeral;
    }
    
    public function getPrevisaoHoras(){
        return $this->previsaoHoras;
    }
    
    public function setPrevisaoHoras($previsaoHoras){
        $this->previsaoHoras = $previsaoHoras;
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

    public function buscaTodos(){
        $conn = Connection::getInstance();
        
        if(!$conn) {
            $msg = "Problema na conexão!";
        } else {
            $sql = "SELECT * FROM agendamento ORDER BY agendamento.data";
            $result = array();
            if($res = mysqli_query($conn, $sql)) {
                if(mysqli_num_rows($res) > 0) {
                    while ($row = mysqli_fetch_array($res)) { 
                        $objeto = new Medico($row['nome'], $row['crm'], $row['telefone']);
                        array_push($result, $objeto);
                    }
                }
                return $result;
            } else {
                $msg = $sql;
            }
            return $msg;
        }
    }  
}


?>
