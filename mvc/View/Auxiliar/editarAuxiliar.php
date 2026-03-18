<?php

require_once "C:/Turma2/xampp/htdocs/empresa-de-eventos/mvc/DB/Database.php";
require_once "C:/Turma2/xampp/htdocs/empresa-de-eventos/mvc/Controller/AuxiliarController.php";

$AuxiliarController = new AuxiliarController($pdo);

if(isset($_GET['id'])){

    $id = $_GET['id'];
    $usuario = $AuxiliarController->buscarAuxiliar($id);

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar </title>
</head>
<body>
    
<form method="post">
    
 <label for="nome">ID do Evento: </label>
 <input type="number" name="id_evento"  required><br><br>

 <label for="descricao">ID do Participanete: </label>
 <input type="number" name="id_participantes" required><br><br>

 <input type="submit" value="Enviar">

</form>

</body>
</html>

<?php
}else{
    header('Location: listar.php');
}

if($_SERVER['REQUEST_METHOD']=='POST'){

    $id_evento = $_POST['id_evento'];
    $id_participantes = $_POST['id_participantes'];
    
  
    $AuxiliarController -> editarAuxiliar($id_evento,$id_participantes, $id);
    header('Location: ../../index.php');
}

?>