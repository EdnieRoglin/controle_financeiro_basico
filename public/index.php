<?php 

// CONFIGURAÇÕES
require_once dirname(__DIR__) . '/config/Database.php';

// MODELS
require_once dirname(__DIR__) . '/app/models/Categoria.php';

// DAOs
require_once dirname(__DIR__) . '/app/dao/CategoriaDAO.php';

// CONTROLLERS
require_once dirname(__DIR__) . '/app/controller/CategoriaController.php';

// INICIALIZAÇÃO
$conn = DataBase::conectar();

$categoriaDAO = new CategoriaDAO($conn);
$categoriaController = new CategoriaController($categoriaDao);

?>