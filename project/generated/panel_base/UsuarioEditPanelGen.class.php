
<?php

require (__MODEL_CONNECTOR__ . '/UsuarioConnector.class.php');

/**
 * This is the base class for the the UsuarioEditPanel class.  It uses the code-generated
 * UsuarioModelConnector class, which has methods to help with
 * easily creating/defining controls to modify the fields of a Usuario columns.
 *
 * Implement your customizations in the UsuarioEditPanel.class.php file, not here.
 * This file is overwritten every time you do a code generation, so any changes you make here will be lost.
 *
 * @package My QCubed Application
 */
class UsuarioEditPanelGen extends QPanel {
	/** @var UsuarioConnector */
	public $mctUsuario;

	// Controls for Usuario's Data Fields

	/** @var QTextBox */
	protected $txtUsuarioId;

	/** @var QTextBox */
	protected $txtNombre;

	/** @var QTextBox */
	protected $txtApellidoPaterno;

	/** @var QTextBox */
	protected $txtApellidoMaterno;

	/** @var QTextBox */
	protected $txtUser;

	/** @var QTextBox */
	protected $txtPassword;

	/** @var QTextBox */
	protected $txtEmail;

	/** @var QTextBox */
	protected $txtDni;

	/** @var QTextBox */
	protected $txtCreateby;

	/** @var QDateTimePicker */
	protected $calCreated;

	/** @var QTextBox */
	protected $txtUpdateby;

	/** @var QDateTimePicker */
	protected $calUpdated;

	/** @var QTextBox */
	protected $txtActive;

	// Controls to edit unique reverse references

	/** @var QListBox */
	protected $lstAlumno;
	/** @var QListBox */
	protected $lstDocente;

	/**
	 * @param QForm|QControl $objParentObject
	 * @param null|string $strControlId
	 * @throws Exception
	 * @throws QCallerException
	 */
	public function __construct($objParentObject, $strControlId = null) {
		// Call the Parent
		try {
			parent::__construct($objParentObject, $strControlId);
		} catch (QCallerException $objExc) {
			$objExc->IncrementOffset();
			throw $objExc;
		}

		// Construct the UsuarioConnector
		// MAKE SURE we specify "$this" as the Connector's (and thus all subsequent controls') parent
		$this->mctUsuario = UsuarioConnector::Create($this);

		$this->CreateObjects();
	}

	/**
	 * Call ModelConnector's methods to create QControls based on Usuario's data fields
	 **/
	protected function CreateObjects() {
		$this->txtUsuarioId = $this->mctUsuario->txtUsuarioId_Create();
		$this->txtNombre = $this->mctUsuario->txtNombre_Create();
		$this->txtApellidoPaterno = $this->mctUsuario->txtApellidoPaterno_Create();
		$this->txtApellidoMaterno = $this->mctUsuario->txtApellidoMaterno_Create();
		$this->txtUser = $this->mctUsuario->txtUser_Create();
		$this->txtPassword = $this->mctUsuario->txtPassword_Create();
		$this->txtEmail = $this->mctUsuario->txtEmail_Create();
		$this->txtDni = $this->mctUsuario->txtDni_Create();
		$this->txtCreateby = $this->mctUsuario->txtCreateby_Create();
		$this->calCreated = $this->mctUsuario->calCreated_Create();
		$this->txtUpdateby = $this->mctUsuario->txtUpdateby_Create();
		$this->calUpdated = $this->mctUsuario->calUpdated_Create();
		$this->txtActive = $this->mctUsuario->txtActive_Create();
		$this->lstAlumno = $this->mctUsuario->lstAlumno_Create();
		$this->lstDocente = $this->mctUsuario->lstDocente_Create();
	}

	/**
	 * @param null|string $strUsuarioId
	 **/
	public function Load ($strUsuarioId = null) {
		if (!$this->mctUsuario->Load ($strUsuarioId)) {
			QApplication::DisplayAlert(QApplication::Translate('Could not load the record. Perhaps it was deleted? Try again.'));
		}
	}


	/**
     * Refresh the objects in the panel, optionally loading from saved data in the database.
     *
     * @param boolean $blnReload
	 **/
	public function Refresh ($blnReload = false) {
        $this->mctUsuario->Refresh($blnReload);
	}


	public function Save($blnForceUpdate = false) {
		$this->mctUsuario->SaveUsuario($blnForceUpdate);
	}

	public function Delete() {
		$this->mctUsuario->DeleteUsuario();
	}

}
