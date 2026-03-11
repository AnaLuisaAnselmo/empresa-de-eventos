<?php
 
       if(empty($produtos)){
        echo"<p>Nenhum usuario encontrado</p>";
        echo "<a href ='View/Produto/cadastrarProduto.php'>Cadastrar</a>";
        return;
       }

       echo"<table border='1' cellpading = '5' cellspacing='0'>";
       echo "<tr><td><a href ='View/Produto/cadastrarProduto.php'>Cadastrar</a></td> <th>PRODUTOS</th> </tr> ";
       echo "<tr> <th>ID</th> <th>Nome</th> <th>Descrição</th> <th>Quantidade</th> <th>Codígo de Barras</th> <th>Preço</th> <th>Ações</th> </tr>";

       foreach($produtos as $produto){
        $id = $produto['id'];
        echo "<tr>";
        echo "<td>{$id}</td>";
        echo "<td> {$produto['nome']}</td>";
        echo "<td> {$produto['descricao']}</td>";
        echo "<td> {$produto['quantidade']}</td>";
        echo "<td> {$produto['codigo_barra']}</td>";
        echo "<td> {$produto['preco']}</td>";
        
        echo "<td>
            <a href = 'View/Produto/editarProduto.php?id={$id}'>Editar</a> | 
            <a href = 'View/Produto/deletarProduto.php?id={$id}' onclick=\"return confirm('Tem certeza que deseja excluir este usuário?')\">Deletar</a> 
            </td>";
        echo"</tr>";

       }
       echo"</table></br></br>";


?>