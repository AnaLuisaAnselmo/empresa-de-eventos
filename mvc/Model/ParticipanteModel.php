<?php

class ParticipanteModel {
    private $pdo;

    public function __construct(PDO $pdo){
        $this->pdo = $pdo;
    }

    public function buscarTodos(){
        $stmt = $this->pdo->query('SELECT * FROM cadastro_participantes');
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function cadastrarParticipante ($nome, $email, $telefone){
        $sql = "INSERT INTO cadastro_participantes (nome, email, telefone) VALUES (:nome, :email, :telefone)";
        $stmt = $this ->pdo->prepare($sql);
        return $stmt->execute([
            ':nome'=> $nome,
            ':email'=> $email,
            ':telefone'=> $telefone
        ]);
    }

    public function buscarParticipante($id){
        $stmt = $this->pdo->query("SELECT * FROM cadastro_participantes WHERE id = $id");
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function editarParticipante ($nome, $email, $telefone, $id){
        $sql = "UPDATE cadastro_participantes SET nome=?, email=?, telefone=? WHERE id=?";
        $stmt = $this->pdo->prepare($sql);
        return$stmt->execute([$nome, $email, $telefone, $id]);
    }

    
    public function deletarParticipante ($id){
        $sql = "DELETE FROM cadastro_participantes WHERE id = ?";
        $stmt = $this ->pdo->prepare($sql);
        return $stmt->execute([$id]);
    }

    public function buscarPorId($id){
    $sql = "SELECT * FROM cadastro_participantes WHERE id = :id";
    $stmt = $this->pdo->prepare($sql);
    $stmt->execute([':id' => $id]);

    return $stmt->fetch(PDO::FETCH_ASSOC);
}

public function login($email){
    $sql = "SELECT * FROM cadastro_participantes
            WHERE email = :email ";

    $stmt = $this->pdo->prepare($sql);
    $stmt->execute([
        ':email' => $email
      
    ]);

    return $stmt->fetch(PDO::FETCH_ASSOC);
}

    
}

?>