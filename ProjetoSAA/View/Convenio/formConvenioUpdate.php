<?php
include '../../Persistence/ConnectionDB.php';

class Convenio {

    private $connection;

    function __construct() {
        $this->connection = ConnectionDB::getInstance();
    }

    public function buscarDados() {
        $sql = "SELECT idConvenio, nome, numeroRegistro FROM convenio WHERE idConvenio = {$_GET['idConvenio']}";
        $query = $this->connection->query($sql);

        return $query->fetchAll();
    }

}

$obj = new Convenio();

$result = $obj->buscarDados();

?>
<html>
    <head>
        <title>Manutenção de Convênios</title>
        <link rel="icon" href="../../Imagens/title.ico" type="image/x-icon" />
        <meta charset="UTF-8">
        <link href="../../Bootstrap/css/bootstrap.css" rel="stylesheet" />
        <link href="../../Bootstrap/css/projeto.css" rel="stylesheet" />
    </head>
    <body>
        <div class="container">
            <h1 style="color: #286090">Cadastro de Convênios</h1>
            <form action="../../Controller/ConvenioController.php?operation=alterar"
                  name="updateConvenios"
                  method="post" role="form">
                <div class="col-lg-8">
                    <div class="hidden-lg">
                        <label for="idConvenio" class="col-sm-2 control-label">Id</label>
                        <input type="number" class="form-control" id="txtId" 
                               name="txtId" onload="true"
                               value="<?php print_r ($result[0]['idConvenio']) ?>"/>           
                    </div>
                    <div class="form-group">
                        <label for="nome" class="col-sm-2 control-label">Convênio *</label>
                        <input type="text" class="form-control" id="txtNome" 
                               name="txtNome" placeholder="Insira o nome do convênio"
                               value="<?php print_r ($result[0]['nome']) ?>"
                               x-moz-errormessage="O convênio não pode ser nulo e deve conter no mínimo 2 e no máximo 50 caracteres!" 
                               minlength="2" maxlength="50" required/>           
                    </div>

                    <div class="form-group">
                        <label for="numeroRegistro" class="col-sm-6 control-label">Nº Registro *</label>
                        <input type="text" class="form-control" id="txtnumeroRegistro" 
                               name="txtnumeroRegistro" placeholder="Informe o número do registro"
                               value="<?php echo $result[0]['numeroRegistro'] ?>"
                               x-moz-errormessage="O campo não pode ser nulo e deve conter apenas números!" 
                               pattern="[0-9]+$" required="required" maxlength="10"/>
                    </div>
                    <button type="submit" class="btn btn-success">
                        Salvar
                    </button>
                    <a type="reset" class="btn btn-danger" href="indexConvenio.php">Cancelar</a>
                </div>
            </form>
        </div>
        </br>
    </body>
</html>