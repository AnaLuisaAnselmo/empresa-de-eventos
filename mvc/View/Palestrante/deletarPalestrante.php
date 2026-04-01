<?php

require_once "C:/Turma2/xampp/htdocs/empresa-de-eventos/mvc/DB/Database.php";
require_once "C:/Turma2/xampp/htdocs/empresa-de-eventos/mvc/Controller/PalestranteController.php";

$PalestranteController = new PalestranteController($pdo);

if(isset($_GET['id'])){

    $id = $_GET['id'];
    $palestrante = $PalestranteController->deletarPalestrante($id);
    header('Location: ../../index.php');
}else{
    header('Location: ../../index.php');
}

?>