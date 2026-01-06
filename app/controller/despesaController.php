<?php 
require_once __DIR__ . '/../dao/DespesaDAO.php';

    class DespesaController{
        private DespesaDAO $despesaDao;

        public function __construct(PDO $conn){
            $this->despesaDao = new DespesaDAO($conn);
        }

        public function criar($nome, $valor, $dataDespesa, $recorrente){
            if(empty($nome)){
                throw new Exception("O nome não pode estar vazio!");
            }

            if(empty($valor)){
                throw new Exception("O Valor deve ser um número válido!");
            }

            if(empty($dataDespesa)){
                throw new Exception("Insira uma data válida!");
            }

            $despesa = new Despesa(
                no: $nome,
                va: $valor,
                de: $dataDespesa,
                re: $recorrente
            );

            return $this->despesaDao->criar($despesa);
        }

        public function listarDespesas(){
            $this->despesaDao->listarDespesas();
        }

        public function calcDespMesAtual(){
            $this->despesaDao->calcDespMêsAtual();
        }

        public function DespCategoria(){
            $this->despesaDao->DespCateoria();
        }

        public function listarRecorrentes(){
            $this->despesaDao->listarRecorrentes();
        }

        public function listarIsoladas(){
            $this->despesaDao->listarIsoladas();
        }
    }
?>