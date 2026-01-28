<?php 
require_once __DIR__ . '/../Data/DespesaDAO.php';
require_once __DIR__ . '/../public/index.php';

    class DespesaController{
        private CategoriaDAO $categoriaDao;
        private DespesaDAO $despesaDao;

    public function __construct(){
        $this->despesaDao = new DespesaDAO(Database::conectar());
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

        public function index(){
            $totalDespesa = $this->despesaDao->calcDespMêsAtual();
            $despesas = $this->despesaDao->listarDespesas();
            require_once __DIR__ . '/../public/views/despesa.php';
        }
    }
?>