<?php 
    class Categoria {
        private int $id;
        private string $nome;
        private string $tipo;
        private bool $ativo;

        public function __construct(string $no, string $ti, bool $at){
            $this->nome = $no;
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
            return $this->nome;
        }

        public function getTipo(){
            return $this->tipo;
        }

        public function getAtivo(){
            return $this->ativo;
        }

        public function setNome($no){
            $this->nome = $no;
        }

        public function setAtivo($at){
            $this->ativo = $at;
        }
    }
?>