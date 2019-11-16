<?php


namespace Source\Model;


class Agendamento
{
    private $dataInicio;
    private $dataFim;
    private $descricao;

    private $cirurgia;
    private $paciente;
    private $medico;

    public function __construct($medico = NULL, $paciente = NULL, $cirurgia = NULL, $dataInicio = NULL,
                                $dataFim = NULL, $descricao = NULL) {
        $this->medico = $medico;
        $this->paciente = $paciente;
        $this->cirurgia = $cirurgia;
        $this->dataInicio = $dataInicio;
        $this->dataFim = $dataFim;
        $this->descricao = $descricao;
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

    public function getDataInicio(){
        return $this->dataInicio;
    }
    public function setDataInicio($dataInicio){
        $this->dataInicio = $dataInicio;
    }

    public function getDataFim(){
        return $this->dataFim;
    }
    public function setDataFim($dataFim){
        $this->dataFim = $dataFim;
    }

    public function getDescricao(){
        return $this->descricao;
    }

    public function setDescricao($descricao){
        $this->descricao = $descricao;
    }

    public function getPrevisaoHoras(){
        return $this->previsaoHoras;
    }

    public function setPrevisaoHoras($previsaoHoras){
        $this->previsaoHoras = $previsaoHoras;
    }

    public function buscaPorData($data){
        $conn = Connection::getInstance();
        $dataInicial = date_time_set($data, 0, 0);
        $dataFinal = date_time_set($data, 23, 59, 59);

        if(!conn){
            $msg = 'Problemas de conexão';
        }
        else {
            $sql = "SELECT * FROM agendamento WHERE agendamento.data_inicio >= '".$dataInicial."' AND agendamento.data_fim <= '".$dataFinal."'";
            $result = array();
            if($res = mysqli_query($conn, $sql)) {
                if(mysqli_num_rows($res) > 0) {
                    while ($row = mysqli_fetch_array($res)) {
                        $medico = new Medico('', '', '', '');
                        $paciente = new Paciente('', '', '', '', '', '', '');
                        $cirurgia = new Cirurgia('', '', '');
                        $objeto = new Agendamento($medico, $paciente, $cirurgia, $row['data_inicio'], $row['data_fim'], $row['descricao']);
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

    public function validaData() {
        $conn = Connection::getInstance();

        if(!$conn){
            $msg = 'Problemas de conexão';
        } else {
            $sql = "SELECT * FROM agendamento WHERE agendamento.id_medico = ".$this->medico->getId()." AND agendamento.data_inicio BETWEEN '".$this->getDataInicio()."' AND '".$this->getDataFim()."' OR agendamento.data_fim BETWEEN '".$this->getDataInicio()."' AND '".$this->getDataFim()."'";

            $result = array();
            $res = mysqli_query($conn, $sql);
            if(mysqli_num_rows($res) > 0) {
                return false;
            } else {
                return true;
            }
            return false;
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
                        $medico = new Medico('', '', '', '');
                        $paciente = new Paciente('', '', '', '', '', '', '');
                        $cirurgia = new Cirurgia('', '', '');
                        $objeto = new Agendamento($medico, $paciente, $cirurgia, $row['data_inicio'], $row['data_fim'], $row['descricao']);
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

    public function insere(){
        $conn = Connection::getInstance();

        if(!$conn) {
            $msg = "Problema na conexão!";
        } else {
            $sql = "INSERT INTO agendamento (id_cirurgia, id_medico, id_paciente, data_inicio, data_fim, observacao) VALUES (".$this->cirurgia->getId().", ".$this->medico->getId().", ".$this->paciente->getId().",'".$this->dataInicio."', '".$this->dataFim."', '".$this->descricao."')";
            if(mysqli_query($conn, $sql)) {
                $msg = 'Cirurgia agendada com sucesso';
            } else {
                $msg = 'Erro ao agendar';
            }
            return $msg;
        }
    }
}