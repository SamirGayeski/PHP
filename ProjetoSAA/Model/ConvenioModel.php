<?php
    
    class ConvenioModel {
        private $idConvenio;
        private $nome;
        private $numeroRegistro;
        
        public function __construct() {}
        
        public function __set($propriedade, $valor){
            $this->$propriedade = $valor;
        }

        public function __get($propriedade){
            return $this->$propriedade;
        }
    }

?>
