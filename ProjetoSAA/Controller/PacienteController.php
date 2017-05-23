<?php

session_start();
include '../Model/PacienteModel.php';
include '../Dao/PacienteDAO.php';

if (isset($_GET['operation'])) {
    switch ($_GET['operation']) {
        case 'cadastrar':
            if ((!empty($_POST['txtNome'])) &&
                    (!empty($_POST['txtDataNascimento'])) &&
                    (!empty($_POST['txtSexo'])) &&
                    (!empty($_POST['txtEmail'])) &&
                    (!empty($_POST['txtEndereco'])) &&
                    (!empty($_POST['txtBairro'])) &&
                    (!empty($_POST['txtNumero'])) &&
                    (!empty($_POST['txtCidade'])) &&
                    (!empty($_POST['txtUf'])) &&
                    (!empty($_POST['txtCpf'])) &&
                    (!empty($_POST['txtRg'])) &&
                    (!empty($_POST['txtEstadoCivil'])) &&
                    (!empty($_POST['txtProfissao']))) {

                $erros = array();

                if (count($erros) == 0) {
                    $paciente = new PacienteModel();

                    $paciente->nome = $_POST['txtNome'];
                    $paciente->dataNascimento = $_POST['txtDataNascimento'];
                    $paciente->sexo = $_POST['txtSexo'];
                    $paciente->email = $_POST['txtEmail'];
                    $paciente->telefoneCelular = $_POST['txtTelefoneCelular'];
                    $paciente->telefoneResidencial = $_POST['txtTelefoneResidencial'];
                    $paciente->endereco = $_POST['txtEndereco'];
                    $paciente->bairro = $_POST['txtBairro'];
                    $paciente->numero = $_POST['txtNumero'];
                    $paciente->complemento = $_POST['txtComplemento'];
                    $paciente->cidade = $_POST['txtCidade'];
                    $paciente->uf = $_POST['txtUf'];
                    $paciente->cpf = $_POST['txtCpf'];
                    $paciente->rg = $_POST['txtRg'];
                    $paciente->estadoCivil = $_POST['txtEstadoCivil'];
                    $paciente->profissao = $_POST['txtProfissao'];
                    $paciente->situacao = $_POST['txtSituacao'];
                    $paciente->cns = $_POST['txtCns'];
                    $paciente->idconvenio = $_POST['txtIdConvenio'];
                    $paciente->plano = $_POST['txtPlano'];
                    $paciente->numeroCarteirinha = $_POST['txtNumeroCarteirinha'];
                    $paciente->validade = $_POST['txtValidade'];
                    $paciente->acomodacao = $_POST['txtAcomodacao'];


                    $pacienteDAO = new PacienteDAO();
                    $pacienteDAO->insertPaciente($paciente);
                    header ("location:../View/Paciente/indexPaciente.php");
                }
            } else {
                echo "Informe todos os campos obrigatórios!";
            }
        break;

        case 'consultar':
            $pacienteDAO = new PacienteDAO();
            $array = array();
            $array = $pacienteDAO->searchPaciente();

            $_SESSION['paciente'] = serialize($array);
            header("location:../View/Paciente/indexPaciente.php");
        break;

        case 'excluir':
            if (isset($_REQUEST['idPaciente'])) {
                $pacienteDAO = new PacienteDAO();
                $pacienteDAO->deletePaciente($_REQUEST['idPaciente']);
                header('location:../Controller/PacienteController.php?operation=consultar');
            } else {
                echo 'Paciente informado não existente!';
            }
        break;
        
        case 'alterar':            
            if ((!empty($_POST['txtNome'])) &&
                    (!empty($_POST['txtDataNascimento'])) &&
                    (!empty($_POST['txtSexo'])) &&
                    (!empty($_POST['txtEmail'])) &&
                    (!empty($_POST['txtEndereco'])) &&
                    (!empty($_POST['txtBairro'])) &&
                    (!empty($_POST['txtNumero'])) &&
                    (!empty($_POST['txtCidade'])) &&
                    (!empty($_POST['txtUf'])) &&
                    (!empty($_POST['txtCpf'])) &&
                    (!empty($_POST['txtRg'])) &&
                    (!empty($_POST['txtEstadoCivil'])) &&
                    (!empty($_POST['txtProfissao']))) {

                $erros = array();

                if (count($erros) == 0) {
                    $paciente = new PacienteModel();                   

                    $paciente->idPaciente = $_POST['txtIdPaciente'];
                    $paciente->nome = $_POST['txtNome'];
                    $paciente->dataNascimento = $_POST['txtDataNascimento'];
                    $paciente->sexo = $_POST['txtSexo'];
                    $paciente->email = $_POST['txtEmail'];
                    $paciente->telefoneCelular = $_POST['txtTelefoneCelular'];
                    $paciente->telefoneResidencial = $_POST['txtTelefoneResidencial'];
                    $paciente->endereco = $_POST['txtEndereco'];
                    $paciente->bairro = $_POST['txtBairro'];
                    $paciente->numero = $_POST['txtNumero'];
                    $paciente->complemento = $_POST['txtComplemento'];
                    $paciente->cidade = $_POST['txtCidade'];
                    $paciente->uf = $_POST['txtUf'];
                    $paciente->cpf = $_POST['txtCpf'];
                    $paciente->rg = $_POST['txtRg'];
                    $paciente->estadoCivil = $_POST['txtEstadoCivil'];
                    $paciente->profissao = $_POST['txtProfissao'];
                    $paciente->situacao = $_POST['txtSituacao'];
                    $paciente->cns = $_POST['txtCns'];
                    $paciente->idConvenio = $_POST['txtIdConvenio'];
                    $paciente->plano = $_POST['txtPlano'];
                    $paciente->numeroCarteirinha = $_POST['txtNumeroCarteirinha'];
                    $paciente->validade = $_POST['txtValidade'];
                    $paciente->acomodacao = $_POST['txtAcomodacao'];                                     
                    
                    $pacienteDAO = new PacienteDAO();
                    $pacienteDAO->updatePaciente($paciente);

                    header ("location:../View/Paciente/indexPaciente.php");
                } else {
                    echo "Informe todos os campos!";
                }
            }
        break;
    }
}
?>