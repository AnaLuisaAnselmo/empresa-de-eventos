<?php

require_once "DB/Database.php";
require_once "Controller/EventoController.php";
require_once "Controller/InscricaoController.php";
require_once "Controller/ParticipanteController.php";

$eventoController = new EventoController($pdo);
$eventos = $eventoController->listarEvento();

$InscricaoController = new InscricaoController($pdo);
$incricoes = $InscricaoController->listarInscricao();

$ParticipanteController = new ParticipanteController($pdo);
$participantes = $ParticipanteController->listarParticipante($pdo);

?>