<?php
require_once "C:/Turma2/xampp/htdocs/empresa-de-eventos/mvc/Controller/EventoController.php";
require_once "C:/Turma2/xampp/htdocs/empresa-de-eventos/mvc/DB/Database.php";

$EventoController = new EventoController($pdo);

$id_evento = $_GET['id_evento'];
if ($_GET['id_participante']) {
    $id_participante = $_GET['id_participante'];
    $msg = $EventoController->inscrever($id_evento, $id_participante);

    echo $msg;
} else {
    header("Location: ../../login.php");
}


?>