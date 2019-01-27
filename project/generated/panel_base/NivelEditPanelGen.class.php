
<?php

require (__MODEL_CONNECTOR__ . '/NivelConnector.class.php');

/**
 * This is the base class for the the NivelEditPanel class.  It uses the code-generated
 * NivelModelConnector class, which has methods to help with
 * easily creating/defining controls to modify the fields of a Nivel columns.
 *
 * Implement your customizations in the NivelEditPanel.class.php file, not here.
 * This file is overwritten every time you do a code generation, so any changes you make here will be lost.
 *
 * @package My QCubed Application
 */
class NivelEditPanelGen extends QPanel {
	/** @var NivelConnector */
	public $mctNivel;

	// Controls for Nivel's Data Fields

	/** @var QTextBox */
	protected $txtNivelId;

	/** @var QTextBox */
	protected $txtNivel;

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

		// Construct the NivelConnector
		// MAKE SURE we specify "$this" as the Connector's (and thus all subsequent controls') parent
		$this->mctNivel = NivelConnector::Create($this);

		$this->CreateObjects();
	}

	/**
	 * Call ModelConnector's methods to create QControls based on Nivel's data fields
	 **/
	protected function CreateObjects() {
		$this->txtNivelId = $this->mctNivel->txtNivelId_Create();
		$this->txtNivel = $this->mctNivel->txtNivel_Create();
		$this->txtCreateby = $this->mctNivel->txtCreateby_Create();
		$this->calCreated = $this->mctNivel->calCreated_Create();
		$this->txtUpdateby = $this->mctNivel->txtUpdateby_Create();
		$this->calUpdated = $this->mctNivel->calUpdated_Create();
		$this->txtActive = $this->mctNivel->txtActive_Create();
	}

	/**
	 * @param null|string $strNivelId
	 **/
	public function Load ($strNivelId = null) {
		if (!$this->mctNivel->Load ($strNivelId)) {
			QApplication::DisplayAlert(QApplication::Translate('Could not load the record. Perhaps it was deleted? Try again.'));
		}
	}


	/**
     * Refresh the objects in the panel, optionally loading from saved data in the database.
     *
     * @param boolean $blnReload
	 **/
	public function Refresh ($blnReload = false) {
        $this->mctNivel->Refresh($blnReload);
	}


	public function Save($blnForceUpdate = false) {
		$this->mctNivel->SaveNivel($blnForceUpdate);
	}

	public function Delete() {
		$this->mctNivel->DeleteNivel();
	}

}
