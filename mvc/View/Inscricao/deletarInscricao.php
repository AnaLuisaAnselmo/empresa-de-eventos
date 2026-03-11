<?php

require_once "C:/Turma1/xampp/htdocs/mvc/DB/Database.php";
require_once "C:/Turma1/xampp/htdocs/mvc/Controller/ProdutoController.php";

$ProdutoController = new ProdutoController($pdo);

if(isset($_GET['id'])){

    $id = $_GET['id'];
    $produto = $ProdutoController->deletarProduto($id);
    header('Location: ../../index.php');
}else{
    header('Location: ../../index.php');
}

?>