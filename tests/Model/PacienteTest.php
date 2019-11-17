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

    public function testBuscaPorCpfVazio()
    {
        $cpfInvalido = '';
        $paciente = new Paciente();
        $sql = "SELECT * FROM paciente WHERE paciente.cpf LIKE '".$cpfInvalido."%'";
        $this->assertEquals($sql, $paciente->buscaPorCpf($cpfInvalido));
    }

    public function testBuscaPorNomeUnico()
    {
        $nome = 'Maria Ross';
        $paciente = new Paciente();
        $esperado = "17862793048";

        if(count($paciente->buscaPorNome($nome)) == 1)
        {
            $this->assertEquals($esperado, ($paciente->buscaPorNome($nome))[0]->getCpf());
        }
        else
        {
            $this->assertTrue(false);
        }

    }

    public function testBuscaPorNomeRepetido()
    {
        $nome = 'Maria de Lurdes Nunes';
        $paciente = new Paciente();
        $esperado = ["56831207057", "91839763884"];
        $encontrado = Array();
        $pacientes = $paciente->buscaPorNome($nome);

        foreach ($pacientes as $p)
        {
            array_push($encontrado, $p->getCpf());
        }

        $this->assertEquals($esperado, $encontrado);
    }

    public function testBuscaPorNomeInvalido()
    {
        $nome = 'Bernadete de Melo Campos';
        $paciente = new Paciente();
        $esperado = "SELECT * FROM paciente WHERE paciente.nome LIKE '".$nome."%'";

        $encontrado = $paciente->buscaPorNome($nome);

        $this->assertEmpty($encontrado);
    }

    public function testBuscaPorNomeIncompleto()
    {
        $nome = 'Maria';
        $paciente = new Paciente();
        $esperado = ["17862793048", "56831207057", "91839763884"];
        $encontrado = Array();
        $pacientes = $paciente->buscaPorNome($nome);

        foreach ($pacientes as $p)
        {
            array_push($encontrado, $p->getCpf());
        }

        $this->assertEquals($esperado, $encontrado);
    }

    public function testBuscaTodos()
    {
        $paciente = new Paciente();
        $esperado = 6;
        $encontrado = $paciente->BuscaTodos();

        $this->assertEquals($esperado, count($encontrado));
    }

    public function testBuscaTodosVerificaPaciente()
    {
        $paciente = new Paciente();
        $esperado = array('Anderson Luiz Thomas', 'Maria de Lurdes Nunes', 'Maria de Lurdes Nunes', 'Maria Ross',
            'Milena Leticia Emily Freitas','Tadeu Souza de Melo');
        $encontrado = $paciente->BuscaTodos();

        $nomesEncontrados = array();
        foreach ($encontrado as $p){
            array_push($nomesEncontrados, $p->getNome());
        }

        $this->assertEquals($esperado, $nomesEncontrados);
    }

}
