
<?php

require (__MODEL_CONNECTOR__ . '/ExamenConnector.class.php');

/**
 * This is the base class for the the ExamenEditPanel class.  It uses the code-generated
 * ExamenModelConnector class, which has methods to help with
 * easily creating/defining controls to modify the fields of a Examen columns.
 *
 * Implement your customizations in the ExamenEditPanel.class.php file, not here.
 * This file is overwritten every time you do a code generation, so any changes you make here will be lost.
 *
 * @package My QCubed Application
 */
class ExamenEditPanelGen extends QPanel {
	/** @var ExamenConnector */
	public $mctExamen;

	// Controls for Examen's Data Fields

	/** @var QTextBox */
	protected $txtExamenId;

	/** @var QListBox */
	protected $lstCursoDocente;

	/** @var QTextBox */
	protected $txtCabeceraHtml;

	/** @var QTextBox */
	protected $txtTipo;

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

		// Construct the ExamenConnector
		// MAKE SURE we specify "$this" as the Connector's (and thus all subsequent controls') parent
		$this->mctExamen = ExamenConnector::Create($this);

		$this->CreateObjects();
	}

	/**
	 * Call ModelConnector's methods to create QControls based on Examen's data fields
	 **/
	protected function CreateObjects() {
		$this->txtExamenId = $this->mctExamen->txtExamenId_Create();
		$this->lstCursoDocente = $this->mctExamen->lstCursoDocente_Create();
		$this->txtCabeceraHtml = $this->mctExamen->txtCabeceraHtml_Create();
		$this->txtTipo = $this->mctExamen->txtTipo_Create();
		$this->txtCreateby = $this->mctExamen->txtCreateby_Create();
		$this->calCreated = $this->mctExamen->calCreated_Create();
		$this->txtUpdateby = $this->mctExamen->txtUpdateby_Create();
		$this->calUpdated = $this->mctExamen->calUpdated_Create();
		$this->txtActive = $this->mctExamen->txtActive_Create();
	}

	/**
	 * @param null|string $strExamenId
	 **/
	public function Load ($strExamenId = null) {
		if (!$this->mctExamen->Load ($strExamenId)) {
			QApplication::DisplayAlert(QApplication::Translate('Could not load the record. Perhaps it was deleted? Try again.'));
		}
	}


	/**
     * Refresh the objects in the panel, optionally loading from saved data in the database.
     *
     * @param boolean $blnReload
	 **/
	public function Refresh ($blnReload = false) {
        $this->mctExamen->Refresh($blnReload);
	}


	public function Save($blnForceUpdate = false) {
		$this->mctExamen->SaveExamen($blnForceUpdate);
	}

	public function Delete() {
		$this->mctExamen->DeleteExamen();
	}

}
