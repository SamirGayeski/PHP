<?php

session_start();
include '../Model/ConvenioModel.php';
include '../Dao/ConvenioDAO.php';

if (isset($_GET['operation'])) {
    switch ($_GET['operation']) {
        case 'cadastrar':
            if ((!empty($_POST['txtNome'])) &&
               (!empty($_POST['txtnumeroRegistro']))) {

                $erros = array();

                if (count($erros) == 0) {
                    $convenio = new ConvenioModel();

                    $convenio->nome = $_POST['txtNome'];
                    $convenio->numeroRegistro = $_POST['txtnumeroRegistro'];

                    $convenioDAO = new ConvenioDAO();
                    $convenioDAO->insertConvenio($convenio);
                    header ("location:../View/Convenio/indexConvenio.php");
                } else {
                    echo "Informe todos os campos!";
                }
            }
        break;

        case 'consultar':
                $convenioDAO = new ConvenioDAO();
                $array = array();
                $array = $convenioDAO->searchConvenio();
                
                $_SESSION['convenio'] = serialize($array);
                header("location:../View/Convenio/indexConvenio.php");
        break;
        
        case 'excluir':
            if (isset($_REQUEST['idConvenio'])) {
                $convenioDAO = new ConvenioDAO();
                $convenioDAO->deleteConvenio($_REQUEST['idConvenio']);
                header('location:../Controller/ConvenioController.php?operation=consultar');
            } else {
                echo 'Convênio informado não existente!';
            }
        break;
        
        case 'alterar':
            if ((!empty($_POST['txtNome'])) &&
                (!empty($_POST['txtnumeroRegistro']))) {

                $erros = array();

                if (count($erros) == 0) {
                    $convenio = new ConvenioModel();                   
                    
                    $convenio->idConvenio = $_POST['txtId']; 
                    $convenio->nome = $_POST['txtNome'];
                    $convenio->numeroRegistro = $_POST['txtnumeroRegistro'];                                      
                    
                    $convenioDAO = new ConvenioDAO();
                    $convenioDAO->updateConvenio($convenio);
                    header ("location:../View/Convenio/indexConvenio.php");
                } else {
                    echo "Informe todos os campos!";
                }
            }
        break;
            
    }
}
?>