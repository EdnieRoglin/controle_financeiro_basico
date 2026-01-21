<?php 
require_once __DIR__ . '/../dao/ReceitaDAO.php';


class ReceitaController{
    private CategoriaDAO $categoriaDao;
    private ReceitaDao $receitaDao;

    public function __construct(PDO $conn) {
        $this->categoriaDao = new CategoriaDAO($conn);
        $this->receitaDao   = new ReceitaDAO($conn);
    }

    public function criar($nome, $valor, $dataReceita, $recorrente, $nomeCategoria){
        if(empty($nome)){
            throw new Exception("O nome não pode estar vazio!");
        }

        if(empty($valor)){
            throw new Exception("O valor deve ser válido!");
        }

        if(empty($dataReceita)){
            throw new Exception("Insira um data válida!");
        }

        $categoriaId = $this->categoriaDao->buscarId($nomeCategoria);
            if (!$categoriaId) {
                throw new Exception("Categoria '{$nomeCategoria}' não encontrada");
            }

        $receita = new Receita(
            no: $nome,
            va: $valor,
            da: $dataReceita,
            re: $recorrente,
            categoriaId: $categoriaId
        );

        return $this->receitaDao->criar($receita);
    }

    public function listarReceitas(){
        return $this->receitaDao->listarReceitas();
    }

    public function receiCategoria(){
        return $this->receitaDao->receiCategoria();
    }

    public function calcReceiMesAtual(){
        return $this->receitaDao->calcReceiMesAtual();
    }

    public function listarRecorrente(){
        return $this->receitaDao->listarRecorrentes();
    }

    public function listarIsoladas(){
        return $this->receitaDao->listarIsoladas();
    }
}
?>