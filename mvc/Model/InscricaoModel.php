<?php

class InscricaoModel{

    private  $pdo;

    public function __construct(PDO $pdo){
        $this->pdo = $pdo;
    }

    
    public function buscarTodos(){
        $stmt = $this->pdo->query('SELECT * FROM inscricao');
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function cadastrarInscricao ($id_envento, $id_participante){
        $sql = "INSERT INTO inscricao (id_envento, id_participante) VALUES (:id_evento, :id_participante)";
        $stmt = $this ->pdo->prepare($sql);
        return $stmt->execute([

            ':id_evento'=> $id_envento,
            ':id_participante'=> $id_participante,
            
        ]);
    }

    public function buscarInscricao($id){
        $stmt = $this->pdo->query("SELECT * FROM inscricao WHERE id = $id");
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function editarInscricao ($id_envento, $id_participante, $id){
        $sql = "UPDATE inscricao SET id_evento=?, id_participante=? WHERE id=?";
        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute([$id_envento, $id_participante, $id]);
    }

    
    public function deletarInscricao ($id){
        $sql = "DELETE FROM incricao WHERE id = ?";
        $stmt = $this ->pdo->prepare($sql);
        return $stmt->execute([$id]);
    }


}

?>