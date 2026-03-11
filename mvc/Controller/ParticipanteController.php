<?php

require_once "C:/Turma1/xampp/htdocs/empresa-de-eventos/mvc/Model/ParticipanteModel.php";

class ProdutoController{

    private $ProdutoModel;

    public function __construct($pdo){
        $this->ProdutoModel = new ProdutoModel( $pdo);
    }

    public function listarProduto (){
        $produtos = $this->ProdutoModel->buscarTodos();
        include_once "C:/Turma1/xampp/htdocs/mvc/View/Produto/listarProduto.php";
        return;
    }
    public function cadastrarProduto ($nome, $descricao, $quantidade, $codigo_barra, $preco){
        return $this->ProdutoModel-> cadastrarProduto($nome, $descricao, $quantidade, $codigo_barra, $preco);
    }

    public function editarProduto ($nome, $descricao, $quantidade, $codigo_barra, $preco, $id){
        $this->ProdutoModel->editarProduto($nome, $descricao, $quantidade, $codigo_barra, $preco, $id);
    }   

    public function buscarProduto($id){
        return $this->ProdutoModel->buscarProduto($id); 
    }

    public function deletarProduto ($id){
        $produto = $this->ProdutoModel->deletarProduto($id); 
        return $produto;

    }


}

?>