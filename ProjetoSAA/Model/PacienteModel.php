<?php

    class PacienteModel {
        private $idPaciente;
        private $nome;
        private $dataNascimento;
        private $sexo;
        private $email;
        private $telefoneCelular;
        private $telefoneResidencial;
        private $endereco;
        private $bairro;
        private $numero;
        private $complemento;
        private $cidade;
        private $uf;
        private $cpf;
        private $rg;
        private $estadoCivil;
        private $profissao;
        private $situacao;
        private $cns;
        private $idconvenio;
        private $plano;
        private $numeroCarteirinha;
        private $validade;
        private $acomodacao;
        
        public function __construct() {}

        public function __set($propriedade, $valor){
            $this->$propriedade = $valor;
        }

        public function __get($propriedade){
            return $this->$propriedade;
        }
    }

?>

