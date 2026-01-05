<?php 
    require_once __DIR__ . "/dao/CategoriaDAO.php";
    require_once __DIR__ . "/models/Categoria.php";

class CategoriaController{
    private CategoriaDAO $categoriaDAO;

    public function __construct(PDO $conn){
        $this->categoriaDAO = new CategoriaDAO($conn);
    }

    public function criar( $nome, $tipo){
        if(empty($nome)){
            throw new Exception("Nome não pode estar vazio");
        }

        if(empty($tipo)){
            throw new Exception("Tipo não pode ser vazio");
        }

        $categoria = new Categoria(
            no: $nome,
            ti: $tipo,
            at: true
        );
        
        return $this->categoriaDAO->criar($categoria);
    }

    public function mudarNome($novoNome, $id){
         if(empty($nome)){
            throw new Exception("Nome não pode estar vazio");
        }

        $this->categoriaDAO->mudarNome($novoNome, $id);
    }
    
    public function listarAtivas(){
        $this->categoriaDAO->listarAtivas();
    }

    public function inativar($id){
        if(empty($id)){
            throw new Exception("O Campo 'ID' não pode ser vazio");
        }

        $this->categoriaDAO->inativar($id);
    }
}
    
?>