<?php 
    class Receita{
        private int $id;
        private string $nomeReceita;
        private float $valor;
        private string $dataReceita;
        private bool $recorrente;
        private int $categoriaId;

        public function __construct(string $no, float $va, string $da, bool $re, int $categoriaId){
            $this->nomeReceita = $no;
            $this->valor = $va;
            $this->dataReceita = $da;
            $this->recorrente = $re;
            $this->categoriaId = $categoriaId;
        }

        public function getId(){
            return $this->id;
        }

        public function getNome(){
            return $this->nomeReceita;
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
            $this->nomeReceita = $no;
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