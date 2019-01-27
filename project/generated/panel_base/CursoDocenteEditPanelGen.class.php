
<?php

require (__MODEL_CONNECTOR__ . '/CursoDocenteConnector.class.php');

/**
 * This is the base class for the the CursoDocenteEditPanel class.  It uses the code-generated
 * CursoDocenteModelConnector class, which has methods to help with
 * easily creating/defining controls to modify the fields of a CursoDocente columns.
 *
 * Implement your customizations in the CursoDocenteEditPanel.class.php file, not here.
 * This file is overwritten every time you do a code generation, so any changes you make here will be lost.
 *
 * @package My QCubed Application
 */
class CursoDocenteEditPanelGen extends QPanel {
	/** @var CursoDocenteConnector */
	public $mctCursoDocente;

	// Controls for CursoDocente's Data Fields

	/** @var QTextBox */
	protected $txtCursoDocenteId;

	/** @var QListBox */
	protected $lstCurso;

	/** @var QListBox */
	protected $lstSeccion;

	/** @var QListBox */
	protected $lstDocente;

	/** @var QListBox */
	protected $lstGrado;

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

		// Construct the CursoDocenteConnector
		// MAKE SURE we specify "$this" as the Connector's (and thus all subsequent controls') parent
		$this->mctCursoDocente = CursoDocenteConnector::Create($this);

		$this->CreateObjects();
	}

	/**
	 * Call ModelConnector's methods to create QControls based on CursoDocente's data fields
	 **/
	protected function CreateObjects() {
		$this->txtCursoDocenteId = $this->mctCursoDocente->txtCursoDocenteId_Create();
		$this->lstCurso = $this->mctCursoDocente->lstCurso_Create();
		$this->lstSeccion = $this->mctCursoDocente->lstSeccion_Create();
		$this->lstDocente = $this->mctCursoDocente->lstDocente_Create();
		$this->lstGrado = $this->mctCursoDocente->lstGrado_Create();
		$this->txtCreateby = $this->mctCursoDocente->txtCreateby_Create();
		$this->calCreated = $this->mctCursoDocente->calCreated_Create();
		$this->txtUpdateby = $this->mctCursoDocente->txtUpdateby_Create();
		$this->calUpdated = $this->mctCursoDocente->calUpdated_Create();
		$this->txtActive = $this->mctCursoDocente->txtActive_Create();
	}

	/**
	 * @param null|string $strCursoDocenteId
	 **/
	public function Load ($strCursoDocenteId = null) {
		if (!$this->mctCursoDocente->Load ($strCursoDocenteId)) {
			QApplication::DisplayAlert(QApplication::Translate('Could not load the record. Perhaps it was deleted? Try again.'));
		}
	}


	/**
     * Refresh the objects in the panel, optionally loading from saved data in the database.
     *
     * @param boolean $blnReload
	 **/
	public function Refresh ($blnReload = false) {
        $this->mctCursoDocente->Refresh($blnReload);
	}


	public function Save($blnForceUpdate = false) {
		$this->mctCursoDocente->SaveCursoDocente($blnForceUpdate);
	}

	public function Delete() {
		$this->mctCursoDocente->DeleteCursoDocente();
	}

}
