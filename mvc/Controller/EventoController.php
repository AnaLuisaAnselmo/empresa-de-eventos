<?php

require_once "C:/Turma2/xampp/htdocs/empresa-de-eventos/mvc/Model/EventoModel.php";
require_once "C:/Turma2/xampp/htdocs/empresa-de-eventos/mvc/Model/ParticipanteModel.php";


class EventoController{

    private $EventoModel;
    private $ParticipanteModel;

    public function __construct($pdo){
        $this->EventoModel = new EventoModel( $pdo);
        $this->ParticipanteModel = new ParticipanteModel($pdo);
    }

    public function listarEvento (){
        $eventos = $this->EventoModel->buscarTodos();
        include_once "C:/Turma2/xampp/htdocs/empresa-de-eventos/mvc/View/Eventos/listarEvento.php";
        return;
    }
    public function cadastrarEvento ($nome_do_evento, $descricao, $data, $horario , $local, $num_max_parti){
        return $this->EventoModel-> cadastrarEvento($nome_do_evento,$descricao,$data, $horario, $local, $num_max_parti);
    }

    public function editarEvento ($nome_do_evento,$descricao,$data,$horario,$local, $num_max_parti, $id){
        $this->EventoModel->editarEvento($nome_do_evento,$descricao,$data,$horario,$local, $num_max_parti, $id);
    }   

    public function buscarEvento($id){
        return $this->EventoModel->buscarEvento($id); 
    }

    public function deletarEvento ($id){
        $evento = $this->EventoModel->deletarEvento($id); 
        return $evento;

    }

    public function inscrever($id_evento, $id_participante){

    // 1 - participante existe
    if(!$this->ParticipanteModel->buscarPorId($id_participante)){
        return "Participante não encontrado";
    }

    // 2 - já está inscrito?
    if($this->EventoModel->jaInscrito($id_evento, $id_participante)){
        return "Participante já inscrito neste evento";
    }

    // 3 - evento lotado?
    $total = $this->EventoModel->contarInscritos($id_evento);
    $evento = $this->EventoModel->buscarEvento($id_evento);

    if($total >= $evento['numero_max_de_participantes']){
        return "Evento lotado";
    }

    // se passou em tudo, inscreve
    $this->EventoModel->cadastrarTabelaAuxiliar($id_evento, $id_participante);

    return "Inscrição realizada com sucesso";
}

}

?>