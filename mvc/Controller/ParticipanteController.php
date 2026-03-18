<?php

require_once "C:/Turma2/xampp/htdocs/empresa-de-eventos/mvc/Model/ParticipanteModel.php";

class ParticipanteController{

    private $ParticipanteModel;

    public function __construct($pdo){
        $this->ParticipanteModel = new ParticipanteModel( $pdo);
    }

    public function listarParticipante (){
        $participantes = $this->ParticipanteModel->buscarTodos();
        include_once "C:/Turma2/xampp/htdocs/empresa-de-eventos/mvc/View/Participante/listarParticipante.php";
        return;
    }
    public function cadastrarParticipante ($nome, $email, $telefone ){
        return $this->ParticipanteModel-> cadastrarParticipante($nome, $email, $telefone);
    }

    public function editarParticipante ($nome, $email, $telefone, $id){
        $this->ParticipanteModel->editarParticipante($nome, $email, $telefone, $id);
    }   

    public function buscarParticipante($id){
        return $this->ParticipanteModel->buscarParticipante($id); 
    }

    public function deletarParticipante ($id){
        $participante = $this->ParticipanteModel->deletarParticipante($id); 
        return $participante;

    }


}

?>