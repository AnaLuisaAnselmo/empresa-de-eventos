<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    
</body>
</html>

<?php

session_start();
$id_participante = $_SESSION['id_participante'] ?? null; 
       if(empty($eventos)){
        echo"<p>Nenhum evento encontrado</p>";
        echo "<a href ='View/Eventos/cadastrarEvento.php'>Cadastrar Evento</a>";
        return;
       }

       echo"<table border='1' cellpading = '5' cellspacing='0'>";
       echo "<tr></td> <th>EVENTO</th><td><a href ='View/Eventos/cadastrarEvento.php'>Cadastrar</a> </tr> ";
       echo "<tr> <th>ID</th> <th>Nome do Evento</th> <th>Descrição</th> <th>Data</th> <th>Horário</th> <th>Local</th> <th>Núm. Máx. de Parti.</th> <th>Ações</th> </tr>";

       foreach($eventos as $evento){
        $id = $evento['id'];
        echo "<tr>";
        echo "<td>{$id}</td>";
        echo "<td> {$evento['nomedoevento']}</td>";
        echo "<td> {$evento['descricao']}</td>";
        echo "<td> {$evento['data']}</td>";
        echo "<td> {$evento['horario']}</td>";
        echo "<td> {$evento['local']}</td>";
        echo "<td> {$evento['numero_max_de_participantes']}</td>";
    

        echo "<td>
            <a href = 'View/Eventos/editarEvento.php?id={$id}'>Editar</a> | 
            <a href = 'View/Eventos/deletarEvento.php?id={$id}' onclick=\"return confirm('Tem certeza que deseja excluir este evento?')\">Deletar</a> |
            <a href='View/Eventos/inscricaoEvento.php?id_evento={$id}&id_participante={$id_participante}'>Inscrever-se</a>
            </td>";
        echo"</tr>";

       }
       echo"</table>";


?>