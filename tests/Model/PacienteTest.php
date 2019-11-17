<?php


use Source\Model\Paciente;

use PHPUnit\Framework\TestCase;

class PacienteTest extends TestCase
{

    public function testBuscaPorCpfValido()
    {
        $cpfValido = '17862793048';
        $paciente = new Paciente();
        $newPaciente = $paciente->buscaPorCpf($cpfValido);
        $this->assertEquals('Maria Ross', $newPaciente->getNome());
    }


    public function testBuscaPorCpfInvalido()
    {
        $cpfInvalido = '12333555999';
        $paciente = new Paciente();
        $sql = "SELECT * FROM paciente WHERE paciente.cpf LIKE '".$cpfInvalido."%'";
        $this->assertEquals($sql, $paciente->buscaPorCpf($cpfInvalido));
    }

    public function testBuscaPorNome()
    {

    }

    public function testBuscaTodos()
    {

    }

    public function testBuscaPorId()
    {

    }
}
