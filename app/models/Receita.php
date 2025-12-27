<?php 
    class Receita{
        private int $id;
        private string $nome;
        private float $valor;
        private int $dataReceita;
        private bool $recorrente;
        private int $categoriaId;

        public function __construct(string $no, float $va, int $da, bool $re){
            $this->nome = $no;
            $this->valor = $va;
            $this->dataReceita = $da;
            $this->recorrente = $re;
        }

        public function getId(){
            return $this->id;
        }

        public function getNome(){
            return $this->nome;
        }

        public function getValor(){
            return $this->valor;
        }

        public function getDataReceita(){
            return $this->dataReceita;
        }

        public function getRecorrente(){
            return $this->recorrente;
        }

        public function getCategoriaId(){
            return $this->categoriaId;
        }

        public function setId($id){
            $this->id = $id;
        }

        public function setNome($no){
            $this->nome = $no;
        }

        public function setValor($va){
            $this->valor = $va;
        }

        public function setDataReceita($da){
            $this->dataReceita = $da;
        }

        public function setRecorrente($re){
            $this->recorrente = $re;
        }

        public function setCategoriaId($ca){
            $this->categoriaId = $ca;
        }
    }
?>