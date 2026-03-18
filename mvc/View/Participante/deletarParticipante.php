<?php

require_once "C:/Turma2/xampp/htdocs/empresa-de-eventos/mvc/DB/Database.php";
require_once "C:/Turma2/xampp/htdocs/empresa-de-eventos/mvc/Controller/ParticipanteController.php";

$ParticipanteController = new ParticipanteController($pdo);

if(isset($_GET['id'])){

    $id = $_GET['id'];
    $participante = $ParticipanteController->deletarParticipante($id);
    header('Location: ../../index.php');
}else{
    header('Location: ../../index.php');
}

?>