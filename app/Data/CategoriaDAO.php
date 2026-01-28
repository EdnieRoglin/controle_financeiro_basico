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

        public function buscarId($nomeCategoria){
            $sql = "SELECT id FROM categorias WHERE nome = :nome LIMIT 1";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute([':nome' => $nomeCategoria]);

            $id = $stmt->fetchColumn();

            return $id !== false ? (int)$id : null;
        }
        

        public function listarAtivas(){
            $sql = "SELECT * FROM categorias WHERE ativo = 1";
            $stmt = $this->conn->query($sql);

            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }

        public function listarInativas(){
            $sql = "SELECT * FROM categorias WHERE ativo = 0";
            $stmt = $this->conn->query($sql);

            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }

        public function listarTodas(){
            $sql = "SELECT * FROM categorias";
            $stmt = $this->conn->query($sql);

            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }

        public function inativar($buscarNome){
            $sql = "SELECT id FROM categorias WHERE nome = :nome LIMIT 1,
            UPDATE categorias SET ativo = 0 WHERE id = :id";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute([':nome' => $buscarNome]);

            $id = $stmt->fetchColumn();

            return $id->execute([':id' => $buscarNome]);
        }
    }
?>