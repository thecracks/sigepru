
<?php

require (__MODEL_CONNECTOR__ . '/AlternativaConnector.class.php');

/**
 * This is the base class for the the AlternativaEditPanel class.  It uses the code-generated
 * AlternativaModelConnector class, which has methods to help with
 * easily creating/defining controls to modify the fields of a Alternativa columns.
 *
 * Implement your customizations in the AlternativaEditPanel.class.php file, not here.
 * This file is overwritten every time you do a code generation, so any changes you make here will be lost.
 *
 * @package My QCubed Application
 */
class AlternativaEditPanelGen extends QPanel {
	/** @var AlternativaConnector */
	public $mctAlternativa;

	// Controls for Alternativa's Data Fields

	/** @var QTextBox */
	protected $txtAlternativaId;

	/** @var QTextBox */
	protected $txtDescripcion;

	/** @var QListBox */
	protected $lstPregunta;

	/** @var QTextBox */
	protected $txtEsCorrecta;

	/** @var QIntegerTextBox */
	protected $txtOrden;

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

		// Construct the AlternativaConnector
		// MAKE SURE we specify "$this" as the Connector's (and thus all subsequent controls') parent
		$this->mctAlternativa = AlternativaConnector::Create($this);

		$this->CreateObjects();
	}

	/**
	 * Call ModelConnector's methods to create QControls based on Alternativa's data fields
	 **/
	protected function CreateObjects() {
		$this->txtAlternativaId = $this->mctAlternativa->txtAlternativaId_Create();
		$this->txtDescripcion = $this->mctAlternativa->txtDescripcion_Create();
		$this->lstPregunta = $this->mctAlternativa->lstPregunta_Create();
		$this->txtEsCorrecta = $this->mctAlternativa->txtEsCorrecta_Create();
		$this->txtOrden = $this->mctAlternativa->txtOrden_Create();
		$this->txtCreateby = $this->mctAlternativa->txtCreateby_Create();
		$this->calCreated = $this->mctAlternativa->calCreated_Create();
		$this->txtUpdateby = $this->mctAlternativa->txtUpdateby_Create();
		$this->calUpdated = $this->mctAlternativa->calUpdated_Create();
		$this->txtActive = $this->mctAlternativa->txtActive_Create();
	}

	/**
	 * @param null|string $strAlternativaId
	 **/
	public function Load ($strAlternativaId = null) {
		if (!$this->mctAlternativa->Load ($strAlternativaId)) {
			QApplication::DisplayAlert(QApplication::Translate('Could not load the record. Perhaps it was deleted? Try again.'));
		}
	}


	/**
     * Refresh the objects in the panel, optionally loading from saved data in the database.
     *
     * @param boolean $blnReload
	 **/
	public function Refresh ($blnReload = false) {
        $this->mctAlternativa->Refresh($blnReload);
	}


	public function Save($blnForceUpdate = false) {
		$this->mctAlternativa->SaveAlternativa($blnForceUpdate);
	}

	public function Delete() {
		$this->mctAlternativa->DeleteAlternativa();
	}

}
