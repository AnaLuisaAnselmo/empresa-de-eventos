<?php
 
       if(empty($eventos)){
        echo"<p>Nenhum evento encontrado</p>";
        echo "<a href ='View/Eventos/cadastrarEvento.php'>Cadastrar Evento</a>";
        return;
       }

       echo"<table border='1' cellpading = '5' cellspacing='0'>";
       echo "<tr><td><a href ='View/Eventos/cadastrarEvento.php'>Cadastrar</a></td> <th>EVENTO</th> </tr> ";
       echo "<tr> <th>ID</th> <th>Nome do Evento</th> <th>Descrição</th>> <th>Data</th>> <th>Horário</th>> <th>Local</th>> <th>Núm. Máx. de Parti.</th>> <th>Ações</th> </tr>";

       foreach($eventos as $evento){
        $id = $evento['id'];
        echo "<tr>";
        echo "<td>{$id}</td>";
        echo "<td> {$evento['nome_do_evento']}</td>";
        echo "<td> {$evento['descricao']}</td>";
        echo "<td> {$evento['data']}</td>";
        echo "<td> {$evento['horario']}</td>";
        echo "<td> {$evento['local']}</td>";
        echo "<td> {$evento['num_max_parti']}</td>";

        echo "<td>
            <a href = 'View/Eventos/editarEvento.php?id={$id}'>Editar</a> | 
            <a href = 'View/Eventos/deletarEvento.php?id={$id}' onclick=\"return confirm('Tem certeza que deseja excluir este evento?')\">Deletar</a> 
            </td>";
        echo"</tr>";

       }
       echo"</table>";


?>