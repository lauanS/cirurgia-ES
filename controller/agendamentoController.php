<?php

    require_once 'model/Cirurgia.class.php';
    require_once 'model/Medico.class.php';
    require_once 'model/Paciente.class.php';
    require_once 'model/Agendamento.class.php';

    class AgendamentoController{
        // Variaveis
        private $cirurgia;
        private $paciente;
        private $medico;
        private $agendamento;

        public function __construct(){
            $this->cirurgia = new Cirurgia('','','');
            $this->paciente = new Paciente('', '', '', '', '', '', '');;
            $this->medico =  new Medico('', '', '', '');;
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

        public function buscarTodosMedicos(){
            return $this->agendamento->getPaciente()->buscarTodos();
        }

        public function buscarMedicoNome($paciente){
            return $this->agendamento->getPaciente.buscaPorNome($paciente);
        }

        public function buscarMedicoCrf($paciente){
            return $this->agendamento.getPaciente.buscaPorNome($paciente);
        }

        public function preencheMedico()
        {

        }


        public function buscarTodasCirurgias(){
            return $this->agendamento.getCirurgia.buscarTodas();
        }

        public function buscaCirurgia(){
            return $this->agendamento.getCirurgia.buscarTodas();
        }

        public function preencheCirurgia(){
            return $this->agendamento.getCirurgia.buscarTodas();
        }

        public function printT(){
            $c = new Cirurgia("", "", "");
            if($c){
                echo '<p>not null</p>';
            }
            else {
                echo '<p>null</p>';
            }

        }

        public function salvar(){
            $c = new Cirurgia('', '', '');
            $cirurgia = $c->buscaPorNome('Artrodese');
            $m = new Medico('', '', '', '');
            $medico = $m->buscaPorNome('Georgin');
            $p = new Paciente('', '', '', '', '', '', '');
            $paciente = $p->buscaPorNome('Georgin');

            $data = '2019-10-12 00:00:00';
            $observacao = 'Paciente com alergia a anestesia';
            $previsaoHoras = '05:30:00';
            // $data = $_POST["data"];
            // $observacao = $_POST["data"];
            // $previsaoHoras = $_POST["data"];

            $agendamento = new Agendamento($medico, $paciente, $cirurgia, $data, $observacao, $previsaoHoras);
            
            if($agendamento->validaData())
                $agendamento->insere();
        }
    }
?>
