<?php 
require_once __DIR__ . '/../models/Despesa.php';

        class DespesaDAO{
            private PDO $conn;

            public function __construct(PDO $conn){
                $this->conn = $conn;
            }

            public function criar(Despesa $despesa){
                $sql = "INSERT INTO despesas (nome, valor, dataDespesa, recorrente, categoria_id)
                VALUES (:nome, :valor, :dataDespesa, :recorrente, :categoria_id)";
                $stmt = $this->conn->prepare($sql);

                return $stmt->execute([
                    ':nome' => $despesa->getNome(),
                    ':valor' => $despesa->getValor(),
                    ':dataDespesa' => $despesa->getDataDespesa(),
                    ':recorrente' => $despesa->getRecorrente(),
                    ':categoria_id' => $despesa->getCategoriaId()
                ]);
            }

            public function listarDespesas(){
                $sql = "SELECT * FROM despesas";
                $stmt = $this->conn->query($sql);

                return $stmt->fetchAll(PDO::FETCH_ASSOC);
            }

            public function calcDespMêsAtual(){
                $sql = "SELECT COALESCE(SUM(valor), 0) AS total_mes FROM despesas
                WHERE data_despesa => DATA_FORMAT(CURDATE(), '%Y-%m-%01')
                AND data_despesa < DATEADD(DATE_FORMAT(CURDATE(), '%Y-%m-%01') 
                INTERVAL 1 MONTH)";
                $stmt = $this->conn->query($sql);

                return $stmt->fetchAll(PDO::FETCH_ASSOC);
            }

            public function DespCateoria(){
                $sql = "SELECT c.nome AS categoria, COALESCE(SUM(d.valor), 0)
                AS total_gasto FROM cateoria c LEFT JOIN despesas d
                ON d.categoria_id = c.id AND d.data_despesa >= DATE_FORMAT(CURDATE(), '%Y-%m-%01')
                AND d.data_despesa < DATE_ADD(DATE_FORMAT(CURDATE(), '%Y-%m-%01'), INTERVAL 1 MONTH)
                GROUP BY c.id, c.nome ORDER BY total_gasto DESC";
                $stmt = $this->conn->query($sql);

                return $stmt->fetchAll(PDO::FETCH_ASSOC);
            }

            public function listarRecorrentes(){
                $sql = "SELECT * FROM despesas WHERE recorrente = 1";
                $stmt = $this->conn->query($sql);

                return $stmt->fetchAll(PDO::FETCH_ASSOC);
            }

            public function listarIsoladas(){
                $sql = "SELECT * FROM despesas WHERE recorrente = 0";
                $stmt = $this->conn->query($sql);

                return $stmt->fetchAll(PDO::FETCH_ASSOC);
            }
        }
?>