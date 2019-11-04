<?php

    require_once 'model/Agendamento.class.php';
    class AgendamentoController{
        // Variaveis
        private $cirurgia;
        private $paciente;
        private $medico;
        private $agendamento;

        public function __contruct(){
            $this->agendamento = new Agendamento();
            $this->cirurgia = new Cirurgia();;
            $this->paciente = new Paciente();;
            $this->medico = new Medico();;
        }

        public function indexAction(){
            require_once 'view/viewAgendamento.php';
        }

        public function testAction(){
            $this->view->setRenderLevel(View::LEVEL_NO_RENDER);
        }

        public function buscarTodosPacientes(){
            return $this->agendamento->getPaciente()->buscarTodos();
        }

        public function buscarPacienteNome($paciente){
            return $this->agendamento->getPaciente.buscaPorNome($paciente);
        }

        public function buscarPacienteCpf($paciente){
            return $this->agendamento.getPaciente.buscaPorNome($paciente);
        }

        public function preenchePaciente()
        {

        }




        public function buscarMedicos(){
            return $this->agendamento.getMedico.buscaPorNome();
        }

        public function buscarCirurgias(){
            return $this->agendamento.getCirurgia.buscarTodas();
        }

        public function salvar(){
            $cirurgia = $this->cirurgia->buscaPorNome("Artrodese");
            $medico = $this->medico->buscaPorNome("Georgin");
            $paciente = $this->paciente->buscaPorNome("Georgin");

            $data = '2019-10-12 00:00:00';
            $observacao = 'Paciente com alergia a anestesia';
            $previsaoHoras = '05:30:00';
            // $data = $_POST["data"];
            // $observacao = $_POST["data"];
            // $previsaoHoras = $_POST["data"];

            $this->agendamento = new Agendamento($medico,
                                                $paciente,
                                                $cirurgia,
                                                $data,
                                                $descricao,
                                                $previsaoHoras);

            $agendamento->insere();
        }
    }
?>
