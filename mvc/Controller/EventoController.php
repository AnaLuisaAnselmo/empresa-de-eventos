<?php

require_once "C:/Turma2/xampp/htdocs/empresa-de-eventos/mvc/Model/EventoModel.php";

class EventoController{

    private $EventoModel;

    public function __construct($pdo){
        $this->EventoModel = new EventoModel( $pdo);
    }

    public function listarEvento (){
        $eventos = $this->EventoModel->buscarTodos();
        include_once "C:/Turma2/xampp/htdocs/mvc/View/Eventos/listarEvento.php";
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


}

?>