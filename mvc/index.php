<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Empresa de Eventos</title>
</head>
<body>
    
</body>
</html>

<?php
 
 echo"<a href='login.php'>🠔Login</a>";

echo"<h1> Empresa de Eventos </h1>";

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