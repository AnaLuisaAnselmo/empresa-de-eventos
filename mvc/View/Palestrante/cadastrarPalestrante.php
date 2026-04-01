<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../CSS/style.css">
    <title>Cadastrar Palestrante</title>
</head>
<body>
    
 <form method="post">

 <label for="nome">Nome: </label>
 <input type="text" name="nome" required><br><br>

 <label for="email">Email: </label>
 <input type="email" name="email" required><br><br>

 <label for="senha">telefone: </label>
 <input type="number" name="telefone" required><br><br>

 <label for="especialidade">Especialidade: </label>
 <input type="text" name="especialidade" required><br><br>

 <input type="submit" value="Enviar">

 </form>

</body>
</html>

<?php

require_once "C:/Turma2/xampp/htdocs/empresa-de-eventos/mvc/Controller/PalestranteController.php";
require_once "C:/Turma2/xampp/htdocs/empresa-de-eventos/mvc/DB/Database.php";

$PalestranteController = new PalestranteController($pdo);

if($_SERVER['REQUEST_METHOD'] == 'POST'){

  $nome = $_POST['nome'];
  $email = $_POST['email'];
  $telefone = $_POST['telefone'];
  $especialidade = $_POST['especialidade'];

  $PalestranteController -> cadastrarPalestrante($nome,$email,$telefone,$especialidade);
  header('Location: ../../index.php');

}
