<?php

require_once "C:/Turma2/xampp/htdocs/empresa-de-eventos/mvc/DB/Database.php";
require_once "C:/Turma2/xampp/htdocs/empresa-de-eventos/mvc/Controller/PalestranteController.php";

$PalestranteController = new PalestranteController($pdo);

if(isset($_GET['id'])){

    $id = $_GET['id'];
    $palestrante= $PalestranteController->buscarPalestrante($id);


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../CSS/style.css">
    <title>Editar Palestrante</title>
</head>
<body>
    
<form method="post">

    <label for="nome">Nome: </label>
    <input type="text" name="nome" value="<?= isset($palestrante['nome']) ? $palestrante['nome'] : '' ?>" required><br><br>

    <label for="email">Email: </label>
    <input type="email" name="email" value="<?= isset($palestrante['email']) ? $palestrante['email'] : '' ?>" required><br><br>

    <label for="senha">telefone: </label>
    <input type="number" name="telefone" value="<?= isset($palestrante['telefone']) ? $palestrante['telefone'] : '' ?>" required><br><br>

     <label for="especialidade">Especialidade: </label>
    <input type="text" name="especialidade" value="<?= isset($palestrante['especialidade']) ? $palestrante['especialidade'] : '' ?>" required><br><br>

    <input type="submit" value="Enviar">

</form>

</body>
</html>

<?php

}else{
    header('Location: listarPalestrante.php');
}

if($_SERVER['REQUEST_METHOD']=='POST'){
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $especialidade = $_POST['especialidade'];

    $PalestranteController->editarPalestrante($nome, $email, $telefone, $especialidade, $id);

    header('Location: ../../index.php');
}

?>

