<?php

require('includes/configuration/prepend.inc.php');

class CreaPrueba extends QForm {

    protected $inputCabecera;
    protected $inputContenido;
    protected $btnGuardar;
    protected $chkVendor;

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

        $_SESSION['createdby'] = 'creadpor123213123';
        $_SESSION['updatedby'] = "actualizadopor333333333";
        $evaluacion = new Usuario();
        $evaluacion->ApellidoMaterno = "ORTEGA";
        $evaluacion->Save();
    }

    protected function Form_Create() {

        $this->inputCabecera = new QTextBox($this, "inputocultocabecera");
//        $this->inputCabecera->Display = FALSE;
//        $this->txtHideText->CssClass = "hide";

        $this->inputContenido = new QTextBox($this, "inputocultocontenido");
//        $this->inputContenido->Display = FALSE;

        $this->btnGuardar = new QButton($this, 'btnguardaestructura');
        $this->btnGuardar->Text = '<i class="fa fa-save m-r-5"></i> <span>Guardar</span>';
        $this->btnGuardar->HtmlEntities = false;
        $this->btnGuardar->CssClass = "btn btn-success btn-block waves-effect waves-light m-b-5";
        $this->btnGuardar->AddAction(new QClickEvent(), new QAjaxAction('btnGuardar'));
    }

    protected function btnGuardar($strFormId, $strControlId, $strParameter) {


        $evaluacion = new Examen();
        $evaluacion->ExamenId = "ajaxxxhtml";
        $evaluacion->Save();

        $htmlCabecera = $this->inputCabecera->Text;
        $htmlContenido = $this->inputContenido->Text;

        $this->inputContenido->Text = "cabecera : " . $htmlCabecera;
        $this->inputContenido->Refresh();



//        QApplication::ExecuteJavaScript("alert('" . () . "')");
    }

}

CreaPrueba::Run('CreaPrueba');
?>