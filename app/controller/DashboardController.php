<?php 
require_once __DIR__ . '/../Data/ReceitaDAO.php';
require_once __DIR__ . '/../config/Database.php';
require_once __DIR__ . '/../Data/DespesaDAO.php';

class DashboardController {

    private ReceitaDAO $receitaDao;
    private DespesaDAO $despesaDao;

    public function __construct() {
        $conn = Database::conectar();
        $this->receitaDao = new ReceitaDAO($conn);
        $this->despesaDao = new DespesaDAO($conn);
    }

    public function index() {
        $totalReceitas = $this->receitaDao->calcReceiMesAtual();
        $totalDespesa = $this->despesaDao->calcDespMêsAtual();
        require_once __DIR__ . '/../public/views/dashboard.php';
    }
}
?>