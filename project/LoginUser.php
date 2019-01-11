<?php

require('qcubed.inc.php');
require('includes/configuration/prepend.inc.php');

class LoginUser extends QForm {

    protected $txtEmail;
    protected $txtPassword;
    protected $btnLogin;

    protected function Form_Run() {
        $userData = @unserialize($_SESSION['USER_DATA']);

        parent::Form_Run();

        if ($userData) {
            
        } else {
//            QApplication::Redirect(__MAIN_PATH__ . '/login');
        }
    }

    protected function Form_Create() {
        $this->txtEmail = new QTextBox($this, "dfs");
        $this->txtEmail->CssClass = "form-control";
        $this->txtEmail->Placeholder = "Email";

        $this->txtPassword = new QTextBox($this);
        $this->txtPassword->TextMode = QTextMode::Password;
        $this->txtPassword->CssClass = "form-control";
        $this->txtPassword->Placeholder = htmlentities("Password");
//        $this->txtPassword->Required = true;
        $this->txtPassword->AddAction(new QEnterKeyEvent(), new QAjaxAction("btnLogin_Click"));

        $this->btnLogin = new QJqButton($this, "botoncitoooooooooo");
        $this->btnLogin->Text = htmlentities("Log In");
        $this->btnLogin->HtmlEntities = false;
        $this->btnLogin->CssClass = "btn btn-primary btn-custom w-md waves-effect waves-light";
        $this->btnLogin->AddAction(new QClickEvent(), new QAjaxAction('btnLogin_Click'));
//        $this->btnLogin->CausesValidation = true;
    }

    protected function btnLogin_Click($strFormId, $strControlId, $strParameter) {
        $this->loginUsers();
    }

    protected function loginUsers() {
        $email = $this->txtEmail->Text;
        $password = $this->txtPassword->Text;

        if ($email == 'admin' && $password == '123') {
            QApplication::ExecuteJavaScript("msg_exito('Exito', 'Logeado correctamente')");
            QApplication::Redirect(__MAIN_PATH__ . '/dashboard-docente');
        } else {
            QApplication::ExecuteJavaScript("msg_error('Error', 'Usuario/Password incorrectos')");
        }
    }
}

LoginUser::Run('LoginUser');
?>