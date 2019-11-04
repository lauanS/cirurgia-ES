<?php

    require_once 'C:/wamp64/www/cirurgia-ES/model/Paciente.class.php';
    require_once 'C:/wamp64/www/cirurgia-ES/model/Medico.class.php';
    require_once 'C:/wamp64/www/cirurgia-ES/model/Cirurgia.class.php';
    require_once 'C:/wamp64/www/cirurgia-ES/model/Agendamento.class.php';

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
            //require_once 'view/view.php';
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

            //$data = '2019-10-12 00:00:00';
            //$observacao = 'Paciente com alergia a anestesia';
            $previsaoHoras = '05:30:00';
            $data = $_POST["dataCirurgia"];
            $descricao = $_POST["descricao"];
            $dataFim = "1970-01-01 00:00:01";

            $agendamento = new Agendamento($medico, $paciente, $cirurgia, $data, $dataFim, $descricao, $previsaoHoras);
            //if($agendamento->validaData())
                $agendamento->insere();
        }
    }

if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['method'])) {

	$method = $_POST['method'];
	if(method_exists('AgendamentoController', $method)) {
		$agendamento = new AgendamentoController();
		$agendamento->$method($_POST);
	} else {
		echo 'Metodo incorreto';
	}
}

?>
