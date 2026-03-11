<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Inscrição</title>
</head>
<body>
    
 <form method="post">

 <label for="id_evento">ID do Evento: </label>
 <input type="number" name="id_evento" required><br><br>

 <label for="id_participantes">ID dos Participantes: </label>
 <input type="number" name="id_participantes" required><br><br>

 <input type="submit" value="Enviar">

 </form>

</body>
</html>

<?php

require_once "C:/Turma2/xampp/htdocs/mvc/Controller/InscricaoController.php";
require_once "C:/Turma2/xampp/htdocs/mvc/DB/Database.php";

$InscricaoController = new InscricaoController() ($pdo);

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $id_evento = $_POST['id_evento'];
    $id_participantes = $_POST['id_participante'];
  
    $InscricaoController -> cadastrarInscricao($id_envento, $id_participante);
    header('Location: ../../index.php');
  
  }

?>