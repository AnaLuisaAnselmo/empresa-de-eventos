<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../CSS/style.css">
    <title>Cadastrar registro </title>
</head>
<body>
    
 <form method="post">

 <label for="id_evento">ID do Evento: </label>
 <input type="number" name="id_evento" required><br><br>

 <label for="id_participantes">ID dos Participantes: </label>
 <input type="number" name="id_participante" required><br><br>

 <input type="submit" value="Enviar">

 </form>

</body>
</html>

<?php

require_once "C:/Turma2/xampp/htdocs/empresa-de-eventos/mvc/Controller/AuxiliarController.php";
require_once "C:/Turma2/xampp/htdocs/empresa-de-eventos/mvc/DB/Database.php";

$AuxiliarController = new AuxiliarController($pdo);

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $id_evento = $_POST['id_evento'];
    $id_participante = $_POST['id_participante'];
  
    $AuxiliarController -> cadastrarAuxiliar($id_evento, $id_participante);
    header('Location: ../../index.php');
  
  }

?>