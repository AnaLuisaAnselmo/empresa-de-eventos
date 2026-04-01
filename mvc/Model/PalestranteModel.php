<?php

class PalestranteModel {
    private $pdo;

    public function __construct(PDO $pdo){
        $this->pdo = $pdo;
    }

    public function buscarTodos(){
        $stmt = $this->pdo->query('SELECT * FROM cadastro_palestrantes');
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function cadastrarPalestrante ($nome, $email, $telefone, $especialidade){
        $sql = "INSERT INTO cadastro_palestrantes (nome, email, telefone, especialidade) VALUES (:nome, :email, :telefone, :especialidade)";
        $stmt = $this ->pdo->prepare($sql);
        return $stmt->execute([
            ':nome'=> $nome,
            ':email'=> $email,
            ':telefone'=> $telefone,
            ':especialidade'=> $especialidade
        ]);
    }

    public function buscarPalestrante($id){
        $stmt = $this->pdo->query("SELECT * FROM cadastro_palestrantes WHERE id = $id");
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function editarPalestrante ($nome, $email, $telefone, $especialidade, $id){
        $sql = "UPDATE cadastro_palestrantes SET nome=?, email=?, telefone=?, especialidade=? WHERE id=?";
        $stmt = $this->pdo->prepare($sql);
        return$stmt->execute([$nome, $email, $telefone, $especialidade, $id]);
    }

    
    public function deletarPalestrante ($id){
        $sql = "DELETE FROM cadastro_palestrantes WHERE id = ?";
        $stmt = $this ->pdo->prepare($sql);
        return $stmt->execute([$id]);
    }

    public function buscarPorId($id){
    $sql = "SELECT * FROM cadastro_palestrantes WHERE id = :id";
    $stmt = $this->pdo->prepare($sql);
    $stmt->execute([':id' => $id]);

    return $stmt->fetch(PDO::FETCH_ASSOC);
}

public function login($email){
    $sql = "SELECT * FROM cadastro_palestrantes
            WHERE email = :email ";

    $stmt = $this->pdo->prepare($sql);
    $stmt->execute([
        ':email' => $email
      
    ]);

    return $stmt->fetch(PDO::FETCH_ASSOC);
}

    
}

?>