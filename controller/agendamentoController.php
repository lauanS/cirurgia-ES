<?php

    require_once 'model/Agendamento.class.php';
    class AgendamentoController{
        // Variaveis
        private $agendamento;

        public function __contruct(){
            $this->agendamento = new Agendamento();

        }

        public function indexAction(){
            require_once 'view/viewAgendamento.php';
        }

        public function testAction(){
            $this->view->setRenderLevel(View::LEVEL_NO_RENDER);
        }

        public function buscarPacientes(){
            return agendamento.getPaciente.buscaPorNome();
        }

        public function buscarMedicos(){
            return agendamento.getMedico.buscaPorNome();
        }

        public function buscarCirurgias(){
            return agendamento.getCirurgia.buscarTodas();
        }

        public function salvar(){

        }
    }
?>
