<?php

require_once "C:/Turma2/xampp/htdocs/mvc/DB/Database.php";
require_once "C:/Turma2/xampp/htdocs/mvc/Controller/EventoController.php";

$PagamentoController = new EventoController($pdo);

if(isset($_GET['id'])){

    $id = $_GET['id'];
    $evento = $EventoController->deletarEvento($id);
    header('Location: ../../index.php');
}else{
    header('Location: ../../index.php');
}

?>