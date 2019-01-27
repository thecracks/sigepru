
<?php

require (__MODEL_CONNECTOR__ . '/DocenteConnector.class.php');

/**
 * This is the base class for the the DocenteEditPanel class.  It uses the code-generated
 * DocenteModelConnector class, which has methods to help with
 * easily creating/defining controls to modify the fields of a Docente columns.
 *
 * Implement your customizations in the DocenteEditPanel.class.php file, not here.
 * This file is overwritten every time you do a code generation, so any changes you make here will be lost.
 *
 * @package My QCubed Application
 */
class DocenteEditPanelGen extends QPanel {
	/** @var DocenteConnector */
	public $mctDocente;

	// Controls for Docente's Data Fields

	/** @var QListBox */
	protected $lstDocente;

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

		// Construct the DocenteConnector
		// MAKE SURE we specify "$this" as the Connector's (and thus all subsequent controls') parent
		$this->mctDocente = DocenteConnector::Create($this);

		$this->CreateObjects();
	}

	/**
	 * Call ModelConnector's methods to create QControls based on Docente's data fields
	 **/
	protected function CreateObjects() {
		$this->lstDocente = $this->mctDocente->lstDocente_Create();
		$this->txtCreateby = $this->mctDocente->txtCreateby_Create();
		$this->calCreated = $this->mctDocente->calCreated_Create();
		$this->txtUpdateby = $this->mctDocente->txtUpdateby_Create();
		$this->calUpdated = $this->mctDocente->calUpdated_Create();
		$this->txtActive = $this->mctDocente->txtActive_Create();
	}

	/**
	 * @param null|string $strDocenteId
	 **/
	public function Load ($strDocenteId = null) {
		if (!$this->mctDocente->Load ($strDocenteId)) {
			QApplication::DisplayAlert(QApplication::Translate('Could not load the record. Perhaps it was deleted? Try again.'));
		}
	}


	/**
     * Refresh the objects in the panel, optionally loading from saved data in the database.
     *
     * @param boolean $blnReload
	 **/
	public function Refresh ($blnReload = false) {
        $this->mctDocente->Refresh($blnReload);
	}


	public function Save($blnForceUpdate = false) {
		$this->mctDocente->SaveDocente($blnForceUpdate);
	}

	public function Delete() {
		$this->mctDocente->DeleteDocente();
	}

}
