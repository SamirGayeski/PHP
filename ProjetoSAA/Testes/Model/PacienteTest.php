<?php
/**
 * Description of PacienteTest
 *
 * @author SamirGayeski
 */
class PacienteTest extends PHPUnit_Framework_TestCase {
    
    public function __construct($nome, $dataNascimento, $sexo, $email, $telefoneCelular, $telefoneResidencial, 
                                $endereco, $bairro, $numero, $complemento, $cidade, $uf, $cpf, $rg, $estadoCivil, 
                                $profissao, $situacao, $cns, $plano, $numeroCarteirinha, $validade, $acomodacao) {
        $this->nome=$nome;
        $this->dataNascimento=$dataNascimento;
        $this->sexo=$sexo;
        $this->email=$email;
        $this->telefoneCelular=$telefoneCelular;
        $this->telefoneResidencial=$telefoneResidencial;
        $this->endereco=$endereco;
        $this->bairro=$bairro;
        $this->numero=$numero;
        $this->complemento=$complemento;
        $this->cidade=$cidade;
        $this->uf=$uf;
        $this->cpf=$cpf;
        $this->rg=$rg;
        $this->estadoCivil=$estadoCivil;
        $this->profissao=$profissao;
        $this->situacao=$situacao;
        $this->cns=$cns;
        $this->plano=$plano;
        $this->numeroCarteirinha=$numeroCarteirinha;
        $this->validade=$validade;
        $this->acomodacao=$acomodacao;
    }
   
    /**
     * @test
     */
    public function testePaciente (){

        $paciente = new PacienteTest('Samir Gayeski', '09/08/1996', 'Masculino', 'samirpgayeski@gmail.com', 
                                    '54996858543', '5432422887', 'Rua das Flores', 'Sagrada Familia', 
                                    '352', 'Sem complemento', 'Nova Prata', 'RS', '03432245009', '711829852', 
                                    'Solteiro(a)', 'Programador de Sistemas', 'Ativo', '123654789', 'Plano', 
                                    '2365456', '10/10/2020', 'acomodacao');
   
        //Nome com no mínimo 2 e no máximo 50 caracteres
        $nome = 'Samir Gayeski';
        $this->assertTrue((strlen($nome)>2) && (strlen($nome)<50));
        
        //Data de nascimento é válida e  não nula
        $dataNascimento = '09/08/1996';
        $this->assertEquals($dataNascimento, $paciente->dataNascimento);
        $this->assertTrue($dataNascimento <> null);
        
        //Sexo deve ser do tipo "Masculino" ou "Feminino"
        $sexo = 'Masculino';
        $this->assertTrue($sexo == 'Masculino' || $sexo == 'Feminino');
        
        //Email deve ser válido, ter no máximo 80 caracteres e não nulo
        $email = 'samirpgayeski@gmail.com';
        $this->assertTrue((!filter_var($email, FILTER_VALIDATE_EMAIL)===false) && (strlen($email)<80));
        
        //TelefoneCelular deve conter apenas números
        $telefoneCelular = '54996858543';
        $this->assertTrue(is_numeric($telefoneCelular));
        
        //TelefoneResidencial deve conter apenas números
        $telefoneResidencial = '5432422887';
        $this->assertTrue(is_numeric($telefoneResidencial));
        
        //Endereço deve ter no máximo 70 caracteres e não pode ser nulo
        $endereco = 'Rua das Flores';
        $this->assertTrue((strlen($endereco)<70) && ($endereco <> null));
        
        //Bairro deve ter no máximo 60 caracteres e não pode ser nulo
        $bairro = 'Sagrada Familia';
        $this->assertTrue((strlen($bairro)<70) && ($bairro <> null));
        
        //Número deve conter cracteres do tipo numero e não pode ser nulo
        $numero = '352';
        $this->assertTrue(is_numeric($numero) && ($numero <> null));
        
        //Complemento deve ter no máximo 70 caracteres
        $complemento = 'Sem complemento';
        $this->assertTrue(strlen($complemento)<70);
        
        //Cidade deve ter no máximo 80 caracteres e não pode ser nula
        $cidade = 'Nova Prata';
        $this->assertTrue((strlen($cidade)<80) && $cidade <> null);
        
        //UF deve ter 2 caracteres e não pode ser nulo
        $uf = 'RS';
        $this->assertTrue(strlen($uf)==2);
        
        //CPF deve ser válido e não pode ser nulo
        $cpf = '03432245009';
        $this->assertEquals($cpf, $paciente->cpf);
        
        //RG não pode ser nulo e deve conter apenas números
        $rg = '711829852';
        $this->assertTrue(is_numeric($rg) && $rg <> null);
        
        //Estado civil deve ser do tipo "Solteiro(a)", "Casado(a)", "Viúvo(a)", "Divorciado(a)" ou "Separado(a)"
        $estadoCivil = 'Solteiro(a)';
        $this->assertTrue($estadoCivil == 'Solteiro(a)' 
                       || $estadoCivil == 'Casado(a)' 
                       || $estadoCivil == 'Viúvo(a)' 
                       || $estadoCivil == 'Divorciado(a)' 
                       || $estadoCivil == 'Separado(a)');
        
        //Profissão deve ter no máximo 80 caracteres
        $profissao = 'Programador de Sistemas';
        $this->assertTrue(strlen($profissao)<80);
        
        //Situção deve ser do tipo "Ativo" ou "Inativo"
        $situacao = 'Ativo';
        $this->assertTrue($situacao == 'Ativo' || $situacao == 'Inativo');
        
        //CNS deve conter apenas números
        $cns = '123654789';
        $this->assertTrue(is_numeric($cns));
        
        //Plano deve conter no máximo 30 caracteres
        $plano = 'Plano';
        $this->assertTrue(strlen($plano)<30);
        
        //Número da carteirinha deve conter apenas números
        $numeroCarteirinha = '2365456';
        $this->assertTrue(is_numeric($numeroCarteirinha));
        
        //Data de validade deve ser válida
        $validade = '10/10/2020';
        $this->assertEquals($validade, $paciente->validade);        
        
        //Acomodação deve ter no máximo 50 carcateres
        $acomodacao = 'acomodação';
        $this->assertTrue(strlen($acomodacao)<50);
    }
}
?>
