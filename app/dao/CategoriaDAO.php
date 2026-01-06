<?php 
require_once __DIR__ . "/../models/Categoria.php";

    class CategoriaDAO{
        private PDO $conn;

        public function __construct(PDO $conn){
            $this->conn = $conn;
        }

        public function criar(Categoria $categoria){
            $sql = "INSERT INTO categorias (nome, tipo, ativo) VALUES (:nome, :tipo, :ativo)";
            $stmt = $this->conn->prepare($sql);

            return $stmt->execute([
                ':nome' => $categoria->getNome(),
                ':tipo' => $categoria->getTipo(),
                ':ativo' => $categoria->getAtivo()
            ]);
        }

        public function mudarNome(Categoria $novoNome, $id){
            $sql = "UPDATE categorias SET nome = :novo_nome WHERE id = :id";
            $stmt = $this->conn->prepare($sql);

            return $stmt->execute([
                ':novo_nome' => $novoNome->getNome(),
                ':id' => $id
            ]);
        }

        public function listarAtivas(){
            $sql = "SELECT * FROM categorias WHERE ativo = 1";
            $stmt = $this->conn->query($sql);

            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }

        public function inativar(int $id){
            $sql = "UPDATE categorias SET ativo = 0 WHERE id = :id";
            $stmt = $this->conn->prepare($sql);

            return $stmt->execute([':id' => $id]);
        }
    }
?>