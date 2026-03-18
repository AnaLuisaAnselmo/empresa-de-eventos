<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <title>Login</title>
</head>
<body>

<h2>Login</h2>

<form method="POST">

    <label>Email:</label>
    <input type="email" name="email" required><br><br>

    <input type="submit" value="Entrar">

</form>

</body>
</html>

<?php
session_start();

require_once "C:/Turma2/xampp/htdocs/empresa-de-eventos/mvc/DB/Database.php";
require_once "C:/Turma2/xampp/htdocs/empresa-de-eventos/mvc/Model/ParticipanteModel.php";

$ParticipanteModel = new ParticipanteModel($pdo);

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $email = $_POST['email'];

    $usuario = $ParticipanteModel->login($email);

    if($usuario){
        $_SESSION['id_participante'] = $usuario['id'];
        $_SESSION['nome'] = $usuario['nome'];

        header("Location: index.php");
        exit;
    }else{
        echo "Email  inválido";
    }
}
?>