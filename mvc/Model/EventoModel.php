<?php

class EventoModel{

    private  $pdo;

    public function __construct(PDO $pdo){
        $this->pdo = $pdo;
    }

    
    public function buscarTodos(){
        $stmt = $this->pdo->query('SELECT * FROM cadastro_eventos');
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function cadastrarEvento ($nome_do_evento,$descricao,$data,$horario,$local, $num_max_parti){
        $sql = "INSERT INTO cadastro_eventos (nomedoevento,descricao, data, horario, local, numero_max_de_participantes)
             VALUES (:nomedoevento, :descricao, :data, :horario, :local, :numero_max_de_participantes)";
        $stmt = $this ->pdo->prepare($sql);
        return $stmt->execute([
            ':nomedoevento'=> $nome_do_evento,
            ':descricao'=> $descricao,
            ':data'=> $data,
            ':horario'=> $horario,
            ':local'=> $local,
            ':numero_max_de_participantes'=> $num_max_parti
            
        ]);
    }

    public function buscarEvento($id){
        $stmt = $this->pdo->query("SELECT * FROM cadastro_eventos WHERE id = $id");
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function editarEvento ($nome_do_evento,$descricao,$data,$horario,$local, $num_max_parti, $id){
        $sql = "UPDATE cadastro_eventos SET nomedoevento=?, descricao=?, data=?, horario=?, local=?, numero_max_de_participantes=? WHERE id=?";
        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute([$nome_do_evento,$descricao,$data,$horario,$local, $num_max_parti, $id]);
    }

    
    public function deletarEvento ($id){
        $sql = "DELETE FROM cadastro_eventos WHERE id = ?";
        $stmt = $this ->pdo->prepare($sql);
        return $stmt->execute([$id]);
    }

    public function jaInscrito($id_evento, $id_participante){
    $sql = "SELECT * FROM tabela_auxiliar 
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
    $sql = "SELECT COUNT(*) as total FROM tabela_auxiliar WHERE id_evento = :id_evento";

    $stmt = $this->pdo->prepare($sql);
    $stmt->execute([':id_evento' => $id_evento]);

    $resultado = $stmt->fetch(PDO::FETCH_ASSOC);

    return $resultado['total'];
}

public function cadastrarTabelaAuxiliar($id_evento, $id_participante){
    $sql = "INSERT INTO tabela_auxiliar (id_evento, id_participante) VALUES (:id_evento, :id_participante)";
    $stmt = $this ->pdo->prepare($sql);
    return $stmt->execute([
        ':id_evento'=> $id_evento,
        ':id_participante'=> $id_participante
    ]);


}
}
?>