<?php 
require_once __DIR__ . '/../dao/ReceitaDAO.php';


class ReceitaController{
    private ReceitaDao $receitaDao;

    public function __construct(PDO $conn){
        $this->receitaDao = new ReceitaDao($conn);
    }

    public function criar($nome, $valor, $dataReceita, $recorrente){
        if(empty($nome)){
            throw new Exception("O nome não pode estar vazio!");
        }

        if(empty($valor)){
            throw new Exception("O valor deve ser válido!");
        }

        if(empty($dataReceita)){
            throw new Exception("Insira um data válida!");
        }

        $receita = new Receita(
            no: $nome,
            va: $valor,
            da: $dataReceita,
            re: $recorrente
        );

        return $this->receitaDao->criar($receita);
    }

    public function listarReceitas(){
        $this->receitaDao->listarReceitas();
    }

    public function calcReceiMesAtual(){
        $this->receitaDao->calcReceiMesAtual();
    }

    public function listarRecorrente(){
        $this->receitaDao->listarRecorrentes();
    }

    public function listarIsoladas(){
        $this->receitaDao->listarIsoladas();
    }
}
?>