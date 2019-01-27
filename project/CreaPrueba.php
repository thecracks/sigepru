<?php

require('includes/configuration/prepend.inc.php');

class CreaPrueba extends QForm {

    protected function Form_Run() {

//        $this->RenderAjax();
//        $Datos1 = @unserialize($_SESSION['DatosUsuario']);
//
//        if ($Datos1) {
//            $this->user = Usuario::LoadByEmail($Datos1->Email);
//        } else {
//            QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __SUBDIRECTORY__ . '/login');
//            
//        }
    }

    protected function Form_Create() {


        if (isset($_POST["ajaxmsg"])) {
            $ajax = $_POST["ajaxmsg"];

            $evaluacion = new Examen();
            $evaluacion->CabeceraHtml = $ajax;
            $evaluacion->Save();

            $this->functionName();
        }

//        $this->strAction = __VIRTUAL_DIRECTORY__ . __SUBDIRECTORY__ . "/dashboarduser";
//        
//        $this->lstYear = new QListBox($this);
//        $this->lstYear->Width = 150;
//        $this->lstYear->CssClass = "form-control";
//
//        $this->lstYear->AddItem(new QListItem("2017", 2017));
//        $this->lstYear->AddItem(new QListItem("2018", 2018));
//        $this->lstYear->AddItem(new QListItem("2019", 2019));
//        $this->lstYear->AddItem(new QListItem("2020", 2020));
//        $this->lstYear->AddItem(new QListItem("2021", 2021));
//        $this->lstYear->AddItem(new QListItem("2022", 2022));
//        $this->lstYear->SelectedValue = 2017;        
//        $this->selectYearIni = 2017;
//        $this->selectYearFin = 2017;
//        $this->lstYear->AddAction(new QChangeEvent(), new QServerAction("lstYear_Change"));
//
//        QApplication::ExecuteJavaScript("showSuccess('Data loaded correctly!');");
    }

    public function functionName() {

        echo 'holas';
        $this->RenderAjax();
    }

}

CreaPrueba::Run('CreaPrueba');
?>