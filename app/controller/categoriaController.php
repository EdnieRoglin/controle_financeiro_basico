<?php 
require_once __DIR__ . '/../dao/CategoriaDAO.php';

class CategoriaController{
    private CategoriaDAO $categoriaDAO;

    public function __construct(PDO $conn) {
        $this->categoriaDAO = new CategoriaDAO($conn);
    }

    public function criar($nome, $tipo){
        if(empty($nome)){
            throw new Exception("Nome não pode estar vazio");
        }

        if(empty($tipo)){
            throw new Exception("Tipo não pode ser vazio");
        }

        $categoria = new Categoria(
            no: $nome,
            ti: $tipo,
        );
        
        return $this->categoriaDAO->criar($categoria);
    }

    public function buscarId($nomeCategoria){
        if(empty($nomeCategoria)){
            throw new Exception("O nome da categoria não pode estar vazio");
        }

        return $this->categoriaDAO->buscarId($nomeCategoria);
    }

    public function mudarNome($novoNome, $id){
         if(empty($nome)){
            throw new Exception("Nome não pode estar vazio");
        }

        $this->categoriaDAO->mudarNome($novoNome, $id);
    }
    
    public function listarAtivas(){
        return $this->categoriaDAO->listarAtivas();
    }

    public function listarInativas(){
        return $this->categoriaDAO->listarInativas();
    }

    public function listarTodas(){
        return $this->categoriaDAO->listarTodas();
    }

    public function inativar($buscarNome){
        if(empty($id)){
            throw new Exception("O Campo 'ID' não pode ser vazio");
        }

        $buscarNome = $this->categoriaDAO->buscarId($id);

        if(!$buscarNome){
            throw new Exception("Categoria com ID '{$buscarNome}' não encontrada");
        }

        return $this->categoriaDAO->inativar($id);
    }
}
    
?>