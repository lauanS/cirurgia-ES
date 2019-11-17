<?php


namespace Source\Model;


class Paciente
{
    private $id;
    private $nome;
    private $cpf;
    private $nascimento;
    private $sexo;
    private $telefone;
    private $convenio;

    public function __construct($id = NULL, $nome= NULL, $cpf = NULL,
                                $nascimento = NULL, $sexo = NULL, $telefone = NULL, $convenio = NULL) {
        $this->id= $id;
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->nascimento = $nascimento;
        $this->sexo = $sexo;
        $this->telefone = $telefone;
        $this->convenio = $convenio;
    }

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

    public function buscaPorNome($nome) {
        $conn = Connection::getInstance();

        if(!$conn) {
            $msg = "Problema na conexão!";
        } else {
            $sql = "SELECT * FROM paciente WHERE paciente.nome LIKE '".$nome."%'";
            $result = array();
            if($res = mysqli_query($conn, $sql)) {
                if(mysqli_num_rows($res) > 0) {
                    while ($row = mysqli_fetch_array($res)) {
                        $objeto = new Paciente($row['id'], $row['nome'], $row['cpf'], $row['nascimento'], $row['sexo'], $row['telefone'], $row['convenio']);
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

    public function buscaPorCpf($cpf){
        $conn = Connection::getInstance();

        if(!$conn) {
            $msg = "Problema na conexão!";
        } else {
            $sql = "SELECT * FROM paciente WHERE paciente.cpf LIKE '".$cpf."%'";
            if($res = mysqli_query($conn, $sql)) {
                $row = mysqli_fetch_row($res);
                var_dump($row);
                $objeto = new Paciente($row[0], $row[1], $row[2], $row[3], $row[4], $row[5], $row[6]);
                return $objeto;
            } else {
                $msg = $sql;
            }
            return $msg;
        }
    }

    public function buscaPorId($Id){
        $conn = Connection::getInstance();

        if(!$conn) {
            $msg = "Problema na conexão!";
        } else {
            $sql = "SELECT * FROM paciente WHERE paciente.id LIKE '".$id."%'";
            if($res = mysqli_query($conn, $sql)) {
                $row = mysqli_fetch_row($res);
                $objeto = new Paciente($row['id'], $row['nome'], $row['cpf'], $row['nascimento'], $row['sexo'], $row['telefone'], $row['convenio']);
                return $objeto;
            } else {
                $msg = $sql;
            }
            return $msg;
        }
    }

    public function buscaTodos() {
        $conn = Connection::getInstance();

        if(!$conn) {
            $msg = "Problema na conexão!";
        } else {
            $sql = "SELECT * FROM paciente ORDER BY paciente.nome";
            $result = array();
            if($res = mysqli_query($conn, $sql)) {
                if(mysqli_num_rows($res) > 0) {
                    while ($row = mysqli_fetch_array($res)) {
                        $objeto = new Paciente($row['id'], $row['nome'], $row['cpf'], $row['nascimento'], $row['sexo'], $row['telefone'], $row['convenio']);
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