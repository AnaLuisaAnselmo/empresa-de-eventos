<?php

class AuxiliarModel{

    private  $pdo;

    public function __construct(PDO $pdo){
        $this->pdo = $pdo;
    }

    
    public function buscarTodos(){
        $stmt = $this->pdo->query('SELECT * FROM tabela_auxiliar');
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function cadastrarAuxiliar ($id_evento, $id_participante){
        $sql = "INSERT INTO tabela_auxiliar (id_evento, id_participante) VALUES (:id_evento, :id_participante)";
        $stmt = $this ->pdo->prepare($sql);
        return $stmt->execute([

            ':id_evento'=> $id_evento,
            ':id_participante'=> $id_participante,
            
        ]);
    }

    public function buscarAuxiliar(){
        $stmt = $this->pdo->query("SELECT * FROM tabela_auxiliar ");
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function editarAuxiliar ($id_envento, $id_participante, $id){
        $sql = "UPDATE tabela_auxiliar SET id_evento=?, id_participante=? WHERE id=?";
        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute([$id_envento, $id_participante, $id]);
    }

    
    public function deletarAuxiliar ($id){
        $sql = "DELETE FROM tabela_auxiliar WHERE id = ?";
        $stmt = $this ->pdo->prepare($sql);
        return $stmt->execute([$id]);
    }
  
    public function jaInscrito($id_evento, $id_participante){
    $sql = "SELECT * FROM auxiliar 
            WHERE id_evento = :id_evento 
            AND id_participante = :id_participante";

    $stmt = $this->pdo->prepare($sql);
    $stmt->execute([
        ':id_evento' => $id_evento,
        ':id_participante' => $id_participante
    ]);

    return $stmt->fetch(); // se tiver resultado = já inscrito
}

public function contarInscritos($id_evento){
    $sql = "SELECT COUNT(*) as total FROM auxiliar WHERE id_evento = :id_evento";

    $stmt = $this->pdo->prepare($sql);
    $stmt->execute([':id_evento' => $id_evento]);

    $resultado = $stmt->fetch(PDO::FETCH_ASSOC);

    return $resultado['total'];
}

}

?>