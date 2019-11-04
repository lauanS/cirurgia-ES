<?php
function MyAutoload($className) {
    $extension = spl_autoload_extensions();
    require_once (__DIR__ . '/' . $className . $extension);
    
    spl_autoload_extensions('.class.php');
    spl_autoload_register('MyAutoload');
}

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
    
    public function __construct($id, $medico, $paciente, $cirurgia, $data, $descricao, $anestesiaLocal, $anestesiaGeral, $previsaoHoras) {
        $this->id = $id;
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
                        $medico = new Medico('', '', '', '');
                        $paciente = new Paciente('', '', '', '', '', '', '');
                        $cirurgia = new Cirurgia('', '', '');
                        $objeto = new Agendamento($row['id'], $medico, $paciente, $cirurgia, $row['data'], $row['descricao'], $row['anestesia_local'], $row['anestesia_geral'], $row['previsao_horas']);
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
            $sql = "INSERT INTO agendamento (id_cirurgia, id_medico, id_paciente, observacao, anestesia_local, anestesia_geral, previsao_horas) VALUES ('".$this->cirurgia->getId()."', '".$this->medico->getId()."', '".$this->paciente->getId()."', '".$this->descricao."', '".$this-> anestesiaLocal."', '".$this->anestesiaGeral."', '".$this->previsaoHoras."')";
            if(mysqli_query($conn, $sql)) {
                $msg = 'Cirurgia agendada com sucesso';
            } else {
                $msg = 'Erro ao agendar';
            }
            return $msg;
        }
    }
}


?>
