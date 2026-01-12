<?php 
require_once __DIR__ . '/../dao/DespesaDAO.php';

    class DespesaController{
        private CategoriaDAO $categoriaDao;
        private DespesaDAO $despesaDao;

    public function __construct(PDO $conn) {
        $this->categoriaDao = new CategoriaDAO($conn);
        $this->despesaDao   = new DespesaDAO($conn);
    }

    public function criar($nome, $valor, $dataDespesa, $recorrente, $nomeCategoria){

        $categoriaId = $this->categoriaDao->buscarId($nomeCategoria);

        if (!$categoriaId) {
            throw new Exception("Categoria '{$nomeCategoria}' não encontrada");
        }

        $despesa = new Despesa(
            no: $nome,
            va: $valor,
            de: $dataDespesa,
            re: $recorrente,
            categoriaId: $categoriaId
        );

        return $this->despesaDao->criar($despesa);
    }

        public function listarDespesas(){
            return $this->despesaDao->listarDespesas();
        }

        public function calcDespMesAtual(){
            return $this->despesaDao->calcDespMêsAtual();
        }

        public function DespCategoria(){
            return $this->despesaDao->DespCategoria();
        }

        public function listarRecorrentes(){
            return $this->despesaDao->listarRecorrentes();
        }

        public function listarIsoladas(){
            return $this->despesaDao->listarIsoladas();
        }
    }
?>