<?php


namespace Source\Model;


class RelatorioDTO
{
    private $cirurgia;
    private $medico;
    private $pacientes;

    public function __construct($cirurgia, $medico, $pacientes)
    {
        $this->cirurgia = $cirurgia;
        $this->medico = $medico;
        $this->pacientes = $pacientes;
    }

    public function getCirurgia()
    {
        return $this->cirurgia;
    }

    public function setCirurgia($cirurgia): void
    {
        $this->cirurgia = $cirurgia;
    }

    public function getMedico()
    {
        return $this->medico;
    }

    public function setMedico($medico): void
    {
        $this->medico = $medico;
    }

    public function getPacientes()
    {
        return $this->pacientes;
    }

    public function setPacientes($pacientes): void
    {
        $this->pacientes = $pacientes;
    }


}