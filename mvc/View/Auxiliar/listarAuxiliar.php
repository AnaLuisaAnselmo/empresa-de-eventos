<?php
 
       if(empty($auxiliares)){
        echo"<p>Nenhum evento ou participante foram cadastrados </p>";
        echo "<a href ='View/Auxiliar/cadastrarAuxiliar.php'>Cadastrar Registro</a>";
        return;
       }

       echo"<table>";
       echo "<tr class='primeiralinha'><th><a href ='View/Auxiliar/cadastrarAuxiliar.php'>Cadastrar</a></th> <th colspan='7' >TABELA AUXILIAR</th> </tr> ";
       echo "<tr> <th>ID</th> <th>ID Evento</th> <th>ID Participante</th> <th>Ações</th> ";

       foreach($auxiliares as $auxiliar){
        $id = $auxiliar['id'];
        echo "<tr>";
        echo "<td>{$id}</td>";
        echo "<td> {$auxiliar['id_evento']}</td>";
        echo "<td> {$auxiliar['id_participante']}</td>";
      
        echo "<td>
            <a href = 'View/Auxiliar/editarAuxiliar.php?id={$id}'>Editar</a> | 
            <a href = 'View/Auxiliar/deletarAuxiliar.php?id={$id}' onclick=\"return confirm('Tem certeza que deseja excluir esse registro?')\">Deletar</a> 
            </td>";
        echo"</tr>";

       }
       echo"</table></br></br>";


?>