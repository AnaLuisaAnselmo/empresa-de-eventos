<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Eventos</title>
</head>
<body>
    
 <form method="post">

 <label for="nome_do_evento">Nome do Evento: </label>
 <input type="text" name="nome_do_evento" required><br><br>

 <label for="descricao">Descrição: </label>
 <input type="text" name="descricao" required><br><br>

 <label for="data">Data: </label>
 <input type="date" name="data" required><br><br>

 <label for="horario">Horário: </label>
 <input type="time" name="horario" required><br><br>

 <label for="local">Local: </label>
 <input type="text" name="local" required><br><br>

 <label for="num_max_parti">Número máximo de participantes: </label>
 <input type="number" name="num_max_parti" required><br><br>

 <input type="submit" value="enviar">

 </form>

</body>
</html>

<?php

require_once "C:/Turma2/xampp/htdocs/empresa-de-eventos/mvc/DB/Database.php";
require_once "C:/Turma2/xampp/htdocs/empresa-de-eventos/mvc/Controller/EventoController.php";

$EventoController = new EventoController ($pdo);


if(isset($_GET['id'])){

  $id = $_GET['id'];
  $usuario = $EventoController->buscarEvento($id);
}

if($_SERVER['REQUEST_METHOD'] == 'POST'){

  $nome_do_evento = $_POST['nome_do_evento'];
    $descricao = $_POST['descricao'];
    $data = $_POST['data'];
    $horario = $_POST['horario'];
    $local = $_POST['local'];
    $num_max_parti = $_POST['num_max_parti'];
  
    $EventoController -> editarEvento($nome_do_evento,$descricao,$data,$horario,$local, $num_max_parti, $id);
    header('Location: ../../index.php');
  
  }


?>