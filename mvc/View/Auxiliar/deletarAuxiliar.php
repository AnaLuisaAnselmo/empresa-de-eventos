<?php

require_once "C:/Turma2/xampp/htdocs/empresa-de-eventos/mvc/DB/Database.php";
require_once "C:/Turma2/xampp/htdocs/empresa-de-eventos/mvc/Controller/AuxiliarController.php";

$AuxiliarController = new AuxiliarController($pdo);

if(isset($_GET['id'])){

    $id = $_GET['id'];
    $Auxiliar = $AuxiliarController->deletarAuxiliar($id);
    header('Location: ../../index.php');
}else{
    header('Location: ../../index.php');
}

?>