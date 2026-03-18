<?php

require_once "C:/Turma2/xampp/htdocs/empresa-de-eventos/mvc/Model/AuxiliarModel.php";

class AuxiliarController {
    private $AuxiliarModel;

    public function __construct($pdo){
        $this->AuxiliarModel = new AuxiliarModel( $pdo);
    }

    public function listarAuxiliar (){
        $auxiliares = $this->AuxiliarModel->buscarTodos();
        include_once "C:/Turma2/xampp/htdocs/empresa-de-eventos/mvc/View/Auxiliar/listarAuxiliar.php";
        return;
    }

    public function cadastrarAuxiliar ($id_evento, $id_participante){
        return $this->AuxiliarModel-> cadastrarAuxiliar($id_evento, $id_participante);
    }

    public function editarAuxiliar ($id_evento, $id_participante, $id){
        $this->AuxiliarModel->editarAuxiliar($id_evento, $id_participante, $id);
    }   

    public function buscarAuxiliar($id){
        return $this->AuxiliarModel->buscarAuxiliar($id); 
    }

    public function deletarAuxiliar ($id){
        $usuario = $this->AuxiliarModel->deletarAuxiliar($id); 
        return $usuario;

    }

}

?>