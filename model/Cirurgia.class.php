<?php

class Cirurgia {

    private $id;
    private $nome;
    private $descricao;

    public function __construct($id, $nome, $descricao) {
        $this->id = $id;
        $this->nome = $nome;
        $this->descricao = $descricao;
    }

    public function getId(){
        return $this->id;
    }

    public function getNome(){
        return $this->nome;
    }

    public function setNome($nome){
        $this->nome = $nome
    }

    public function getDescricao(){
        return $this->descricao;
    }

    public function setDescricao($descricao){
        $this->descricao = $descricao
    }

    public function buscaTodos() {
        $conn = Connection::getInstance();
        
        if(!$conn) {
            $msg = "Problema na conexão!";
        } else {
            $sql = "SELECT * FROM cirurgia ORDER BY cirurgia.nome";
            $result = array();
            if($res = mysqli_query($conn, $sql)) {
                if(mysqli_num_rows($res) > 0) {
                    while ($row = mysqli_fetch_array($res)) { 
                        $objeto = new Cirurgia($row['id'], $row['nome'], $row['descricao']);
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
            $sql = "SELECT * FROM cirurgia WHERE cirurgia.nome LIKE '".$nome."%'";
            if($res = mysqli_query($conn, $sql)) {
                $row = mysqli_fetch_row($res);
                $objeto = new Cirurgia($row['id'], $row['nome'], $row['descricao']);
                return $objeto;
            } else {
                $msg = $sql;
            }
            return $msg;
        }
    }

}


?>
