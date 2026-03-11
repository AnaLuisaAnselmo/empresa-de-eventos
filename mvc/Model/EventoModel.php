<?php

class EventoModel{

    private  $pdo;

    public function __construct(PDO $pdo){
        $this->pdo = $pdo;
    }

    
    public function buscarTodos(){
        $stmt = $this->pdo->query('SELECT * FROM evento');
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function cadastrarEvento ($nome_do_evento,$descricao,$data,$horario,$local, $num_max_parti){
        $sql = "INSERT INTO evento (nome,tipo) VALUES (:nome_do_evento, :descricao, :data, :horario, :local, :num_max_parti)";
        $stmt = $this ->pdo->prepare($sql);
        return $stmt->execute([
            ':nome_do_evento'=> $nome_do_evento,
            ':descricao'=> $descricao,
            ':data'=> $data,
            ':horario'=> $horario,
            ':local'=> $local,
            ':num_max_parti'=> $num_max_parti
            
        ]);
    }

    public function buscarEvento($id){
        $stmt = $this->pdo->query("SELECT * FROM evento WHERE id = $id");
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function editarEvento ($nome_do_evento,$descricao,$data,$horario,$local, $num_max_parti, $id){
        $sql = "UPDATE evento SET nome_do_evento=?, descricao=?, data=?, horario=?, local=?, num_max_parti=? WHERE id=?";
        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute([$nome_do_evento,$descricao,$data,$horario,$local, $num_max_parti, $id]);
    }

    
    public function deletarEvento ($id){
        $sql = "DELETE FROM evento WHERE id = ?";
        $stmt = $this ->pdo->prepare($sql);
        return $stmt->execute([$id]);
    }


}

?>