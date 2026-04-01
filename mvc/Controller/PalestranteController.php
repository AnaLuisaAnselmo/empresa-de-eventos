<?php

require_once "C:/Turma2/xampp/htdocs/empresa-de-eventos/mvc/Model/PalestranteModel.php";

class PalestranteController{

    private $PalestranteModel;

    public function __construct($pdo){
        $this->PalestranteModel = new PalestranteModel( $pdo);
    }

    public function listarPalestrante (){
        $palestrantes = $this->PalestranteModel->buscarTodos();
        include_once "C:/Turma2/xampp/htdocs/empresa-de-eventos/mvc/View/Palestrante/listarPalestrante.php";
        return;
    }
    public function cadastrarPalestrante ($nome, $email, $telefone, $especialidade ){
        return $this->PalestranteModel-> cadastrarPalestrante($nome, $email, $telefone, $especialidade);
    }

    public function editarPalestrante ($nome, $email, $telefone, $especialidade, $id){
        $this->PalestranteModel->editarPalestrante($nome, $email, $telefone, $especialidade, $id);
    }   

    public function buscarPalestrante($id){
        return $this->PalestranteModel->buscarPalestrante($id); 
    }

    public function deletarPalestrante ($id){
        $palestrante = $this->PalestranteModel->deletarPalestrante($id); 
        return $palestrante;

    }


}
