<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PacienteModelTest
 *
 * @author SamirGayeski
 */
class ConvenioTest extends PHPUnit_Framework_TestCase {
    
    public function __construct($nome, $numeroRegistro) {
        $this->nome=$nome;
        $this->numeroRegistro=$numeroRegistro;
    }
   
    /**
     * @test
     */
    public function testeConvenio (){

        $convenio = new ConvenioTest('ConvenioTeste', '123456');
        
        //Nome o convênio deve ter no máximo 50 caracteres e não pode ser nulo
        $nome = 'ConvenioTeste';
        $this->assertTrue((strlen($nome)<50) && $nome <> null);
        
        //Número de registro deve conter apenas números e não pode ser nulo
        $numeroRegistro = '123456';
        $this->assertTrue(is_numeric($numeroRegistro) && $numeroRegistro <> null);        
    }
}

?>