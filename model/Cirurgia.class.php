<?php

class Cirurgia {

    private $id;
    private $nome;
    private $descricao;

    public Cirurgia($nome) {
        $this->nome = $nome;
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

    public function buscarTodas() {
        $conn = Connection::getInstance();

        if(!$conn) {
            $msg = "Problema na conexão!";
        } else {
            $sql = "SELECT * FROM cirurgia ORDER BY cirurgia.nome";
            $result[] = mysqli_query($conn, $sql);
            if($result) {
                return $result;
            } else {
                $msg = $sql;
            }
            return $msg;
        }
    }

}


?>
