<?php 
    require_once __DIR__ . "/app/models/Receita.php";
    require_once __DIR__ . "/config/database.php";

        class ReceitaDao{
            private PDO $conn;

            public function __construct(PDO $conn){
                $this->conn = $conn;
            }

            public function criar(Receita $receita){
                $sql = "INSERT INTO receitas (nome, valor, dataReceita, recorrente, categoria_id)
                VALUES (:nome, :valor, :dataRceita, :recorrente, :categoria_id)";
                $stmt = $this->conn->prepare($sql);

                return $stmt->execute([
                    ':nome' => $receita->getNome(),
                    ':valor' => $receita->getValor(),
                    ':dataReceita' => $receita->getDataReceita(),
                    ':recorrente' => $receita->getRecorrente(),
                    ':categoria_id' => $receita->getCategoriaId()
                ]);
            }

            public function listarReceitas(){
                $sql = "SELECT * FROM receitas";
                $stmt = $this->conn->query($sql);

                return $stmt->fetchAll(PDO::FETCH_ASSOC);
            }

            public function calcReceiMesAtual(){
                $sql = "SELECT COALESCE(SUM(valor), 0) AS total_mes FROM receitas
                WHERE data_receita => DATA_FORMAT(CURDATE(), '%Y-%m-%01')
                AND data_receita < DATEADD(DATE_FORMAT(CURDATE(), '%Y-%m-%01') 
                INTERVAL 1 MONTH)";
                $stmt = $this->conn->query($sql);

                return $stmt->fetchAll(PDO::FETCH_ASSOC);
            }
            
            public function listarRecorrentes(){
                $sql = "SELECT * FROM receitas WHERE recorrente = 1";
                $stmt = $this->conn->query($sql);

                return $stmt->fetchAll(PDO::FETCH_ASSOC);
            }

            public function listarIsoladas(){
                $sql = "SELECT * FROM receitas WHERE recorrente = 0";
                $stmt = $this->conn->query($sql);

                return $stmt->fetchAll(PDO::FETCH_ASSOC);
            }
        }
?>