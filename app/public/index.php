<?php
require_once __DIR__ . '/../controller/ReceitaController.php';
require_once __DIR__ . '/../controller/DashboardController.php';
require_once __DIR__ . '/../controller/DespesaController.php';
require_once __DIR__ . '/../controller/CategoriaController.php';

$page = $_GET['page'] ?? 'dashboard';

switch ($page) {

    case 'dashboard':
        (new DashboardController())->index();
        break;

    case 'receita':
        (new ReceitaController())->index();
        break;

    case 'despesa':
        (new DespesaController())->index();
        break;

    case 'categoria':
        
        break;

    default:
        echo "Página não encontrada";
}
$r[0] = new ReceitaController;
