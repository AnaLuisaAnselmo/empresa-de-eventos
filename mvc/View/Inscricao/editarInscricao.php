<?php

require_once "C:/Turma1/xampp/htdocs/mvc/DB/Database.php";
require_once "C:/Turma1/xampp/htdocs/mvc/Controller/ProdutoController.php";

$ProdutoController = new ProdutoController($pdo);

if(isset($_GET['id'])){

    $id = $_GET['id'];
    $usuario = $ProdutoController->buscarProduto($id);

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Produto</title>
</head>
<body>
    
<form method="post">
    
 <label for="nome">Nome: </label>
 <input type="text" name="nome" required><br><br>

 <label for="descricao">Descrição: </label>
 <input type="text" name="descricao" required><br><br>

 <label for="quantidade">Quantidade: </label>
 <input type="number" name="quantidade" required><br><br>

 <label for="codigo-barra">Codígo de Barras: </label>
 <input type="number" name="codigo-barra" required><br><br>

 <label for="preco">Preço: </label>
 <input type="number" name="preco" required><br><br>

 <input type="submit">

</form>

</body>
</html>

<?php
}else{
    header('Location: listar.php');
}

if($_SERVER['REQUEST_METHOD']=='POST'){

    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];
    $quantidade = $_POST['quantidade'];
    $codigo_barra = $_POST['codigo-barra'];
    $preco = $_POST['preco'];
  
    $ProdutoController -> editarProduto($nome,$descricao,$quantidade,$codigo_barra,$preco, $id);
    header('Location: ../../index.php');
}

?>