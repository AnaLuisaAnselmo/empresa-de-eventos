<?php
 
       if(empty($palestrantes)){
        echo"<p>Nenhum Palestrante encontrado</p>";
        echo "<a href ='View/Palestrante/cadastrarPalestrante.php'>Cadastrar Palestrante</a>";
        return;
       }

       echo"<table >";
       echo "<tr class='primeiralinha'><th><a href ='View/Palestrante/cadastrarPalestrante.php'>Cadastrar</a></th><th colspan='7'>PALESTRANTES</th></tr>";
       echo "<tr> <th>ID</th> <th>Nome</th> <th>Email</th> <th>Telefone</th> <th>Especialidade</th> <th>Ações</th> </tr>";

       foreach($palestrantes as $palestrante){
        $id = $palestrante['id'];
        echo "<tr>";
        echo "<td>{$id}</td>";
        echo "<td> {$palestrante['nome']}</td>";
        echo "<td> {$palestrante['email']}</td>";
        echo"<td> {$palestrante ['telefone']}</td>";
        echo "<td> {$palestrante['especialidade']}</td>";
        echo "<td>
            <a href = 'View/Palestrante/editarPalestrante.php?id={$id}'>Editar</a> | 
            <a href = 'View/Palestrante/deletarPalestrante.php?id={$id}' onclick=\"return confirm('Tem certeza que deseja excluir este palestrante?')\">Deletar</a> 
            </td>";
        echo"</tr>";

       }
       echo"</table></br></br>";


?>