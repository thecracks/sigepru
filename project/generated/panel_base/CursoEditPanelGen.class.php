
<?php

require (__MODEL_CONNECTOR__ . '/CursoConnector.class.php');

/**
 * This is the base class for the the CursoEditPanel class.  It uses the code-generated
 * CursoModelConnector class, which has methods to help with
 * easily creating/defining controls to modify the fields of a Curso columns.
 *
 * Implement your customizations in the CursoEditPanel.class.php file, not here.
 * This file is overwritten every time you do a code generation, so any changes you make here will be lost.
 *
 * @package My QCubed Application
 */
class CursoEditPanelGen extends QPanel {
	/** @var CursoConnector */
	public $mctCurso;

	// Controls for Curso's Data Fields

	/** @var QTextBox */
	protected $txtCursoId;

	/** @var QTextBox */
	protected $txtNombre;

	/** @var QTextBox */
	protected $txtDescripcion;

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

		// Construct the CursoConnector
		// MAKE SURE we specify "$this" as the Connector's (and thus all subsequent controls') parent
		$this->mctCurso = CursoConnector::Create($this);

		$this->CreateObjects();
	}

	/**
	 * Call ModelConnector's methods to create QControls based on Curso's data fields
	 **/
	protected function CreateObjects() {
		$this->txtCursoId = $this->mctCurso->txtCursoId_Create();
		$this->txtNombre = $this->mctCurso->txtNombre_Create();
		$this->txtDescripcion = $this->mctCurso->txtDescripcion_Create();
		$this->txtCreateby = $this->mctCurso->txtCreateby_Create();
		$this->calCreated = $this->mctCurso->calCreated_Create();
		$this->txtUpdateby = $this->mctCurso->txtUpdateby_Create();
		$this->calUpdated = $this->mctCurso->calUpdated_Create();
		$this->txtActive = $this->mctCurso->txtActive_Create();
	}

	/**
	 * @param null|string $strCursoId
	 **/
	public function Load ($strCursoId = null) {
		if (!$this->mctCurso->Load ($strCursoId)) {
			QApplication::DisplayAlert(QApplication::Translate('Could not load the record. Perhaps it was deleted? Try again.'));
		}
	}


	/**
     * Refresh the objects in the panel, optionally loading from saved data in the database.
     *
     * @param boolean $blnReload
	 **/
	public function Refresh ($blnReload = false) {
        $this->mctCurso->Refresh($blnReload);
	}


	public function Save($blnForceUpdate = false) {
		$this->mctCurso->SaveCurso($blnForceUpdate);
	}

	public function Delete() {
		$this->mctCurso->DeleteCurso();
	}

}
