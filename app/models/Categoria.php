<?php 
    class Categoria {
        private int $id;
        private string $nomeCategoria;
        private string $tipo;
        private bool $ativo;

        public function __construct(string $no, string $ti){
            $this->nomeCategoria = $no;
            $this->tipo = $ti;
            $this->setAtivo(true);
        }

        public function alterarNome($no){
            $this->setNome($no);
        }

        public function getId(){
            return $this->id;
        }

        public function getNome(){
            return $this->nomeCategoria;
        }

        public function getTipo(){
            return $this->tipo;
        }

        public function getAtivo(){
            return $this->ativo;
        }

        public function setNome($no){
            $this->nomeCategoria = $no;
        }

        public function setAtivo($at){
            $this->ativo = $at;
        }
    }
?>