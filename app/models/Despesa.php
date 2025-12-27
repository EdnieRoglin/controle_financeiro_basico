<?php 
    class Despesa{
        private int $id;
        private string $nome;
        private float $valor;
        private int $dataDespesa;
        private bool $recorrente;
        private int $categoriaId;

        public function __construct(string $no, float $va, int $de, bool $re){
            $this->nome = $no;
            $this->valor = $va;
            $this->dataDespesa = $de;
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

        public function getDataDespesa(){
            return $this->dataDespesa;
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

        public function setDataDespesa($de){
            $this->dataDespesa = $de;
        }

        public function setRecorrente($re){
            $this->recorrente = $re;
        }

        public function setCategoriaId($ca){
            $this->categoriaId = $ca;
        }
    }
?>