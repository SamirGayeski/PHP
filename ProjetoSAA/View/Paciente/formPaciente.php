<html>
    <head>
        <title>Cadastro de Pacientes</title>
        <link rel="icon" href="../../Imagens/title.ico" type="image/x-icon" />
        <meta charset="UTF-8">
        <link href="../../Bootstrap/css/bootstrap.css" rel="stylesheet" />
        <link href="../../Bootstrap/css/projeto.css" rel="stylesheet" />
    </head>
    <body>
        <div class="container">
            <h1 style="color: #286090">Cadastro de Pacientes</h1>
            <form action="../../Controller/PacienteController.php?operation=cadastrar"
                  name="cadastroPacientes"
                  method="post" role="form">
                <div class="col-lg-8">

                    <div class="form-group">
                        <label for="nome" class="col-sm-2 control-label">Nome *</label>
                        <input type="text" class="form-control" id="txtNome" 
                               name="txtNome" placeholder="Insira o nome do paciente" 
                               x-moz-errormessage="O nome não pode ser nulo e deve conter no mínimo 2 e no máximo 70 caracteres!"
                               minlength="2" maxlength="70" required/>           
                    </div>

                    <div class="form-group">
                        <label for="dataNascimento" class="col-sm-6 control-label">Data de Nascimento *</label>
                        <input type="text" class="form-control" id="txtDataNascimento" 
                               name="txtDataNascimento" placeholder="Ex.: dd/mm/aaaa"
                               maxlength="10" pattern="[0-9]{2}\/[0-9]{2}\/[0-9]{4}$"
                               x-moz-errormessage="A data de nascimento deve conter o seguinte formato dd/mm/aaaa!"
                               required/>           
                    </div>

                    <div class="form-group">
                        <label for="sexo" class="col-sm-2 control-label">Sexo *</label> 
                        <select type="text" class="form-control" id="txtSexo" 
                                name="txtSexo">
                            <option value="" selected="selected">Selecione o sexo</option>
                            <option value="Masculino">Masculino</option>
                            <option value="Feminino">Feminino</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="email" class="col-sm-6 control-label">Email *</label>
                        <input type="email" class="form-control" id="txtEmail" 
                               name="txtEmail" placeholder="exemplo@exemplo.com"
                               pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"
                               x-moz-errormessage="Insira um e-mail válido!" maxlength="40"
                               required/>           
                    </div>

                    <div class="form-group">
                        <label for="telefoneCelular" class="col-sm-6 control-label">Telefone Celular</label>
                        <input type="text" class="form-control" id="txtTelefoneCelular" 
                               name="txtTelefoneCelular" placeholder="(xx) xxxxx-xxxx" maxlength="15"
                               x-moz-errormessage="O telefone celular deve ter no máximo 15 caracteres!"/>           
                    </div>

                    <div class="form-group">
                        <label for="telefoneResidencial" class="col-sm-6 control-label">Telefone Residencial</label>
                        <input type="text" class="form-control" id="txtTelefoneResidencial" 
                               name="txtTelefoneResidencial" placeholder="(xx) xxxx-xxxx" maxlength="15"
                               x-moz-errormessage="O telefone residencial deve ter no máximo 15 caracteres!"/>           
                    </div>

                    <div class="form-group">
                        <label for="endereco" class="col-sm-6 control-label">Endereço *</label>
                        <input type="text" class="form-control" id="txtEndereco" 
                               name="txtEndereco" placeholder="Informe o endereço" maxlength="70"
                               x-moz-errormessage="O endereço não pode ser nulo!" required/>           
                    </div>

                    <div class="form-group">
                        <label for="bairro" class="col-sm-6 control-label">Bairro *</label>
                        <input type="text" class="form-control" id="txtBairro" 
                               name="txtBairro" placeholder="Informe o bairro" maxlength="70"
                               x-moz-errormessage="O bairro não pode ser nulo!" required/>           
                    </div>

                    <div class="form-group">
                        <label for="numero" class="col-sm-6 control-label">Número *</label>
                        <input type="number" class="form-control" id="txtNumero" 
                               name="txtNumero" placeholder="Informe o número" maxlength="6"
                               x-moz-errormessage="O número não pode ser nulo! E deve conter apenas números" required/>           
                    </div>

                    <div class="form-group">
                        <label for="complemento" class="col-sm-6 control-label">Complemento</label>
                        <input type="text" class="form-control" id="txtComplemento" 
                               name="txtComplemento" placeholder="Informe um complemento" maxlength="50"
                               x-moz-errormessage="O complemento deve ter no máximo 50 caracteres!"/>           
                    </div>

                    <div class="form-group">
                        <label for="cidade" class="col-sm-6 control-label">Cidade *</label>
                        <input type="text" class="form-control" id="txtCidade" 
                               name="txtCidade" placeholder="Informe a cidade" maxlength="30"
                               x-moz-errormessage="A cidade não pode ser nula!" required/>           
                    </div>

                    <div class="form-group">
                        <label for="uf" class="col-sm-6 control-label">UF *</label>
                        <input type="text" class="form-control" id="txtUf" 
                               name="txtUf" placeholder="Informe a UF" maxlength="2" pattern="[a-z\S]+$"
                               x-moz-errormessage="A uf não pode ser nula e deve ter no máximo 2 caracteres!" required/>           
                    </div>

                    <div class="form-group">
                        <label for="cpf" class="col-sm-6 control-label">CPF *</label>
                        <input type="text" class="form-control" id="txtCpf" 
                               name="txtCpf" placeholder="Informe o número do CPF" maxlength="14" pattern="\d{3}\.\d{3}\.\d{3}-\d{2}"
                               x-moz-errormessage="Insira um CPF válido! EX.: 000.000.000-00" required/>           
                    </div>

                    <div class="form-group">
                        <label for="rg" class="col-sm-6 control-label">RG *</label>
                        <input type="number" class="form-control" id="txtRg" 
                               name="txtRg" placeholder="Informe o npumero do RG" maxlength="15"
                               x-moz-errormessage="O RG não pode ser nulo!" required/>           
                    </div>

                    <div class="form-group">
                        <label for="estadoCivil" class="col-sm-6 control-label">Estado Civil *</label>
                        <select type="text" class="form-control" id="txtEstadoCivil" name="txtEstadoCivil">
                            <option value="" selected="selected">Selecione o estado civil</option>
                            <option value="Solteiro(a)">Solteiro(a)</option>
                            <option value="Casado(a)">Casado(a)</option>
                            <option value="Viúvo(a)">Viúvo(a)</option>
                            <option value="Divorciado(a)">Divorciado(a)</option>
                            <option value="Separado(a)">Separado(a)</option>
                        </select>          
                    </div>

                    <div class="form-group">
                        <label for="profissao" class="col-sm-6 control-label">Profissão *</label>
                        <input type="text" class="form-control" id="txtProfissao" 
                               name="txtProfissao" placeholder="Informe a profissão" maxlength="30"
                               x-moz-errormessage="A profissão não pode ser nula e deve ter no máximo 30 caracteres!" required/>           
                    </div>

                    <div class="form-group">
                        <label for="situacao" class="col-sm-2 control-label">Situação *</label>    
                        </br>
                        <label class="radio-inline">
                            <input type="radio" value="Ativo" id="txtSituacao"
                                   name="txtSituacao" checked>Ativo</label>
                        <label class="radio-inline">
                            <input type="radio" value="Inativo" id="txtSituacao"
                                   name="txtSituacao">Inativo</label>  
                    </div>    

                    <div class="form-group">
                        <label for="cns" class="col-sm-6 control-label">CNS</label>
                        <input type="number" class="form-control" id="txtCns" 
                               name="txtCns" placeholder="Informe o número do CNS" maxlength="15"
                               x-moz-errormessage="O CNS deve possuir apenas números e deve ter no máximo 15 caracteres!"/>           
                    </div>

                    <div class="form-group">
                        <label for="convenio" class="col-sm-6 control-label">Convênio</label>
                        <select name="txtIdConvenio" class="form-control" id="txtIdConvenio">                          
                                <option value="" selected="selected">Selecione um convênio</option>
                                <?php
                                include '../../Persistence/ConnectionDB.php';

                                class Convenio {

                                    private $connection;

                                    function __construct() {
                                        $this->connection = ConnectionDB::getInstance();
                                    }

                                    public function buscarConvenios() {
                                        $sql = "SELECT idConvenio, nome FROM convenio";
                                        $query = $this->connection->query($sql);

                                        return $query->fetchAll();
                                    }

                                }

                                $obj = new Convenio();

                                $result = $obj->buscarConvenios();
                                foreach ($result as $conv) {
                                    echo "<option value='" . $conv['idConvenio'] . "'>";
                                    echo $conv['nome'];
                                    echo "</option>";
                                }
                                ?>                              
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label for="plano" class="col-sm-6 control-label">Plano</label>
                        <input type="text" class="form-control" id="txtPlano" 
                               name="txtPlano" placeholder="Informe o plano do paciente" maxlength="20"
                               x-moz-errormessage="O plano deve ter no máximo 20 caracteres!"/>           
                    </div>
                    
                    <div class="form-group">
                        <label for="numeroCarteirinha" class="col-sm-6 control-label">Nº Carteirinha</label>
                        <input type="number" class="form-control" id="txtNumeroCarteirinha" 
                               name="txtNumeroCarteirinha" placeholder="Informe o número da carteirinha" maxlength="15"
                               x-moz-errormessage="O número da carteirinha deve possuir apenas números e deve ter no máximo 15 caracteres!"/>           
                    </div>

                    <div class="form-group">
                        <label for="validade" class="col-sm-6 control-label">Validade</label>
                        <input type="text" class="form-control" id="txtValidade" 
                               name="txtValidade" placeholder="Ex.: dd/mm/aaaa"
                               maxlength="10" pattern="[0-9]{2}\/[0-9]{2}\/[0-9]{4}$"
                               x-moz-errormessage="A data de nascimento deve conter o seguinte formato dd/mm/aaaa!"/>           
                    </div>

                    <div class="form-group">
                        <label for="acomodacao" class="col-sm-6 control-label">Acomodação</label>
                        <input type="text" class="form-control" id="txtAcomodacao" 
                               name="txtAcomodacao" placeholder="Informe a acomodação" maxlength="20"
                               x-moz-errormessage="O acomodação deve ter no máximo 20 caracteres!"/>           
                    </div>

                    <button type="submit" class="btn btn-success">
                        Salvar
                    </button>
                    <a type="reset" class="btn btn-danger" href="indexPaciente.php">Cancelar</a>
                </div>
            </form>
        </div>
        </br>
    </body>
</html>