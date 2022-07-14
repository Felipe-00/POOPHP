<?php

/**
 * SuperClasse pessoa com propriedades nome, data de nascimento, cpf e rg
 * @author Felipe
 * @version 1.0
 * @package POO PHP
 */
    class Pessoa{
        private $nome;
        private $dataNasc;
        private $CPF;
        private $RG;


        /**
         * Metódo de acessar a propriedade nome
         * @access public
         * @return String
         */
        public function getNome(){
            return $this->nome;
        }
        /**
         * Método para setar a propriedade nome
         * @access public
         * @param String
         */
        public function setNome($nome){
            $this->nome=$nome;
        }
         /**
         * Metódo de acessar a propriedade data de nascimento
         * @access public
         * @return String
         */
        public function getData(){
            return $this->dataNasc;
        }
         /**
         * Método para setar a propriedade data nascimento
         * @access public
         * @param String
         */
        public function setData($dataNasc){
            $this->dataNasc=$dataNasc;
        }
        /**
         * Metódo de acessar a propriedade CPF
         * @access public
         * @return String
         */
        public function getCPF(){
            return $this->CPF;
        }
         /**
         * Método para setar a propriedade CPF
         * @access public
         * @param String
         */
        public function setCPF($CPF){
            $this->CPF=$CPF;
        }
         /**
         * Metódo de acessar a propriedade RG
         * @access public
         * @return String
         */
        public function getRG(){
            return $this->RG;
        }
         /**
         * Método para setar a propriedade RG
         * @access public
         * @param String
         */
        public function setRG($RG){
            $this->RG=$RG;
        }


    }

    
   




?>