<?php 
    class Despesa{
        private int $id;
        private string $nomeDespesa;
        private float $valor;
        private string $dataDespesa;
        private bool $recorrente;
        private $categoriaId;

        public function __construct(string $no, float $va, string $de, bool $re, $categoriaId){
            $this->nomeDespesa = $no;
            $this->valor = $va;
            $this->dataDespesa = $de;
            $this->recorrente = $re;
            $this->categoriaId = $categoriaId;
        }

        public function getId(){
            return $this->id;
        }

        public function getNome(){
            return $this->nomeDespesa;
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
            $this->nomeDespesa = $no;
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