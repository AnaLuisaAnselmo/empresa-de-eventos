<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Usuario</title>
</head>
<body>
    
 <form method="post">

 <label for="nome">Nome: </label>
 <input type="text" name="nome" required><br><br>

 <label for="email">Email: </label>
 <input type="email" name="email" required><br><br>

 <label for="senha">Senha: </label>
 <input type="password" name="senha" required><br><br>

 <input type="submit">

 </form>

</body>
</html>

<?php

require_once "C:/Turma1/xampp/htdocs/mvc/Controller/UsuarioController.php";
require_once "C:/Turma1/xampp/htdocs/mvc/DB/Database.php";

$UsuarioController = new UsuarioController($pdo);

if($_SERVER['REQUEST_METHOD'] == 'POST'){

  $nome = $_POST['nome'];
  $email = $_POST['email'];
  $senha = $_POST['senha'];

  $UsuarioController -> cadastrar($nome,$email,$senha);
  header('Location: ../../index.php');

}

?>