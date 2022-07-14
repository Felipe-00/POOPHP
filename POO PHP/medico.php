<?php
    include_once ('Pessoa.php');
    /**
 * Subclasse Medico com propriedades da SuperClasse Pessoa e propriedade CRM
 * @author Felipe
 * @version 1.0
 * @package POO PHP
 */
    
    class Medico extends Pessoa{

    private $CRM;
    /**
     * Metódo de acessar a propriedade CRM
     * @access public
     * @return String
     */
    public function getCRM(){
        return $this->CRM;
    }
     /**
     * Método para setar a propriedade CRM
     * @access public
     * @param String
     */
    public function setCRM($CRM){
        $this->CRM =$CRM;
    }

    

    }




?>