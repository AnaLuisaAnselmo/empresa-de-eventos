<?php

require_once "C:/Turma2/xampp/htdocs/empresa-de-eventos/mvc/DB/Database.php";
require_once "C:/Turma2/xampp/htdocs/empresa-de-eventos/mvc/Controller/EventoController.php";

$EventoController = new EventoController($pdo);

if (isset($_GET['id'])) {
  $id = $_GET['id'];
  $usuario = $EventoController->buscarEvento($id);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

  $id = $_POST['id'];

  $nome_do_evento = $_POST['nome_do_evento'];
  $descricao = $_POST['descricao'];
  $data = $_POST['data'];
  $horario = $_POST['horario'];
  $local = $_POST['local'];
  $num_max_parti = $_POST['num_max_parti'];

  $EventoController->editarEvento(
    $nome_do_evento,
    $descricao,
    $data,
    $horario,
    $local,
    $num_max_parti,
    $id
  );

  header('Location: ../../index.php');
  exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../CSS/style.css">
  <title>Editar Eventos</title>
</head>

<body>

  <form method="post">
    <input type="hidden" name="id" value="<?= $id ?>">
    <label for="nome_do_evento">Nome do Evento: </label>
    <input type="text" name="nome_do_evento"
      value="<?= isset($usuario['nomedoevento']) ? $usuario['nomedoevento'] : '' ?>" required><br><br>

    <label for="descricao">Descrição: </label>
    <input type="text" name="descricao" value="<?= isset($usuario['descricao']) ? $usuario['descricao'] : '' ?>" required><br><br>

    <label for="data">Data: </label>
    <input type="date" name="data" value="<?= isset($usuario['data']) ? $usuario['data'] : '' ?>" required><br><br>

    <label for="horario">Horário: </label>
    <input type="time" name="horario" value="<?= isset($usuario['horario']) ? $usuario['horario'] : '' ?>" required><br><br>

    <label for="local">Local: </label>
    <input type="text" name="local" value="<?= isset($usuario['local']) ? $usuario['local'] : '' ?>" required><br><br>

    <label for="num_max_parti">Número máximo de participantes: </label>
    <input type="number" name="numero_max_de_participantes" value="<?= isset($usuario['numero_max_de_participantes']) ? $usuario['numero_max_de_participantes'] : '' ?>" required><br><br>

    <input type="submit" value="enviar">

  </form>

</body>

</html>