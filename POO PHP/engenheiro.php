<?php
    include_once ('Pessoa.php');
/**
 * Subclasse Engenheiro com propriedades da SuperClasse Pessoa e propriedade CREA
 * @author Felipe
 * @version 1.0
 * @package POO PHP
 */
    class Engenheiro extends Pessoa{

    private $CREA;
    /**
     * Metódo de acessar a propriedade CREA
     * @access public
     * @return String 
     */
    public function getCREA(){
        return $this->CREA;
    }
    /**
     * Método para setar a propriedade CREA
     * @access public
     * @param String
     */
    public function setCREA($CREA){
        $this->CREA =$CREA;
    }

    

    }




?>