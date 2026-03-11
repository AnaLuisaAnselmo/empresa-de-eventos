<?php

require_once "C:/Turma2/xampp/htdocs/empresa-de-eventos/mvc/Model/InscricaoModel.php";

class InscricaoController {
    private $inscricaoModel;

    public function __construct($pdo){
        $this->inscricaoModel = new InscricaoController( $pdo);
    }

    public function listarInscricao (){
        $usuarios = $this->inscricaoModel->buscarTodos();
        include_once "C:/Turma2/xampp/htdocs/mvc/View/Inscricao/listarInscricao.php";
        return;
    }

    public function cadastrarInscricao ($id_envento, $id_participante){
        return $this->inscricaoModel-> cadastrarInscricao($id_envento, $id_participante);
    }

    public function editarInscricao ($id_envento, $id_participante, $id){
        $this->inscricaoModel->editarInscricao($id_envento, $id_participante, $id);
    }   

    public function buscarInscricao($id){
        return $this->inscricaoModel->buscarInscricao($id); 
    }

    public function deletarInscricao ($id){
        $usuario = $this->inscricaoModel->deletarInscricao($id); 
        return $usuario;

    }

}

?>