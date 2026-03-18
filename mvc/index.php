<?php

echo"<h1> Empresas de Eventos </h1>";

require_once "DB/Database.php";
require_once "Controller/EventoController.php";
require_once "Controller/AuxiliarController.php";
require_once "Controller/ParticipanteController.php";

$eventoController = new EventoController($pdo);
$eventos = $eventoController->listarEvento();

echo "<br><br>";

$ParticipanteController = new ParticipanteController($pdo);
$participantes = $ParticipanteController->listarParticipante($pdo);

$AuxiliarController = new AuxiliarController($pdo);
$auxiliares = $AuxiliarController->listarAuxiliar();

?>