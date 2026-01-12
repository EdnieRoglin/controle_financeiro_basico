<?php

// 1. CONFIGURAÇÃO / CONEXÃO
require_once __DIR__ . '/../config/Database.php';

// 2. MODELS
require_once __DIR__ . '/../app/models/Categoria.php';
require_once __DIR__ . '/../app/models/Receita.php';
require_once __DIR__ . '/../app/models/Despesa.php';

// 3. DAOs
require_once __DIR__ . '/../app/dao/CategoriaDAO.php';
require_once __DIR__ . '/../app/dao/ReceitaDAO.php';
require_once __DIR__ . '/../app/dao/DespesaDAO.php';

// 4. CONTROLLERS
require_once __DIR__ . '/../app/controller/CategoriaController.php';
require_once __DIR__ . '/../app/controller/ReceitaController.php';
require_once __DIR__ . '/../app/controller/DespesaController.php';

// 5. CRIA A CONEXÃO PDO
$conn = Database::conectar();

// 6. INSTANCIA OS DAOs
$categoriaDAO = new CategoriaDAO($conn);
$receitaDAO   = new ReceitaDAO($conn);
$despesaDAO   = new DespesaDAO($conn);

// 7. INSTANCIA OS CONTROLLERS
$categoriaController = new CategoriaController($conn);
$receitaController   = new ReceitaController($conn);
$despesaController   = new DespesaController($conn);

//$despesaController->criar("Água", 60.00, "2026-01-10", true, 'Água');
$a = $despesaController->listarDespesas();
$b = $despesaController->calcDespMesAtual();
$c = $despesaController->DespCategoria();

echo "<pre>";
    print_r($a);
echo "br";
    print_r($b);
echo "br";
    print_r($c);
echo "</pre>";
?>
