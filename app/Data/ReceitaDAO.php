<?php 
require_once __DIR__ . '/../models/Receita.php';


        class ReceitaDao{
            private PDO $conn;

            public function __construct(PDO $conn){
                $this->conn = $conn;
            }

            public function criar(Receita $receita){
                $sql = "INSERT INTO receitas (nome, valor, data_receita, recorrente, categoria_id)
                VALUES (:nome, :valor, :data_receita, :recorrente, :categoria_id)";
                $stmt = $this->conn->prepare($sql);

                return $stmt->execute([
                    ':nome' => $receita->getNome(),
                    ':valor' => $receita->getValor(),
                    ':data_receita' => $receita->getDataReceita(),
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
                $sql = "SELECT COALESCE(SUM(valor), 0) AS total FROM receitas
                    WHERE data_receita >= DATE_FORMAT(CURDATE(), '%Y-%m-01')
                    AND data_receita <  DATE_ADD(
                    DATE_FORMAT(CURDATE(), '%Y-%m-01'), INTERVAL 1 MONTH);";
                $stmt = $this->conn->query($sql);
                $resultado = $stmt->fetch(PDO::FETCH_ASSOC);
                
                return (float) ($resultado['total'] ?? 0);
                
            }
            
            public function listarRecorrentes(){
                $sql = "SELECT * FROM receitas WHERE recorrente = 1";
                $stmt = $this->conn->query($sql);

                return $stmt->fetchAll(PDO::FETCH_ASSOC);
            }

            public function receiCategoria(){
                $sql = "SELECT c.nome AS receitas, COALESCE(SUM(r.valor), 0)
                AS total_receita FROM categorias c LEFT JOIN receitas r 
                ON r.categoria_id = c.id AND r.data_receita >= DATE_FORMAT(CURDATE(), '%Y-%m-01')
                AND r.data_receita <  DATE_ADD(DATE_FORMAT(CURDATE(), '%Y-%m-01'), INTERVAL 1 MONTH)
                GROUP BY c.id, c.nome ORDER BY total_receita DESC;";
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