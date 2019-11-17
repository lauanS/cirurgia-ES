<?php


namespace Source\Model;


class Medico
{
    private $id;
    private $nome;
    private $crm;
    private $telefone;

    public function __construct($id = NULL, $nome = NULL, $crm = NULL, $telefone = NULL) {
        $this->id = $id;
        $this->nome = $nome;
        $this->crm = $crm;
        $this->telefone = $telefone;
    }

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

    public function buscaTodos() {
        $conn = Connection::getInstance();

        if(!$conn) {
            $msg = "Problema na conexão!";
        } else {
            $sql = "SELECT * FROM medico ORDER BY medico.nome";
            $result = array();
            if($res = mysqli_query($conn, $sql)) {
                if(mysqli_num_rows($res) > 0) {
                    while ($row = mysqli_fetch_array($res)) {
                        $objeto = new Medico($row['id'], $row['nome'], $row['crm'], $row['telefone']);
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

    public function buscaPorNome($nome) {
        $conn = Connection::getInstance();

        if(!$conn) {
            $msg = "Problema na conexão!";
        } else {
            $sql = "SELECT * FROM medico WHERE medico.nome LIKE '".$nome."%'";
            $result = array();
            if($res = mysqli_query($conn, $sql)) {
                if(mysqli_num_rows($res) > 0) {
                    while ($row = mysqli_fetch_array($res)) {
                        $objeto = new Medico($row['id'], $row['nome'], $row['crm'], $row['telefone']);
                        array_push($result, $objeto);
                    }
                }
                return $objeto;
            } else {
                $msg = $sql;
            }
            return $msg;
        }
    }

    public function buscaPorId($id) {
        $conn = Connection::getInstance();

        if(!$conn) {
            $msg = "Problema na conexão!";
        } else {
            $sql = "SELECT * FROM medico WHERE medico.id LIKE '".$id."%'";
            if($res = mysqli_query($conn, $sql)) {
                $row = mysqli_fetch_row($res);
                $objeto = new Medico($row['id'], $row['nome'], $row['crm'], $row['telefone']);
                return $objeto;
            } else {
                $msg = $sql;
            }
            return $msg;
        }
    }
}